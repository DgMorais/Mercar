<div class="main-wrapper">    
    <!-- Hero/Intro Slider Start -->
    <div class="section ">
        <div class="hero-slider swiper-container slider-nav-style-1 slider-dot-style-1">
            <!-- Hero slider Active -->
            <div class="swiper-wrapper">
                <!-- Single slider item -->
                <div class="hero-slide-item slider-height-2 swiper-slide bg-color1" data-bg-image="<?= env("APP_URL") ?>/img/hero/bg/hero-bg-2-1.webp">
                    <div class="container h-100">
                        <div class="row h-100 flex-row-reverse">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 align-self-center sm-center-view">
                                <div class="hero-slide-content hero-slide-content-2 slider-animated-1">
                                    <h2 class="title-1">Sua vida mais fácil <br>
                                    com Smartphones </h2>
                                    <span class="price">
                                        <span class="mini-title">A partir de</span>
                                        <span class="amount">R$1200.00</span>
                                    </span>
                                    <?= $this->Html->link('Todos os dispositivos',
                                        '#',
                                        [
                                            'class' => 'btn btn-primary text-capitalize'
                                        ]
                                    ) ?>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 d-flex justify-content-center position-relative align-items-center">
                                <div class="show-case">
                                    <div class="hero-slide-image slider-2">
                                        <?= $this->Html->image('hero/inner-img/hero-2-1.png',
                                            [
                                                'alt' => ''
                                            ]
                                        ) ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single slider item -->
                <div class="hero-slide-item slider-height-2 swiper-slide bg-color1" data-bg-image="<?= env("APP_URL") ?>/img/hero/bg/hero-bg-2-1.webp">
                    <div class="container h-100">
                        <div class="row h-100 flex-row-reverse">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 align-self-center sm-center-view">
                                <div class="hero-slide-content hero-slide-content-2 slider-animated-1">
                                <h2 class="title-1">Sua vida mais fácil <br>
                                    com Smartphones </h2>
                                    <span class="price">
                                        <span class="mini-title">A partir de</span>
                                        <span class="amount">R$1200.00</span>
                                    </span>
                                    <?= $this->Html->link('Todos os dispositivos',
                                        '#',
                                        [
                                            'class' => 'btn btn-primary text-capitalize'
                                        ]
                                    ) ?>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 d-flex justify-content-center position-relative align-items-center">
                                <div class="show-case">
                                    <div class="hero-slide-image slider-2">
                                        <?= $this->Html->image('hero/inner-img/hero-2-1.png',
                                            [
                                                'alt' => ''
                                            ]
                                        ) ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination swiper-pagination-white"></div>
            <!-- Add Arrows -->
            <div class="swiper-buttons">
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
    <!-- Hero/Intro Slider End -->
    <!-- Banner Area Start -->
    <div class="banner-area style-two pt-100px pb-100px">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="single-banner nth-child-2 mb-lm-30px">
                        <?= $this->Html->image('banner/6.webp',
                            [
                                'alt' => ''
                            ]
                        ) ?>
                        <div class="banner-content nth-child-3">
                            <h3 class="title">Headset</h3>
                            <span class="category">Por $699.00</span>
                            <a href="shop-left-sidebar.html" class="shop-link">Shop Now <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="single-banner nth-child-2">
                        <?= $this->Html->image('banner/7.webp',
                            [
                                'alt' => ''
                            ]
                        ) ?>
                        <div class="banner-content nth-child-2">
                            <h3 class="title">Smartphone</h3>
                            <span class="category">Por R$1950.00</span>
                            <a href="shop-left-sidebar.html" class="shop-link">Shop Now <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Area End -->
    <!-- Product Area Start -->
    <div class="product-area pb-100px">
        <div class="container">
            <!-- Section Title & Tab Start -->
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h2 class="title">Novos Produtos</h2>
                        <p>Uma imensa variação de produtos</p>
                    </div>
                </div>
            </div>
            <!-- Section Title & Tab End -->
            <div class="row">
                <div class="col-12">
                    <div class="row mb-n-30px">
                        <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                            <!-- Single Prodect -->
                            <div class="product">
                                <span class="badges">
                                    <span class="new">Novo</span>
                                </span>
                                <div class="thumb">
                                    <?= $this->Html->image('product-image/1.webp',
                                        [
                                            'alt' => 'Product',
                                            'url' => '#'
                                        ]
                                    ) ?>
                                </div>
                                <div class="content">
                                    <span class="category"><a href="#">Acessórios</a></span>
                                    <h5 class="title"><a href="single-product.html">Smartphone
                                        </a>
                                    </h5>
                                    <span class="price">
                                        <span class="new">R$1000.50</span>
                                    </span>
                                </div>
                                <div class="actions">
                                    <button title="Adicionar ao Carrinho" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                        class="pe-7s-shopbag"></i></button>
                                    <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                            class="pe-7s-like"></i></button>
                                    <button class="action quickview" data-link-action="quickview" title="Visualizar" data-bs-toggle="modal" data-bs-target=<?= "#modalView" . $product->id ?>><i class="pe-7s-look"></i></button>
                                    <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                            class="pe-7s-refresh-2"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                            <!-- Single Prodect -->
                            <div class="product">
                                <span class="badges">
                                    <span class="sale">-10%</span>
                                <span class="new">Novo</span>
                                </span>
                                <div class="thumb">
                                    <?= $this->Html->image('product-image/2.webp',
                                        [
                                            'alt' => 'Product',
                                            'url' => '#'
                                        ]
                                    ) ?>
                                </div>
                                <div class="content">
                                    <span class="category"><a href="#">Acessórios</a></span>
                                    <h5 class="title"><a href="single-product.html">Headset Bluetooth
                                        </a>
                                    </h5>
                                    <span class="price">
                                        <span class="old">R$480.50</span>
                                    <span class="new">R$380.50</span>
                                    </span>
                                </div>
                                <div class="actions">
                                            <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                class="pe-7s-shopbag"></i></button>
                                            <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                    class="pe-7s-like"></i></button>
                                            <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                            <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                    class="pe-7s-refresh-2"></i></button>
                                        </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                            <!-- Single Prodect -->
                            <div class="product">
                                <span class="badges">
                                    <span class="new">Promoção</span>
                                </span>
                                <div class="thumb">
                                    <?= $this->Html->image('product-image/3.webp',
                                        [
                                            'alt' => 'Product',
                                            'url' => '#'
                                        ]
                                    ) ?>
                                </div>
                                <div class="content">
                                    <span class="category"><a href="#">Acessórios</a></span>
                                    <h5 class="title"><a href="single-product.html">Smart Speakers
                                        </a>
                                    </h5>
                                    <span class="price">
                                        <span class="new">R$399.50</span>
                                    </span>
                                </div>
                                <div class="actions">
                                            <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                class="pe-7s-shopbag"></i></button>
                                            <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                    class="pe-7s-like"></i></button>
                                            <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                            <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                    class="pe-7s-refresh-2"></i></button>
                                        </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                            <!-- Single Prodect -->
                            <div class="product">
                                <span class="badges">
                                    <span class="new">Novo</span>
                                </span>
                                <div class="thumb">
                                    <?= $this->Html->image('product-image/4.webp',
                                        [
                                            'alt' => 'Product',
                                            'url' => '#'
                                        ]
                                    ) ?>
                                </div>
                                <div class="content">
                                    <span class="category"><a href="#">Acessórios</a></span>
                                    <h5 class="title"><a href="single-product.html">Air Pods 25Hjkl Black
                                        </a>
                                    </h5>
                                    <span class="price">
                                        <span class="new">R$3080.50</span>
                                    </span>
                                </div>
                                <div class="actions">
                                            <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                class="pe-7s-shopbag"></i></button>
                                            <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                    class="pe-7s-like"></i></button>
                                            <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                            <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                    class="pe-7s-refresh-2"></i></button>
                                        </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                            <!-- Single Prodect -->
                            <div class="product">
                                <span class="badges">
                                </span>
                                <div class="thumb">
                                    <?= $this->Html->image('product-image/5.webp',
                                        [
                                            'alt' => 'Product',
                                            'url' => '#'
                                        ]
                                    ) ?>
                                </div>
                                <div class="content">
                                    <span class="category"><a href="#">Acessórios</a></span>
                                    <h5 class="title"><a href="single-product.html">Smart Watch
                                        </a>
                                    </h5>
                                    <span class="price">
                                        <span class="new">R$599.50</span>
                                    </span>
                                </div>
                                <div class="actions">
                                            <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                class="pe-7s-shopbag"></i></button>
                                            <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                    class="pe-7s-like"></i></button>
                                            <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                            <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                    class="pe-7s-refresh-2"></i></button>
                                        </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                            <!-- Single Prodect -->
                            <div class="product">
                                <span class="badges">
                                    <span class="sale">-8%</span>
                                <span class="new">Promoção</span>
                                </span>
                                <div class="thumb">
                                    <?= $this->Html->image('product-image/6.webp',
                                        [
                                            'alt' => 'Product',
                                            'url' => '#'
                                        ]
                                    ) ?>
                                </div>
                                <div class="content">
                                    <span class="category"><a href="#">Acessórios</a></span>
                                    <h5 class="title"><a href="single-product.html">Tablets
                                        </a>
                                    </h5>
                                    <span class="price">
                                        <span class="old">R$1380.50</span>
                                    <span class="new">R$1120.50</span>
                                    </span>
                                </div>
                                <div class="actions">
                                            <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                class="pe-7s-shopbag"></i></button>
                                            <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                    class="pe-7s-like"></i></button>
                                            <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                            <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                    class="pe-7s-refresh-2"></i></button>
                                        </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                            <!-- Single Prodect -->
                            <div class="product">
                                <span class="badges">
                                    <span class="new">Promoção</span>
                                </span>
                                <div class="thumb">
                                    <?= $this->Html->image('product-image/7.webp',
                                        [
                                            'alt' => 'Product',
                                            'url' => '#'
                                        ]
                                    ) ?>
                                </div>
                                <div class="content">
                                    <span class="category"><a href="#">Acessórios</a></span>
                                    <h5 class="title"><a href="single-product.html">Roteadores
                                        </a>
                                    </h5>
                                    <span class="price">
                                        <span class="new">R$388.50</span>
                                    </span>
                                </div>
                                <div class="actions">
                                            <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                class="pe-7s-shopbag"></i></button>
                                            <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                    class="pe-7s-like"></i></button>
                                            <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                            <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                    class="pe-7s-refresh-2"></i></button>
                                        </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                            <!-- Single Prodect -->
                            <div class="product">
                                <span class="badges">
                                    <span class="sale">-5%</span>
                                </span>
                                <div class="thumb">
                                    <?= $this->Html->image('product-image/8.webp',
                                        [
                                            'alt' => 'Product',
                                            'url' => '#'
                                        ]
                                    ) ?>
                                </div>
                                <div class="content">
                                    <span class="category"><a href="#">Acessórios</a></span>
                                    <h5 class="title"><a href="single-product.html">Power Bank 10000Mhp
                                        </a>
                                    </h5>
                                    <span class="price">
                                        <span class="old">R$260.00</span>
                                    <span class="new">R$238.50</span>
                                    </span>
                                </div>
                                <div class="actions">
                                            <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                class="pe-7s-shopbag"></i></button>
                                            <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                    class="pe-7s-like"></i></button>
                                            <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                            <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                    class="pe-7s-refresh-2"></i></button>
                                        </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product Area End -->
    <!-- Banner Area Start -->
    <div class="banner-area style-three pb-100px">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="single-banner mb-lm-30px">
                        <?= $this->Html->image('banner/8.webp',
                            [
                                'alt' => '',
                                'url' => '#'
                            ]
                        ) ?>
                        <div class="banner-content nth-child-3">
                            <h3 class="title">Smart Watches</h3>
                            <span class="category">Por $699.00</span>
                            <a href="shop-left-sidebar.html" class="shop-link">Compre Agora <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="single-banner">
                        <?= $this->Html->image('banner/9.webp',
                            [
                                'alt' => '',
                                'url' => '#'
                            ]
                        ) ?>
                        <div class="banner-content nth-child-2">
                            <h3 class="title">Smart Watch</h3>
                            <span class="category">Por $995.00</span>
                            <a href="shop-left-sidebar.html" class="shop-link">Compre Agora <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Area End -->
    <!-- Feature product area start -->
    <div class="feature-product-area pb-100px">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h2 class="title">Ofertas em destaque</h2>
                        <p>As melhores ofertas para seu bolso</p>
                    </div>
                </div>
            </div>
            <div class="feature-product-slider swiper-container slider-nav-style-1">
                <div class="swiper-wrapper">
                    <div class="swiper-slide feature-right-content">
                        <div class="image-side">
                            <?= $this->Html->image('feature-image/2.webp',
                                [
                                    'alt' => '',
                                    'url' => '#'
                                ]
                            ) ?>
                            <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                class="pe-7s-shopbag"></i></button>
                        </div>
                        <div class="content-side">
                            <div class="deal-timing">
                                <span>End In:</span>
                                <div data-countdown="2021/09/15"></div>
                            </div>
                            <div class="prize-content">
                                <h5 class="title"><a href="single-product.html">Smart Watch</a></h5>
                                <span class="price">
                            <span class="old">R$48.50</span>
                                <span class="new">R$38.50</span>
                                </span>
                            </div>
                            <div class="product-feature">
                                <ul>
                                    <li>Predecessor : <span>None.</span></li>
                                    <li>Support Type : <span>Neutral.</span></li>
                                    <li>Cushioning : <span>High Energizing.</span></li>
                                    <li>Total Weight : <span> 300gm</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide feature-right-content">
                        <div class="image-side">
                            <?= $this->Html->image('feature-image/3.webp',
                                [
                                    'alt' => '',
                                    'url' => '#'
                                ]
                            ) ?>
                            <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                class="pe-7s-shopbag"></i></button>
                        </div>
                        <div class="content-side">
                            <div class="deal-timing">
                                <span>End In:</span>
                                <div data-countdown="2021/09/15"></div>
                            </div>
                            <div class="prize-content">
                                <h5 class="title"><a href="single-product.html">Smart Watch para mulheres</a></h5>
                                <span class="price">
                            <span class="old">R$448.50</span>
                                <span class="new">R$438.50</span>
                                </span>
                            </div>
                            <div class="product-feature">
                                <ul>
                                    <li>Predecessor : <span>None.</span></li>
                                    <li>Support Type : <span>Neutral.</span></li>
                                    <li>Cushioning : <span>High Energizing.</span></li>
                                    <li>Total Weight : <span> 300gm</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide feature-right-content">
                        <div class="image-side">
                            <?= $this->Html->image('feature-image/2.webp',
                                [
                                    'alt' => '',
                                    'url' => '#'
                                ]
                            ) ?>
                            <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                class="pe-7s-shopbag"></i></button>
                        </div>
                        <div class="content-side">
                            <div class="deal-timing">
                                <span>End In:</span>
                                <div data-countdown="2021/09/15"></div>
                            </div>
                            <div class="prize-content">
                                <h5 class="title"><a href="single-product.html">Smart Watch</a></h5>
                                <span class="price">
                            <span class="old">$48.50</span>
                                <span class="new">$38.50</span>
                                </span>
                            </div>
                            <div class="product-feature">
                                <ul>
                                    <li>Predecessor : <span>None.</span></li>
                                    <li>Support Type : <span>Neutral.</span></li>
                                    <li>Cushioning : <span>High Energizing.</span></li>
                                    <li>Total Weight : <span> 300gm</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide feature-right-content">
                        <div class="image-side">
                            <?= $this->Html->image('feature-image/3.webp',
                                [
                                    'alt' => '',
                                    'url' => '#'
                                ]
                            ) ?>
                            <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                class="pe-7s-shopbag"></i></button>
                        </div>
                        <div class="content-side">
                            <div class="deal-timing">
                                <span>End In:</span>
                                <div data-countdown="2021/09/15"></div>
                            </div>
                            <div class="prize-content">
                                <h5 class="title"><a href="single-product.html">Smart Watch Para Homens</a></h5>
                                <span class="price">
                            <span class="old">$48.50</span>
                                <span class="new">$38.50</span>
                                </span>
                            </div>
                            <div class="product-feature">
                                <ul>
                                    <li>Predecessor : <span>None.</span></li>
                                    <li>Support Type : <span>Neutral.</span></li>
                                    <li>Cushioning : <span>High Energizing.</span></li>
                                    <li>Total Weight : <span> 300gm</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Add Arrows -->
                <div class="swiper-buttons">
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature product area End -->
    <!-- Fashion Area Start -->
    <div class="fashion-area" data-bg-image="<?= env("APP_URL") ?>/img/fashion/fashion-bg.webp">
        <div class="container h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-12 text-center">
                    <h2 class="title"> <span>Smart Fashion</span> With Smart Devices </h2>
                    <?= $this->Html->link('Todos os dispositivos',
                        '#',
                        [
                            'class' => 'btn btn-primary text-capitalize m-auto'
                        ]
                    ) ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Fashion Area End -->
    <!-- Feature Area Srart -->
    <div class="feature-area pt-100px pb-100px">
        <div class="container">
            <div class="feature-wrapper">
                <div class="single-feture-col mb-md-30px mb-lm-30px">
                    <!-- single item -->
                    <div class="single-feature">
                        <div class="feature-icon">
                            <?= $this->Html->image('icons/1.png',
                                [
                                    'alt' => ''
                                ]
                            ) ?>
                        </div>
                        <div class="feature-content">
                            <h4 class="title">Free Shipping</h4>
                            <span class="sub-title">Capped at $39 per order</span>
                        </div>
                    </div>
                </div>
                <!-- single item -->
                <div class="single-feture-col mb-md-30px mb-lm-30px">
                    <div class="single-feature">
                        <div class="feature-icon">
                            <?= $this->Html->image('icons/2.png',
                                [
                                    'alt' => ''
                                ]
                            ) ?>
                        </div>
                        <div class="feature-content">
                            <h4 class="title">Card Payments</h4>
                            <span class="sub-title">12 Months Installments</span>
                        </div>
                    </div>
                </div>
                <!-- single item -->
                <div class="single-feture-col">
                    <div class="single-feature">
                        <div class="feature-icon">
                            <?= $this->Html->image('icons/3.png',
                                [
                                    'alt' => ''
                                ]
                            ) ?>
                        </div>
                        <div class="feature-content">
                            <h4 class="title">Easy Returns</h4>
                            <span class="sub-title">Shop With Confidence</span>
                        </div>
                    </div>
                    <!-- single item -->
                </div>
            </div>
        </div>
    </div>
    <!-- Feature Area End -->
    <!-- Blog area start from here -->
    <div class="main-blog-area pb-100px">
        <div class="container">
            <!-- section title start -->
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center mb-30px0px">
                        <h2 class="title">Blog</h2>
                        <p>Nossos artigos</p>
                    </div>
                </div>
            </div>
            <!-- section title start -->
            <div class="row">
                <div class="col-lg-6 col-sm-6 mb-xs-30px">
                    <div class="single-blog">
                        <div class="blog-image">
                            <a href="blog-single-left-sidebar.html">
                                <?= $this->Html->image('blog-image/1.webp',
                                    [
                                        'class' => 'img-responsive w-100',
                                        'alt' => ''
                                    ]
                                ) ?>
                            </a>
                        </div>
                        <div class="blog-text">
                            <div class="blog-athor-date line-height-1">
                                <span class="blog-date"><i class="fa fa-calendar" aria-hidden="true"></i> 27,Jun 2030</span>
                                <span><a class="blog-author" href="blog-grid.html"><i class="fa fa-user" aria-hidden="true"></i> Wild Nick</a></span>
                            </div>
                            <h5 class="blog-heading"><a class="blog-heading-link" href="blog-single-left-sidebar.html">10 dicas rápidas sobre produtos inteligentes</a></h5>
                            <p>Lorem ipsum dolor sit amet consl adipisi elit, sed do eiusmod templ incididunt ut labore</p>
                            <a href="blog-single-left-sidebar.html" class="btn btn-primary blog-btn"> Read More</a>
                        </div>
                    </div>
                </div>
                <!-- End single blog -->
                <div class="col-lg-6 col-sm-6">
                    <div class="single-blog">
                        <div class="blog-image">
                            <a href="blog-single-left-sidebar.html">
                                <?= $this->Html->image('blog-image/2.webp',
                                    [
                                        'class' => 'img-responsive w-100',
                                        'alt' => ''
                                    ]
                                ) ?>
                            </a>
                        </div>
                        <div class="blog-text">
                            <div class="blog-athor-date line-height-1">
                                <span class="blog-date"><i class="fa fa-calendar" aria-hidden="true"></i> 27,Jun 2030</span>
                                <span><a class="blog-author" href="blog-grid.html"><i class="fa fa-user" aria-hidden="true"></i> Oaklee Odom</a></span>
                            </div>
                            <h5 class="blog-heading"><a class="blog-heading-link" href="blog-single-left-sidebar.html">5 lições da vida real sobre produtos inteligentes</a></h5>
                            <p>Lorem ipsum dolor sit amet consl adipisi elit, sed do eiusmod templ incididunt ut labore</p>
                            <a href="blog-single-left-sidebar.html" class="btn btn-primary blog-btn"> Read More</a>
                        </div>
                    </div>
                </div>
                <!-- End single blog -->
            </div>
        </div>
    </div>
    <!-- Blog area end here -->
