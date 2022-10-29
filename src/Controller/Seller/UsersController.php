<?php
declare (strict_types = 1);

namespace App\Controller\Seller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);

        $this->Authentication->allowUnauthenticated(['profile', 'index']);
    }

    public function edit()
    {
        $user = $this->Users->get($this->Authentication->getIdentity()->id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            if ($this->Authentication->getResult()->isValid()) {
                $data_nascimento = \DateTime::createFromFormat('d/m/Y', $this->request->getData('data_nascimento'));
                $data_nascimento = date_format($data_nascimento, 'Y-m-d');
                $user = $this->Users->patchEntity($user, $this->request->getData());
                $user->data_nascimento = $data_nascimento;
                if ($this->Users->save($user)) {
                    $this->Flash->success(__('The user has been saved.'));

                    return $this->redirect(['action' => 'myAccount']);
                }
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('user'));
    }

    public function myAccount()
    {
        $user_logged = $this->Authentication->getIdentity();

        $user = $this->Users->find()
            ->where(
                [
                    'id' => $user_logged->id
                ]
            )
            ->contain('Enderecos')
            ->first();

        $stores = $this->Users->Stores->find()
            ->where(
                [
                    'user_id' => $user_logged->id,
                ]
            )
            ->toArray();

        $sales = $this->Users->Sales->find()
            ->where(
                [
                    'user_id' => $user_logged->id
                ]
            )
            ->contain('UserRequests.Products.Users.Stores')
            ->contain('Cupons');

        $list_sales = $sales->toArray();
        if (!empty($list_sales)) {
            $sales = $this->paginate($sales, ['limit' => 1, 'order' => ['created' => 'desc']]);
            $this->set(compact('sales', 'list_sales'));
        }

        $store_ids = [];
        foreach($stores as $store) {
            array_push($store_ids, $store->id);
        }

        $this->UserRequests = TableRegistry::getTableLocator()->get('UserRequests');

        $requests = $this->UserRequests->find()
            ->where(
                [
                    'OR' => [
                        ['Products.user_id' => $user_logged->id],
                        ['Products.user_id IN (' . implode(',',$store_ids) . ')']
                    ]
                ]
            )
            ->contain('Sales.Cupons')
            ->contain('Products');

        if (!empty($stores)) {
            $this->set(compact('stores'));
        }
        
        if (!empty($requests)) {
            $requests = $this->paginate($requests, ['limit' => 3, 'order' => ['created' => 'desc']]);
            $this->set(compact('requests'));
        }

        $this->set(compact('user', 'user_logged'));
    }

    public function advancedPanel()
    {
        
    }
}
