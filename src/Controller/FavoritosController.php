<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Favoritos Controller
 *
 * @property \App\Model\Table\FavoritosTable $Favoritos
 * @method \App\Model\Entity\Favorito[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FavoritosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Products', 'Users'],
        ];
        $favoritos = $this->paginate($this->Favoritos);

        $this->set(compact('favoritos'));
    }

    /**
     * View method
     *
     * @param string|null $id Favorito id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $favorito = $this->Favoritos->get($id, [
            'contain' => ['Products', 'Users'],
        ]);

        $this->set(compact('favorito'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $favorito = $this->Favoritos->newEmptyEntity();
        if ($this->request->is('post')) {
            $favorito = $this->Favoritos->patchEntity($favorito, $this->request->getData());
            if ($this->Favoritos->save($favorito)) {
                $this->Flash->success(__('The favorito has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The favorito could not be saved. Please, try again.'));
        }
        $products = $this->Favoritos->Products->find('list', ['limit' => 200])->all();
        $users = $this->Favoritos->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('favorito', 'products', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Favorito id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $favorito = $this->Favoritos->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $favorito = $this->Favoritos->patchEntity($favorito, $this->request->getData());
            if ($this->Favoritos->save($favorito)) {
                $this->Flash->success(__('The favorito has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The favorito could not be saved. Please, try again.'));
        }
        $products = $this->Favoritos->Products->find('list', ['limit' => 200])->all();
        $users = $this->Favoritos->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('favorito', 'products', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Favorito id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $favorito = $this->Favoritos->get($id);
        if ($this->Favoritos->delete($favorito)) {
            $this->Flash->success(__('The favorito has been deleted.'));
        } else {
            $this->Flash->error(__('The favorito could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
