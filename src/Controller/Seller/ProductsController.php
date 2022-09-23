<?php
declare(strict_types=1);

namespace App\Controller\Seller;

use App\Controller\AppController;

/**
 * Products Controller
 *
 * @property \App\Model\Table\ProductsTable $Products
 * @method \App\Model\Entity\Product[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProductsController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();
        $this->loadComponent('UploaderToS3');
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Categories'],
        ];
        $products = $this->paginate($this->Products);

        $this->set(compact('products'));
    }

    /**
     * View method
     *
     * @param string|null $id Product id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $product = $this->Products->get($id, [
            'contain' => ['Users', 'Categories', 'Stores', 'Precos', 'UserRequests'],
        ]);

        $this->set(compact('product'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add($id = null)
    {
        $user_logged = $this->Authentication->getIdentity();
        $product = $this->Products->newEmptyEntity();
        $categories = $this->Products->Categories->find()->toArray();

        foreach ($categories as $categorie) {
            $list_category[$categorie->id] = $categorie->nome;
        }

        $store = $this->Products->Stores->get($id);

        if ($this->request->is('post')) {
            $attachment = $this->request->getData('images');
            $upload = $this->UploaderToS3->upload(
                $attachment,
                $this->Products,
                "uploads/products/{$store->id}/",
                'images'
            );
            if ($upload) {
                if ($this->Products->addNewProduct($this->request->getData(), $upload, $user_logged, $store)) {
                    return $this->redirect(['controller' => 'Stores', 'action' => 'view', 'prefix' => 'seller', $store->id]);
                }
            }
        }
        $this->set(compact('product', 'list_category', 'store'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Product id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $product = $this->Products->get($id, [
            'contain' => ['Stores'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $product = $this->Products->patchEntity($product, $this->request->getData());
            if ($this->Products->save($product)) {
                $this->Flash->success(__('The product has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The product could not be saved. Please, try again.'));
        }
        $users = $this->Products->Users->find('list', ['limit' => 200])->all();
        $categories = $this->Products->Categories->find('list', ['limit' => 200])->all();
        $stores = $this->Products->Stores->find('list', ['limit' => 200])->all();
        $this->set(compact('product', 'users', 'categories', 'stores'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Product id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $product = $this->Products->get($id);
        if ($this->Products->delete($product)) {
            $this->Flash->success(__('The product has been deleted.'));
        } else {
            $this->Flash->error(__('The product could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
