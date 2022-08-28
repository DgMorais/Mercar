<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * PaymentsQueue Controller
 *
 * @property \App\Model\Table\PaymentsQueueTable $PaymentsQueue
 * @method \App\Model\Entity\PaymentsQueue[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PaymentsQueueController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $paymentsQueue = $this->paginate($this->PaymentsQueue);

        $this->set(compact('paymentsQueue'));
    }

    /**
     * View method
     *
     * @param string|null $id Payments Queue id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $paymentsQueue = $this->PaymentsQueue->get($id, [
            'contain' => ['Sales'],
        ]);

        $this->set(compact('paymentsQueue'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $paymentsQueue = $this->PaymentsQueue->newEmptyEntity();
        if ($this->request->is('post')) {
            $paymentsQueue = $this->PaymentsQueue->patchEntity($paymentsQueue, $this->request->getData());
            if ($this->PaymentsQueue->save($paymentsQueue)) {
                $this->Flash->success(__('The payments queue has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The payments queue could not be saved. Please, try again.'));
        }
        $this->set(compact('paymentsQueue'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Payments Queue id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $paymentsQueue = $this->PaymentsQueue->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $paymentsQueue = $this->PaymentsQueue->patchEntity($paymentsQueue, $this->request->getData());
            if ($this->PaymentsQueue->save($paymentsQueue)) {
                $this->Flash->success(__('The payments queue has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The payments queue could not be saved. Please, try again.'));
        }
        $this->set(compact('paymentsQueue'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Payments Queue id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $paymentsQueue = $this->PaymentsQueue->get($id);
        if ($this->PaymentsQueue->delete($paymentsQueue)) {
            $this->Flash->success(__('The payments queue has been deleted.'));
        } else {
            $this->Flash->error(__('The payments queue could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
