<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Products Controller
 *
 * @property \App\Model\Table\ProductsTable $Products
 * @method \App\Model\Entity\Product[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProductsController extends AppController
{
    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);

        $this->Authentication->allowUnauthenticated(['index', 'view', 'shoppingCart']);
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Stores', 'Precos'],
        ];
        $products = $this->paginate($this->Products, ['limit' => 3]);

        $this->set(compact('products'));
    }

    /**
     * View method
     *
     * @param string|null $id Product id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($slug = null)
    {
        $product = $this->Products->findBySlug($slug)
            ->contain(['Users', 'Stores', 'Precos', 'Categories'])
            ->first();

        $products = $this->Products->find()
            ->contain(
                [
                    'Users', 'Stores', 'Precos', 'Categories'
                ]
            );

        $this->set(compact('product', 'products'));
    }
}
