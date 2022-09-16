<div class="container my-3">
    <div class="p-2 border-bottom mb-3">
        <h2 class="text-left">Já recebemos seu pedido!</h2>
        <h5 class="text-left font-weight-normal text-danger">Aguarde enquanto processamos seu pagamento</h5>
    </div>
    <div class="border rounded">
        <div class="row p-2">
            <div class="col-12">
                <h5>Endereço de Entrega</h5>
                <div class="border rounded p-3">
                    <address>
                        <span class="d-inline-block px-2">
                            <strong>Destinatário:</strong> <?= $sale->endereco->destinatario ?>
                        </span>
                        
                        <div class="border d-flex py-2 px-3 justify-content-center">
                            <span class="mb-1 d-inline-block"><?= $sale->endereco->rua . '-' . $sale->endereco->numero ?><?=!empty($sale->endereco->complemento) ? ' - ' . $sale->endereco->complemento : '' ?></span>
                            <span class="mb-1 d-inline-block"><?= ', ' . $sale->endereco->bairro ?></span>
                            <span class="mb-1 d-inline-block"><?= ' - ' . $sale->endereco->cidade ?></span>
                            <span class="mb-1 d-inline-block"><?= '/' . $sale->endereco->estado ?></span>
                        </div>
                    </address>
                </div>
            </div>
        </div>
        <div class="row p-2">
            <div class="col-12">
                <h5>Itens do pedido</h5>
                <div class="border rounded p-3 col-12">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Produto</th>
                                <th scope="col">Quantidade</th>
                                <th scope="col">Preço</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($sale->user_requests as $request) : ?>
                            <tr>
                                <th scope="row"><?= $request->product->nome ?></th>
                                <td>1</td>
                                <td>R$ <?= number_format($request->product->preco->preco_por, 2, ',', '.') ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row p-2 mb-0">
            <div class="col-6">
                <h5>Desconto</h5>
                <div class="border rounded p-3 col-12">
                    <?php if (!empty($sale->cupon)) : ?>
                        <div>
                            <span><strong>Código do cupom: </strong><?= $sale->cupon->codigo ?></span><br>
                            <span><strong>Valor do desconto: </strong>R$ <?= number_format($sale->desconto, 2, ',', '.') ?></span>
                        </div>
                    <?php else: ?>
                        <div class="text-center text-danger">
                            <span><strong>Nenhum cupom de desconto aplicado!</strong></span>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-6">
                <h5>Total</h5>
                <div class="border rounded p-3 col-12">
                    <span><strong>Subtotal: </strong>R$ <?= number_format($sale->valor, 2, ',', '.') ?></span><br>
                    <?php if (!empty($sale->cupon)) : ?>
                        <div>
                            <span><strong>Desconto: </strong><span class="text-danger">- R$ <?= number_format($sale->desconto, 2, ',', '.') ?></span></span>
                        </div>
                    <?php endif; ?>
                    <span><strong>Total: </strong>R$ <?= number_format($sale->valor_final, 2, ',', '.') ?></span><br>
                </div>
            </div>
        </div>
        <div class="d-flex flex-row-reverse px-4">
            <?= $this->Html->link('Acompanhar Pedido',
                '/client/my-account?orders',
                [
                    'class' => 'btn btn-primary px-4 py-3 my-4'
                ]
            ) ?>
        </div>
    </div>
</div>
