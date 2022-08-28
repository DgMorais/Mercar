<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Sales Controller
 *
 * @property \App\Model\Table\SalesTable $Sales
 * @method \App\Model\Entity\Sale[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SalesController extends AppController
{
    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);
    }

    public function paymentSale($id_sale = null)
    {
        $sale = $this->Sales->get($id_sale);
        if (!empty($sale)) {
            $request = $this->request->getData();
            if ($this->Sales->newPaymentQueue($sale, $request)) {
                return $this->redirect(['action' => 'completedPucharse', $id_sale]);
            }
        }
    }

    public function completedPucharse($id_sale) 
    {
        $user_logged = $this->Authentication->getIdentity();
        if (!empty($id_sale)) {
            $sale = $this->Sales->find()
                ->where(
                    ['Sales.id' => $id_sale]
                )
                ->contain(['UserRequests', 'Enderecos', 'UserRequests.Products.Precos']);
            $desconto = $this->getRequest()->getSession()->read('carrinho.desconto');
            if (!empty($desconto)) {
                $sale = $sale->contain(['Cupons']);
            }
            $sale = $sale->first();
            if ($sale->user_id == $user_logged->id) {
                if (!empty($this->getRequest()->getSession()->read('carrinho'))) {
                    $session = $this->getRequest()->getSession();
                    $session->delete('carrinho');
                    $this->Flash->success(__('Compra finalizada! Estamos processando o pagamento!'));
                }
                $this->set(compact('sale', 'user_logged'));
            } else {
                $this->Flash->warning(__('Você não tem permissão para acessar essa página!'));
                return $this->redirect('/');
            }
        }
    }

    public function updateSale($id_sale)
    {
        if ($this->request->is('PUT')) {
            $request = $this->request->getData();
            if (!empty($id_sale) && !empty($request)) {
                if ($request['reference_id'] == $id_sale) {
                    $sale = $this->Sales->get($id_sale,
                        [
                            'contain' => 'UserRequests'
                        ]
                    );
                    $sale->id_pagseguro = $request['id'];
                    $sale->status_pagseguro = $request['status'];
                    if ($sale->status_pagamento == 'Pago') {
                        $sale->liberado = true;
                    }
                    if ($this->Sales->save($sale)) {
                        return $this->response->withStatus(200);
                    }
                }
            }
        }
    }
}
