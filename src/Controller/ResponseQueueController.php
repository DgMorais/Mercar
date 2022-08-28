<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ResponseQueue Controller
 *
 * @property \App\Model\Table\ResponseQueueTable $ResponseQueue
 * @method \App\Model\Entity\ResponseQueue[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ResponseQueueController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $responseQueue = $this->paginate($this->ResponseQueue);

        $this->set(compact('responseQueue'));
    }

    /**
     * View method
     *
     * @param string|null $id Response Queue id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $responseQueue = $this->ResponseQueue->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('responseQueue'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $responseQueue = $this->ResponseQueue->newEmptyEntity();
        if ($this->request->is('post')) {
            $responseQueue = $this->ResponseQueue->patchEntity($responseQueue, $this->request->getData());
            if ($this->ResponseQueue->save($responseQueue)) {
                $this->Flash->success(__('The response queue has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The response queue could not be saved. Please, try again.'));
        }
        $this->set(compact('responseQueue'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Response Queue id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $responseQueue = $this->ResponseQueue->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $responseQueue = $this->ResponseQueue->patchEntity($responseQueue, $this->request->getData());
            if ($this->ResponseQueue->save($responseQueue)) {
                $this->Flash->success(__('The response queue has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The response queue could not be saved. Please, try again.'));
        }
        $this->set(compact('responseQueue'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Response Queue id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $responseQueue = $this->ResponseQueue->get($id);
        if ($this->ResponseQueue->delete($responseQueue)) {
            $this->Flash->success(__('The response queue has been deleted.'));
        } else {
            $this->Flash->error(__('The response queue could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
