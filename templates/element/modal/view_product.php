<?php foreach ($products as $product): ?>
    <!-- Modal -->
    <div class="modal modal-2 fade" id=<?= "modalView" . $product->id ?> tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> <i class="pe-7s-close"></i></button>
                    <div class="row">
                        <div class="col-lg-6 col-sm-12 col-xs-12 mb-lm-30px mb-md-30px mb-sm-30px">
                            <!-- Swiper -->
                            <div class="swiper-container gallery-top">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <?= $this->Html->image('product-image/zoom-image/1.webp',
                                            [
                                                'class' => 'img-responsive m-auto'
                                            ]
                                        ) ?>
                                    </div>
                                    <div class="swiper-slide">
                                        <?= $this->Html->image('product-image/zoom-image/2.webp',
                                            [
                                                'class' => 'img-responsive m-auto'
                                            ]
                                        ) ?>
                                    </div>
                                    <div class="swiper-slide">
                                        <?= $this->Html->image('product-image/zoom-image/3.webp',
                                            [
                                                'class' => 'img-responsive m-auto'
                                            ]
                                        ) ?>
                                    </div>
                                    <div class="swiper-slide">
                                        <?= $this->Html->image('product-image/zoom-image/4.webp',
                                            [
                                                'class' => 'img-responsive m-auto'
                                            ]
                                        ) ?>
                                    </div>
                                    <div class="swiper-slide">
                                        <?= $this->Html->image('product-image/zoom-image/5.webp',
                                            [
                                                'class' => 'img-responsive m-auto'
                                            ]
                                        ) ?>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-container gallery-thumbs mt-20px slider-nav-style-1 small-nav">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <?= $this->Html->image('product-image/small-image/1.webp',
                                            [
                                                'class' => 'img-responsive m-auto'
                                            ]
                                        ) ?>
                                    </div>
                                    <div class="swiper-slide">
                                        <?= $this->Html->image('product-image/small-image/2.webp',
                                            [
                                                'class' => 'img-responsive m-auto'
                                            ]
                                        ) ?>
                                    </div>
                                    <div class="swiper-slide">
                                        <?= $this->Html->image('product-image/small-image/3.webp',
                                            [
                                                'class' => 'img-responsive m-auto'
                                            ]
                                        ) ?>
                                    </div>
                                    <div class="swiper-slide">
                                        <?= $this->Html->image('product-image/small-image/4.webp',
                                            [
                                                'class' => 'img-responsive m-auto'
                                            ]
                                        ) ?>
                                    </div>
                                    <div class="swiper-slide">
                                        <?= $this->Html->image('product-image/small-image/5.webp',
                                            [
                                                'class' => 'img-responsive m-auto'
                                            ]
                                        ) ?>
                                    </div>
                                </div>
                                <!-- Add Arrows -->
                                <div class="swiper-buttons">
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-delay="200">
                            <div class="product-details-content quickview-content">
                                <h2><?= $product->nome ?></h2>
                                <div class="pricing-meta">
                                    <ul class="d-flex">
                                        <li class="new-price"><?= $product->preco->preco_por ?></li>
                                    </ul>
                                </div>
                                <div class="pro-details-rating-wrap">
                                    <div class="rating-product">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <span class="read-review"><a class="reviews" href="#">( 2 Review )</a></span>
                                </div>
                                <p class="mt-30px">Lorem ipsum dolor sit amet, consecte adipisicing elit, sed do eiusmll tempor incididunt ut labore et dolore magna aliqua. Ut enim ad mill veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exet commodo consequat. Duis aute irure dolor</p>
                                <div class="pro-details-categories-info pro-details-same-style d-flex m-0">
                                    <span>Categoria: </span>
                                    <ul class="d-flex">
                                        <li>
                                            <a href="#"><?= $product->category->nome ?> </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="pro-details-categories-info pro-details-same-style d-flex m-0">
                                    <span>Tags: </span>
                                    <ul class="d-flex">
                                        <li>
                                            <a href="#">tech, </a>
                                        </li>
                                        <li>
                                            <a href="#">informática</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="pro-details-quality">
                                    <div class="cart-plus-minus">
                                        <input class="cart-plus-minus-box" type="number" name="qtybutton" value="1" />
                                    </div>
                                    <div class="pro-details-cart">
                                        <button class="add-cart" id="add-cart"> Adicionar ao Carrinho </button>
                                    </div>
                                    <div class="pro-details-compare-wishlist pro-details-wishlist">
                                        <?= $this->Html->link('<i class="pe-7s-like"></i>',
                                            '#',
                                            [
                                                'escape' => false
                                            ]
                                        )?>
                                    </div>
                                </div>
                                <div class="payment-img">
                                    <?= $this->Html->image('icons/payment.png',
                                        [
                                            'alt' => '',
                                            'url' => '#'
                                        ]
                                    ) ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal end -->
<?php endforeach; ?>
