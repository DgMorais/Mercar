<div class="main-wrapper">
    <?php if (isset($cart)) :?>
        <!-- Cart Area Start -->
        <div class="cart-main-area pt-100px pb-100px">
            <div class="container">
                <div class="cart-heading">
                    <h2 class="text-center">Carrinho de Compras</h2>
                </div>
                <h3 class="cart-page-title">Itens</h3>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <form action="#">
                            <div class="table-content table-responsive cart-table-content">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Imagem</th>
                                            <th>Nome</th>
                                            <th>Preço por unidade</th>
                                            <th>Quantidade</th>
                                            <th>Subtotal</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($cart['carrinho'] as $product_cart) :?>
                                            <tr id="product-cart">
                                                <td class="product-thumbnail">
                                                    <?= $this->Html->image('product-image/1.webp',
                                                        [
                                                            'alt' => 'Produto',
                                                            'class' => 'w-50'
                                                        ]
                                                    )?>
                                                </td>
                                                <td class="product-name"><a href="#"><?= $product_cart['nome']?></a></td>
                                                <td class="product-price-cart" data-price="<?= $product_cart['preco_por'] ?>">R$ <?= number_format($product_cart['preco_por'], 2, ',', '.') ?></td>
                                                <td class="product-quantity">
                                                    <div class="cart-plus-minus">
                                                        <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" />
                                                    </div>
                                                </td>
                                                <td class="product-subtotal"></td>
                                                <td class="product-remove">
                                                    <a href="#"><i class="fa fa-times"></i></a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="cart-shiping-update-wrapper">
                                        <div class="cart-shiping-update">
                                            <a href="/">Continuar comprando</a>
                                        </div>
                                        <div class="cart-clear">
                                            <button>Atualizar carrinho de compras</button>
                                            <a href="/clear-shopping-cart">Limpar carrinho de compras</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="row">
                            <div class="col-lg-4 col-md-6 mb-lm-30px">
                                <div class="cart-tax">
                                    <div class="title-wrap">
                                        <h4 class="cart-bottom-title section-bg-gray">Calcular Frete</h4>
                                    </div>
                                    <div class="tax-wrapper">
                                        <div class="tax-select-wrapper">
                                            <div class="tax-select mb-25px">
                                                <label>
                                                    CEP
                                                </label>
                                                <input type="text" />
                                            </div>
                                            <button class="cart-btn-2 w-100" type="button">Calcular</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-lm-30px">
                                <div class="discount-code-wrapper">
                                    <div class="title-wrap">
                                        <h4 class="cart-bottom-title section-bg-gray">Cupom de Desconto</h4>
                                    </div>
                                    <div class="discount-code">
                                        <p>Insira o código do seu cupom</p>
                                        <input type="text" class="mb-3" name="cupom" />
                                        <button class='btn btn-primary mt-0 py-3 rounded-0 w-100' id='btn-add-cupom'>Aplicar Cupom</button>
                                        <p class="text-center text-danger m-0 mt-3 coupon-n-found d-none">Cupom não encontrado</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12 mt-md-30px">
                                <div class="grand-totall">
                                    <div class="title-wrap">
                                        <h4 class="cart-bottom-title section-bg-gary-cart">Total</h4>
                                    </div>
                                    <h5>Subtotal <span id="subtotal-products"></span></h5>
                                    <?php if (isset($cart['desconto'])) : ?>
                                        <div id="sale-discount">
                                            <h5>Desconto
                                                <span id="discount" data-discount="<?= $cart['desconto']['valor_desconto'] ?>">
                                                    R$ <?= number_format($cart['desconto']['valor_desconto'], 2, ',', '.') ?>
                                                </span>
                                            </h5>
                                        </div>
                                    <?php else: ?>
                                        <div id="sale-discount"></div>
                                    <?php endif; ?>
                                    <h4 class="grand-totall-title">Total <span id="total-products"></span></h4>
                                    <?= $this->Html->link('Finalizar compra', '/finalize-purchase') ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Cart Area End -->
    <?php else:?>
        <!-- Empty Cart area start -->
        <div class="empty-cart-area pb-100px pt-100px">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="cart-heading">
                            <h2 class="text-center">Carrinho de Compras</h2>
                        </div>
                        <div class="empty-text-contant text-center">
                            <i class="pe-7s-shopbag"></i>
                            <h3>Não há itens em seu carrinho</h3>
                            <a class="empty-cart-btn" href="/">
                                <i class="fa fa-arrow-left"> </i>Ir às compras
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Empty Cart area end -->
    <?php endif;?>
</div>
<script>
    $(document).ready(function() {
        var subtotal_sale = 0;
        document.querySelectorAll('.product-price-cart').forEach(function(element, index) {
            subtotal_sale += parseFloat(element.getAttribute("data-price"));
        })
        document.getElementById('subtotal-products').textContent = subtotal_sale.toLocaleString('pt-br',{style: 'currency', currency: 'BRL'});
        var discount = document.getElementById('discount-value');
        if (discount) {
            value_discount = parseFloat(discount.getAttribute("data-discount"));
            var total = subtotal_sale - value_discount;
            document.getElementById('total-products').textContent = total.toLocaleString('pt-br',{style: 'currency', currency: 'BRL'});
        } else {
            document.getElementById('total-products').textContent = subtotal_sale.toLocaleString('pt-br',{style: 'currency', currency: 'BRL'});
        }

        $('#btn-add-cupom').click(function() {
            var codigo = $('[name=cupom]').val();
            if (codigo != '') {
                $.ajax({
                    url : "/add-cupom/" + codigo,
                    method: 'POST',
                    dataType: 'JSON',
                    data: {subtotal_sale},
                }).done((msg) => {
                    if (msg) {
                        let discount = parseFloat(Object.values(msg)[0])
                        let div = $('#sale-discount');
                        div.empty();
                        let title = $('<h5 />');
                        let span = $('<span />' , {
                            id: "discount",
                            data_discount: parseFloat(Object.values(msg)[0])
                        });
                        
                        span.append(discount.toLocaleString('pt-br',{style: 'currency', currency: 'BRL'}))
                        title.append('Desconto');
                        title.append(span);
                        div.append(title);
    
                        document.getElementById('total-products').textContent = parseFloat(Object.values(msg)[1]).toLocaleString('pt-br',{style: 'currency', currency: 'BRL'});
                    } else {
                        $('#sale-discount').empty();
                        $('.coupon-n-found').removeClass('d-none')
                        setTimeout(() => {
                            $('.coupon-n-found').fadeOut('slow', function() {
                                $(this).addClass("d-none");
                            });
                        }, 2000);
                        document.getElementById('total-products').textContent = subtotal_sale.toLocaleString('pt-br',{style: 'currency', currency: 'BRL'});
                    }
                });
            } else {

            }
        })
    })
</script>
