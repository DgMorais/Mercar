<?php
declare(strict_types=1);

namespace App\Controller\Seller;

use App\Controller\AppController;

/**
 * Store Controller
 *
 * @method \App\Model\Entity\Store[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class StoresController extends AppController
{
    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);

        $this->Authentication->allowUnauthenticated(['index']);
    }

    public function index()
    {
        $store = $this->paginate($this->Stores);

        $this->set(compact('store'));
    }

    public function view($id = null)
    {
        $store = $this->Stores->get($id);

        $products = $this->Stores->Products->find()
            ->where(
                [
                    'store_id' => $store->id
                ]
            )
            ->contain('Precos');

        $products = $this->paginate($products);

        $this->set(compact('store', 'products'));
    }

    public function newStore()
    {
        if ($this->request->is('post')) {
            $request = $this->request->getData();

            $user = $this->Stores->Users->get($this->Authentication->getIdentity()->id);

            $request['user_id'] = $user->id;
            $request['slug'] = preg_replace('/[ ]/', '-', strtolower ($request['nome']));

            $new_store = $this->Stores->newEmptyEntity();
            $new_store = $this->Stores->patchEntity($new_store, $request);
            if ($this->Stores->save($new_store)) {
                return $this->redirect(['controller' => 'Users', 'action' => 'myAccount']);
            }
        }
    }

    public function edit($id = null)
    {
        $store = $this->Store->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $store = $this->Store->patchEntity($store, $this->request->getData());
            if ($this->Store->save($store)) {
                $this->Flash->success(__('The store has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The store could not be saved. Please, try again.'));
        }
        $this->set(compact('store'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $store = $this->Store->get($id);
        if ($this->Store->delete($store)) {
            $this->Flash->success(__('The store has been deleted.'));
        } else {
            $this->Flash->error(__('The store could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
