<?php
declare(strict_types=1);

namespace App\Controller\Seller;

use App\Controller\AppController;

/**
 * UserRequests Controller
 *
 * @property \App\Model\Table\UserRequestsTable $UserRequests
 * @method \App\Model\Entity\UserRequest[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UserRequestsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Sales', 'Products'],
        ];
        $userRequests = $this->paginate($this->UserRequests);

        $this->set(compact('userRequests'));
    }

    /**
     * View method
     *
     * @param string|null $id User Request id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $userRequest = $this->UserRequests->get($id, [
            'contain' => ['Sales', 'Products'],
        ]);

        $this->set(compact('userRequest'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $userRequest = $this->UserRequests->newEmptyEntity();
        if ($this->request->is('post')) {
            $userRequest = $this->UserRequests->patchEntity($userRequest, $this->request->getData());
            if ($this->UserRequests->save($userRequest)) {
                $this->Flash->success(__('The user request has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user request could not be saved. Please, try again.'));
        }
        $sales = $this->UserRequests->Sales->find('list', ['limit' => 200])->all();
        $products = $this->UserRequests->Products->find('list', ['limit' => 200])->all();
        $this->set(compact('userRequest', 'sales', 'products'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User Request id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $userRequest = $this->UserRequests->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $userRequest = $this->UserRequests->patchEntity($userRequest, $this->request->getData());
            if ($this->UserRequests->save($userRequest)) {
                $this->Flash->success(__('The user request has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user request could not be saved. Please, try again.'));
        }
        $sales = $this->UserRequests->Sales->find('list', ['limit' => 200])->all();
        $products = $this->UserRequests->Products->find('list', ['limit' => 200])->all();
        $this->set(compact('userRequest', 'sales', 'products'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User Request id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $userRequest = $this->UserRequests->get($id);
        if ($this->UserRequests->delete($userRequest)) {
            $this->Flash->success(__('The user request has been deleted.'));
        } else {
            $this->Flash->error(__('The user request could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
