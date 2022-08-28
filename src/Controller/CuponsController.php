<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Cupons Controller
 *
 * @property \App\Model\Table\CuponsTable $Cupons
 * @method \App\Model\Entity\Cupon[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CuponsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Categories'],
        ];
        $cupons = $this->paginate($this->Cupons);

        $this->set(compact('cupons'));
    }

    /**
     * View method
     *
     * @param string|null $id Cupon id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cupon = $this->Cupons->get($id, [
            'contain' => ['Categories'],
        ]);

        $this->set(compact('cupon'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cupon = $this->Cupons->newEmptyEntity();
        if ($this->request->is('post')) {
            $cupon = $this->Cupons->patchEntity($cupon, $this->request->getData());
            if ($this->Cupons->save($cupon)) {
                $this->Flash->success(__('The cupon has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cupon could not be saved. Please, try again.'));
        }
        $categories = $this->Cupons->Categories->find('list', ['limit' => 200])->all();
        $this->set(compact('cupon', 'categories'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Cupon id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cupon = $this->Cupons->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cupon = $this->Cupons->patchEntity($cupon, $this->request->getData());
            if ($this->Cupons->save($cupon)) {
                $this->Flash->success(__('The cupon has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cupon could not be saved. Please, try again.'));
        }
        $categories = $this->Cupons->Categories->find('list', ['limit' => 200])->all();
        $this->set(compact('cupon', 'categories'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Cupon id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cupon = $this->Cupons->get($id);
        if ($this->Cupons->delete($cupon)) {
            $this->Flash->success(__('The cupon has been deleted.'));
        } else {
            $this->Flash->error(__('The cupon could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
