<!-- OffCanvas Wishlist Start -->
<div id="offcanvas-wishlist" class="offcanvas offcanvas-wishlist">
    <div class="inner">
        <div class="head">
            <span class="title">Favoritos</span>
            <button class="offcanvas-close">×</button>
        </div>
        <div class="body customScroll">
            <ul class="minicart-product-list">
                <li>
                    <?= $this->Html->image('product-image/1.webp',
                        [
                            'alt' => 'Cart product Image',
                            'url' => '#'
                        ]
                    ) ?>
                    <div class="content">
                        <a href="single-product.html" class="title">Modern Smart Phone</a>
                        <span class="quantity-price">1 x <span class="amount">$21.86</span></span>
                        <a href="#" class="remove">×</a>
                    </div>
                </li>
                <li>
                    <?= $this->Html->image('product-image/2.webp',
                        [
                            'alt' => 'Cart product Image',
                            'url' => '#'
                        ]
                    ) ?>
                    <div class="content">
                        <a href="single-product.html" class="title">Bluetooth Headphone</a>
                        <span class="quantity-price">1 x <span class="amount">$13.28</span></span>
                        <a href="#" class="remove">×</a>
                    </div>
                </li>
                <li>
                    <?= $this->Html->image('product-image/3.webp',
                        [
                            'alt' => 'Cart product Image',
                            'url' => '#'
                        ]
                    ) ?>
                    <div class="content">
                        <a href="single-product.html" class="title">Smart Music Box</a>
                        <span class="quantity-price">1 x <span class="amount">$17.34</span></span>
                        <a href="#" class="remove">×</a>
                    </div>
                </li>
            </ul>
        </div>
        <div class="foot">
            <div class="buttons">
                <a href="wishlist.html" class="btn btn-dark btn-hover-primary mt-30px">view wishlist</a>
            </div>
        </div>
    </div>
</div>
<!-- OffCanvas Wishlist End -->
