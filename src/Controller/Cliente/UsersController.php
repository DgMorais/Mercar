<?php
declare(strict_types=1);

namespace App\Controller\Cliente;

use App\Controller\AppController;
use Cake\I18n\FrozenTime;

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

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Groups'],
        ];
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Groups'],
        ]);

        $this->set(compact('user'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit()
    {
        $user = $this->Users->get($this->Authentication->getIdentity()->id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            if ($this->Authentication->getResult()->isValid()) {
                $data_nascimento = \DateTime::createFromFormat('d/m/Y' , $this->request->getData('data_nascimento'));
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
            ->contain(
                [
                    'Sales' => function ($q) {
                        return $q->contain(
                        [
                            'UserRequests.Products' => function ($q) 
                                {
                                    return $q->contain('Users')
                                        ->contain('Stores');
                                }
                        ])
                        // ->contain('Cupons')
                        ->order(['Sales.created' => 'DESC']);
                    }
                ]
            )
            ->first();

        if (!empty($user->endereco_padrao)) {
            $endereco_padrao = $this->Users->Enderecos->find()
                ->where(
                    [
                        'id' => $user->endereco_padrao
                    ]
                )
                ->first();
        } else {
            $endereco_padrao = NULL;
        }
        
        $enderecos = $user->enderecos;
        $add_endereco = NULL;

        if (!empty($user->data_nascimento)) {
            $user->data_nascimento = date_format($user->data_nascimento, 'd/m/Y');
        }

        $this->set(compact('user', 'user_logged', 'enderecos', 'endereco_padrao', 'add_endereco'));
    }

    public function defineDefaultAddress()
    {
        $user_logged = $this->Authentication->getIdentity();
        $user = $this->Users->get($user_logged->id);
        $user->endereco_padrao = $this->request->getData('id');
        if ($this->Users->save($user)) {
            $this->Users->Enderecos->updateSessionDeafultAddress($user);
            $this->Flash->success(__('Endereço padrão salvo com sucesso!'));

            return $this->redirect('/cliente/my-account?address');
        }
    }

    public function addAddress()
    {
        if ($this->request->is('post')) {
            $this->loadModel('Enderecos');
            $endereco = $this->Enderecos->newEmptyEntity();
            $user = $this->Users->get($this->Authentication->getIdentity()->id);
            $endereco = $this->Enderecos->patchEntity($endereco, $this->request->getData());
            $endereco->user_id = $user->id;
            if ($this->Enderecos->save($endereco)) {
                $this->Flash->success(__('The address has been saved.'));

                return $this->redirect('/cliente/my-account?address');
            }
        }
    }
}