</div>
<div class="modal fade" id="modal-information" tabindex="-1" role="dialog" aria-labelledby="exampleModalInformation" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Projeto Final TADS - Faculdades Integradas Simonsen</h5>
                <button type="button" class="close close-modal" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="d-flex justify-content-center">
                    <img src="https://www.simonsen.br/2.0/imagens/logos/simonsen.png" alt="faculdades-integradas-simonsen" style="width: 180px;">
                </div>
                <div class="text-center">
                    <p>Projeto final para o curso Análise e Desenvolvimento de Sistemas da faculdade Simonsen.</p>
                    <strong>Atenção!</strong>
                    <p>Todos os produtos,   imagens e valores presente no site são fictícios.</p>
                    <p>O site serve somente para ser usado como teste durante as fases do projeto pelos alunos, professores e convidados.</p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger p-3 close-modal" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#modal-information').modal('show');
    })
</script>

<?php if (isset($products)) : ?>
    <?= $this->element('modal/view_product',
        [
            'products' => $products
        ]
    ) ?>
    <?= $this->element('modal/cart',
        [
            'products' => $products
            ]
            ) ?>
    <?= $this->element('modal/cart',
        [
            'products' => $products
            ]
            ) ?>
    <?= $this->element('modal/wishlist',
        [
            'products' => $products
            ]
            ) ?>
    <?= $this->element('modal/compare',
        [
            'products' => $products
        ]
    ) ?>
<?php endif; ?>