<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Precos Controller
 *
 * @property \App\Model\Table\PrecosTable $Precos
 * @method \App\Model\Entity\Preco[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PrecosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $precos = $this->paginate($this->Precos);

        $this->set(compact('precos'));
    }

    /**
     * View method
     *
     * @param string|null $id Preco id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $preco = $this->Precos->get($id, [
            'contain' => ['Products'],
        ]);

        $this->set(compact('preco'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $preco = $this->Precos->newEmptyEntity();
        if ($this->request->is('post')) {
            $preco = $this->Precos->patchEntity($preco, $this->request->getData());
            if ($this->Precos->save($preco)) {
                $this->Flash->success(__('The preco has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The preco could not be saved. Please, try again.'));
        }
        $this->set(compact('preco'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Preco id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $preco = $this->Precos->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $preco = $this->Precos->patchEntity($preco, $this->request->getData());
            if ($this->Precos->save($preco)) {
                $this->Flash->success(__('The preco has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The preco could not be saved. Please, try again.'));
        }
        $this->set(compact('preco'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Preco id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $preco = $this->Precos->get($id);
        if ($this->Precos->delete($preco)) {
            $this->Flash->success(__('The preco has been deleted.'));
        } else {
            $this->Flash->error(__('The preco could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
