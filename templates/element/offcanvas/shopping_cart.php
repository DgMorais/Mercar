<!-- OffCanvas Cart Start -->
<div id="offcanvas-cart" class="offcanvas offcanvas-cart">
    <div class="inner">
        <div class="head">
            <span class="title">Carrinho</span>
            <button class="offcanvas-close">×</button>
        </div>
        <div class="body customScroll">
            <ul class="minicart-product-list" id="list-shopping-cart">
            </ul>
        </div>
        <div class="foot">
            <div class="buttons mt-30px">
                <?= $this->Html->link('Ver Carrinho',
                    '/cart',
                    [
                        'class' =>  'btn btn-dark btn-hover-primary mb-30px'
                    ]
                ) ?>
                <a href="checkout.html" class="btn btn-outline-dark current-btn">checkout</a>
            </div>
        </div>
    </div>
</div>
<!-- OffCanvas Cart End -->
