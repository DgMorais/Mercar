<?php

declare(strict_types=1);

namespace App\Controller;

use App\Controller\AppController;
use Cake\I18n\FrozenTime;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ShopsController extends AppController
{
    public $config = [
        'limit' => 9,
        'order' => [
            'Products.nome' => 'asc'
        ]
    ];

    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);

        $this->Authentication->allowUnauthenticated(['index', 'addProductToCart', 'clearCart', 'listCart', 'removeItemCart', 'cart', 'addCupom']);
    }

    public function index()
    {
        if ($this->request->is('get')) {
            $this->loadModel('Products');
            if (!empty($this->Authentication->getIdentity())) {
                $user_logged = $this->Authentication->getIdentity();
                $products = $this->Products->searchProducts($this->request->getQuery('search'), $user_logged->id);
            } else {
                $products = $this->Products->searchProducts($this->request->getQuery('search'));
            }

            $products_cart = $this->getRequest()->getSession()->read('carrinho');

            $this->set('products', $this->Paginator->paginate($products, $this->config));
            if (isset($user_logged)) {
                $this->set(compact('user_logged'));
            }
            if (!empty($products_cart)) {
                $this->set(compact('products_cart'));
            }
        }
    }

    public function addProductToCart($id)
    {
        $this->loadModel('Products');
        $product = $this->Products->findById($id)
            ->contain(
                [
                    'Precos',
                    'Categories'
                ]
            )
            ->first();

        if (!empty($this->getRequest()->getSession()->read('carrinho'))) {
            $carrinho = $this->getRequest()->getSession()->read('carrinho');
        }


        $carrinho['carrinho'][$product->id]['id'] = $product->id;
        $carrinho['carrinho'][$product->id]['image'] = $product->images;
        $carrinho['carrinho'][$product->id]['nome'] = $product->nome;
        $carrinho['carrinho'][$product->id]['category'] = $product->category->nome;
        $carrinho['carrinho'][$product->id]['preco_de'] = $product->preco->preco_de;
        $carrinho['carrinho'][$product->id]['preco_por'] = $product->preco->preco_por;
        $carrinho['carrinho'][$product->id]['max_parcelas'] = $product->max_parcelas;

        $this->getRequest()->getSession()->write('carrinho', $carrinho);
        die(json_encode($carrinho['carrinho']));
    }

    public function listCart()
    {
        $carrinho = $this->getRequest()->getSession()->read('carrinho');
        if (!empty($carrinho)) {
            die(json_encode($carrinho['carrinho']));
        } else {
            return null;
        }
    }

    public function removeItemCart($id)
    {
        if (!empty($this->getRequest()->getSession()->read('carrinho'))) {
            $carrinho = $this->getRequest()->getSession()->read('carrinho');
        }
        unset($carrinho['carrinho'][$id]);
        $this->getRequest()->getSession()->write('carrinho', $carrinho);
        $this->Flash->success(__('Produto removido do carrinho!'));
        die(json_encode('Produto removido do carrinho!'));
    }

    public function cart()
    {
        $cart = $this->getRequest()->getSession()->read('carrinho');
        $user_logged = $this->Authentication->getIdentity();
        $this->set(compact('cart', 'user_logged'));
    }

    public function finalizePurchase()
    {
        $cart = $this->getRequest()->getSession()->read('carrinho');
        if (!empty($cart)) {
            $this->Sales = $this->loadModel('Sales');
            $this->UserRequests = $this->loadModel('UserRequests');
            
            $user_logged = $this->Authentication->getIdentity();            
            $new_sale['user_id'] = $user_logged->id;
            $new_sale['valor'] = 0;
            foreach ($cart['carrinho'] as $product) {
                $new_sale['valor'] += $product['preco_por'];
            }
            if (isset($cart['desconto'])) {
                $new_sale['desconto'] = $cart['desconto']['valor_desconto'];
                $new_sale['cupom_id'] = $cart['desconto']['cupom_id'];
            } else {
                $new_sale['desconto'] = 0;
            }
            $new_sale['valor_final'] = $new_sale['valor'] - $new_sale['desconto'];
            $new_sale = $this->Sales->newEntity($new_sale);
            $new_sale_requests = $this->Sales->save($new_sale);
            if ($new_sale_requests) {
                foreach ($cart['carrinho'] as $product) {
                    $new_request['sale_id'] = $new_sale_requests->id;
                    $new_request['product_id'] = $product['id'];
                    $new_request['valor'] = $product['preco_por'];
                    $new_request['liberado'] = false;
                    $new_request_save = $this->UserRequests->newEntity($new_request);
                    $this->UserRequests->save($new_request_save);
                }
                $this->getRequest()->getSession()->write('carrinho.id_sale', $new_sale_requests->id);
                $this->Flash->success(__('Produtos salvos! Favor selecionar o endereço para entrega!'));
                return $this->redirect('/address-checkout');
            } else {
                return false;
            }
        }
    }

    public function checkout()
    {
        if (!empty($this->getRequest()->getSession()->read('carrinho.carrinho'))) {
            $max_parcelas = 0;
            $parcelas = [];
            $total = 0;
            $cart = $this->getRequest()->getSession()->read('carrinho');
            foreach ($cart['carrinho'] as $product) {
                if (isset($max_parcelas) && ($product['max_parcelas'] > $max_parcelas)) {
                    $max_parcelas = $product['max_parcelas'];
                }
                $total += $product['preco_por'];
            }
            for ($p = 1; $p <= $max_parcelas; $p++) {
                $parcela = number_format(($total / $p), 2, ',', '.');
                array_push($parcelas, "{$p} x R$ {$parcela}");
            }
            $this->set(compact('cart', 'total', 'parcelas'));
        } else {
            $this->Flash->success(__('Você não adicionou itens ao carrinho de compras! Que tal começar a comprar!'));
            return $this->redirect('/');
        }
    }

    public function addressCheckout()
    {
        $this->Enderecos = $this->loadModel('Enderecos');
        $user_logged = $this->Authentication->getIdentity();
        if (!empty($user_logged->endereco_padrao)) {
            $default_address = $this->Enderecos->get($user_logged->endereco_padrao);
            $this->set(compact('default_address'));
        }
        $this->set(compact('user_logged'));
        if ($this->request->is('post')) {
            $cart = $this->getRequest()->getSession()->read('carrinho');
            if ($this->request->getQuery('selected-address')) {
                $address = $this->Enderecos->find()
                    ->where([
                        'id' => $this->request->getData('id'),
                        'user_id' => $user_logged->id
                    ])
                    ->first();
            } else {
                $address = $this->Enderecos->find()
                    ->where([
                        'cep' => $this->request->getData('cep'),
                        'user_id' => $user_logged->id
                    ])
                    ->first();
                if (empty($endereco)) {
                    $name_to_send = array_slice($this->request->getData(), 0, 2, true);
                    $address_to_save = array_slice($this->request->getData(), 2, 7, true);
                    $address_to_save['user_id'] = $user_logged->id;
                    $address_to_save['destinatario'] = implode(' ', $name_to_send);
                    $address = $this->Enderecos->newEntity($address_to_save);
                    $address = $this->Enderecos->save($address);
                    if ($this->request->getData('endereco_padrao')) {
                        $this->Users = $this->loadModel('Users');
                        $user = $this->Users->get($user_logged->id);
                        $user->endereco_padrao = $address->id;
                        $this->Users->save($user);
                    }
                    if ($address) {
                        $this->Flash->success(__('Endereço salvo com sucesso!'));
                    } else {
                        $this->Flash->warning(__('Erro ao salvar endereço, favor entrar em contato com o suporte!'));
                        return $this->redirect('/address-checkout');
                    }
                } else {
                    $this->Flash->warning(__('Esse endereço já foi cadastrado! Favor seleciona-lo abaixo'));
                    return $this->redirect('/address-checkout');
                }
            }
            if ($this->addAddressToSale($address, $cart)) {
                return $this->redirect('/check-purchase');
            } else {
                $this->Flash->error(__('Erro ao tentar salvar o endereço para entrega!'));
                return $this->redirect('/cart');
            }
        } else {
            if (!empty($this->getRequest()->getSession()->read('carrinho.carrinho'))) {
                $user_address = $this->Enderecos->find()
                    ->where(
                        [
                            'user_id' => $user_logged->id
                        ]
                    )
                    ->toArray();
                $cart = $this->getRequest()->getSession()->read('carrinho.carrinho');
                if (!empty($user_address)) {
                    $this->set(compact('user_address'));
                }
                $this->set(compact('cart'));
            } else {
                $this->Flash->success(__('Você não adicionou itens ao carrinho de compras! Que tal começar a comprar!'));
                return $this->redirect('/');
            }
        }
    }

    public function checkPurchase()
    {
        $this->Sales = $this->loadModel('Sales');
        $user_logged = $this->Authentication->getIdentity();
        $sale_id = $this->getRequest()->getSession()->read('carrinho.id_sale');
        $cupom = $this->getRequest()->getSession()->read('carrinho.desconto');
        if ($cupom) {
            $sale = $this->Sales->find()
                ->where([
                    'Sales.user_id' => $user_logged->id,
                    'Sales.id' => $sale_id
                ])
                ->contain(['UserRequests' => function ($q) {
                    return $q->contain(['Products' => function ($q) {
                        return $q->contain(['Precos']);
                    }]);
                }])
                ->contain(['Enderecos'])
                ->contain(['Cupons'])
                ->first();
        } else {
            $sale = $this->Sales->find()
                ->where([
                    'Sales.user_id' => $user_logged->id,
                    'Sales.id' => $sale_id
                ])
                ->contain(['UserRequests' => function ($q) {
                    return $q->contain(['Products' => function ($q) {
                        return $q->contain(['Precos']);
                    }]);
                }])
                ->contain(['Enderecos'])
                ->first();
        }
        $this->set(compact('sale', 'user_logged'));
    }

    private function addAddressToSale($endereco, $cart)
    {
        $this->Sales = $this->loadModel('Sales');
        $sale = $this->Sales->find()
            ->where([
                'id' => $cart['id_sale']
            ])
            ->contain(['UserRequests'])
            ->first();

        $sale->address_id = $endereco->id;
        if ($this->Sales->save($sale)) {
            return true;
        } else {
            return false;
        }
    }

    public function addCupom($codigo)
    {
        $this->Cupons = $this->loadModel('Cupons');
        $cupom = $this->Cupons->find()
            ->where(
                [
                    'codigo' => $codigo
                ]
            )
            ->first();

        if (!empty($cupom)) {
            $cart = $this->getRequest()->getSession()->read('carrinho.carrinho');
            if (isset($cart)) {
                $subtotal = 0;
                foreach ($cart as $product) {
                    $subtotal += $product['preco_por'];
                }
                $desconto['valor_desconto'] = number_format($this->Cupons->calculaCupom($cupom, $subtotal), 2, '.', '');
                $desconto['total_compra'] = number_format($subtotal - $desconto['valor_desconto'], 2, '.', '');
                $desconto['cupom_id'] = $cupom->id;
                $this->getRequest()->getSession()->write('carrinho.desconto', $desconto);
                die(json_encode($this->getRequest()->getSession()->read('carrinho.desconto')));
            }
        } else {
            $this->getRequest()->getSession()->delete('carrinho.desconto');
            die(json_encode(false));
        }        
    }

    public function clearShoppingCart()
    {
        $session = $this->getRequest()->getSession();
        $session->delete('carrinho');
        $this->Flash->success(__('Carrinho limpo com sucesso!'));
        return $this->redirect('/cart');
    }
}
