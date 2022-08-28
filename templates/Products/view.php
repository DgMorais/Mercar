<div class="main-wrapper">       
    <!-- offcanvas overlay start -->
    <div class="offcanvas-overlay"></div>
    <!-- offcanvas overlay end -->

    <!-- OffCanvas Wishlist Start -->
    <?= $this->element('offcanvas/view_favoritos') ?>
    <!-- OffCanvas Wishlist End -->

    <!-- OffCanvas Cart Start -->
    <?= $this->element('offcanvas/shopping_cart') ?>
    <!-- OffCanvas Cart End -->
    
    <!-- OffCanvas Menu Start -->
    <div id="offcanvas-mobile-menu" class="offcanvas offcanvas-mobile-menu">
        <button class="offcanvas-close"></button>
        <div class="user-panel">
            <ul>
                <li><a href="tel:0123456789"><i class="fa fa-phone"></i> +012 3456 789</a></li>
                <li><a href="mailto:demo@example.com"><i class="fa fa-envelope-o"></i> demo@example.com</a></li>
                <li><a href="my-account.html"><i class="fa fa-user"></i> Account</a></li>
            </ul>
        </div>
        <div class="inner customScroll">
            <div class="offcanvas-menu mb-4">
                <ul>
                    <li><a href="#"><span class="menu-text">Home</span></a>
                        <ul class="sub-menu">
                            <li><a href="index.html"><span class="menu-text">Home 1</span></a></li>
                            <li><a href="index-2.html"><span class="menu-text">Home 2</span></a></li>
                        </ul>
                    </li>
                    <li><a href="about.html">About</a></li>
                    <li>
                        <a href="#"><span class="menu-text">Pages</span></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="#"><span class="menu-text">Inner Pages</span></a>
                                <ul class="sub-menu">
                                    <li><a href="404.html">404 Page</a></li>
                                    <li><a href="order-tracking.html">Order Tracking</a></li>
                                    <li><a href="faq.html">Faq Page</a></li>
                                    <li><a href="coming-soon.html">Coming Soon Page</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="menu-text"> Other Shop Pages</span></a>
                                <ul class="sub-menu">
                                    <li><a href="cart.html">Cart Page</a></li>
                                    <li><a href="checkout.html">Checkout Page</a></li>
                                    <li><a href="compare.html">Compare Page</a></li>
                                    <li><a href="wishlist.html">Wishlist Page</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="menu-text">Related Shop Page</span></a>
                                <ul class="sub-menu">
                                    <li><a href="my-account.html">Account Page</a></li>
                                    <li><a href="login.html">Login & Register Page</a></li>
                                    <li><a href="empty-cart.html">Empty Cart Page</a></li>
                                    <li><a href="thank-you-page.html">Thank You Page</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#"><span class="menu-text">Shop</span></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="#"><span class="menu-text">Shop Page</span></a>
                                <ul class="sub-menu">
                                    <li><a href="shop-3-column.html">Shop 3 Column</a></li>
                                    <li><a href="shop-4-column.html">Shop 4 Column</a></li>
                                    <li><a href="shop-left-sidebar.html">Shop Left Sidebar</a></li>
                                    <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                    <li><a href="shop-list-left-sidebar.html">Shop List Left Sidebar</a>
                                    </li>
                                    <li><a href="shop-list-right-sidebar.html">Shop List Right Sidebar</a>
                                    </li>
                                    <li><a href="cart.html">Cart Page</a></li>
                                    <li><a href="checkout.html">Checkout Page</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="menu-text">product Details Page</span></a>
                                <ul class="sub-menu">
                                    <li><a href="single-product.html">Product Single</a></li>
                                    <li><a href="single-product-variable.html">Product Variable</a></li>
                                    <li><a href="single-product-affiliate.html">Product Affiliate</a></li>
                                    <li><a href="single-product-group.html">Product Group</a></li>
                                    <li><a href="single-product-tabstyle-2.html">Product Tab 2</a></li>
                                    <li><a href="single-product-tabstyle-3.html">Product Tab 3</a></li>
                                    <li><a href="single-product-slider.html">Product Slider</a></li>
                                    <li><a href="single-product-gallery-left.html">Product Gallery Left</a>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="menu-text">Single Product Page</span></a>
                                <ul class="sub-menu">
                                    <li><a href="single-product-gallery-right.html">Product Gallery
                                            Right</a> </li>
                                    <li><a href="single-product-sticky-left.html">Product Sticky Left</a>
                                    </li>
                                    <li><a href="single-product-sticky-right.html">Product Sticky Right</a>
                                    </li>
                                    <li><a href="compare.html">Compare Page</a></li>
                                    <li><a href="wishlist.html">Wishlist Page</a></li>
                                    <li><a href="my-account.html">Account Page</a></li>
                                    <li><a href="login.html">Login & Register Page</a></li>
                                    <li><a href="empty-cart.html">Empty Cart Page</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#"><span class="menu-text">Blog</span></a>
                        <ul class="sub-menu">
                            <li><a href="blog-grid.html">Blog Grid Page</a></li>
                            <li><a href="blog-grid-left-sidebar.html">Grid Left Sidebar</a></li>
                            <li><a href="blog-grid-right-sidebar.html">Grid Right Sidebar</a></li>
                            <li><a href="blog-list.html">Blog List Page</a></li>
                            <li><a href="blog-list-left-sidebar.html">List Left Sidebar</a></li>
                            <li><a href="blog-list-right-sidebar.html">List Right Sidebar</a></li>
                            <li><a href="blog-single.html">Blog Single Page</a></li>
                            <li><a href="blog-single-left-sidebar.html">Single Left Sidebar</a></li>
                            <li><a href="blog-single-right-sidebar.html">Single Right Sidbar</a>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact Us</a></li>
                </ul>
            </div>
            <!-- OffCanvas Menu End -->
            <div class="offcanvas-social mt-auto">
                <ul>
                    <li>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-google"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-youtube"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- OffCanvas Menu End -->
    <!-- Product Details Area Start -->
    <div class="product-details-area pt-100px pb-100px">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12 col-xs-12 mb-lm-30px mb-md-30px mb-sm-30px">
                    <!-- Swiper -->
                    <div class="swiper-container zoom-top">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <?= $this->Html->image('product-image/zoom-image/1.webp',
                                    [
                                        'class' => 'img-responsive m-auto'
                                    ]
                                )?>
                                <?= $this->Html->link('<i class="fa fa-arrows-alt" aria-hidden="true"></i>',
                                    'img/product-image/zoom-image/1.webp',
                                    [
                                        'escape' => false,
                                        'class' => 'venobox full-preview',
                                        'data-gall' => 'myGallery'
                                    ]
                                )?>
                            </div>
                            <div class="swiper-slide">
                                <?= $this->Html->image('product-image/zoom-image/2.webp',
                                    [
                                        'class' => 'img-responsive m-auto'
                                    ]
                                )?>
                                <?= $this->Html->link('<i class="fa fa-arrows-alt" aria-hidden="true"></i>',
                                    'img/product-image/zoom-image/2.webp',
                                    [
                                        'escape' => false,
                                        'class' => 'venobox full-preview',
                                        'data-gall' => 'myGallery'
                                    ]
                                )?>
                            </div>
                            <div class="swiper-slide">
                                <?= $this->Html->image('product-image/zoom-image/3.webp',
                                    [
                                        'class' => 'img-responsive m-auto'
                                    ]
                                )?>
                                <?= $this->Html->link('<i class="fa fa-arrows-alt" aria-hidden="true"></i>',
                                    'img/product-image/zoom-image/3.webp',
                                    [
                                        'escape' => false,
                                        'class' => 'venobox full-preview',
                                        'data-gall' => 'myGallery'
                                    ]
                                )?>
                            </div>
                            <div class="swiper-slide">
                                <?= $this->Html->image('product-image/zoom-image/4.webp',
                                    [
                                        'class' => 'img-responsive m-auto'
                                    ]
                                )?>
                                <?= $this->Html->link('<i class="fa fa-arrows-alt" aria-hidden="true"></i>',
                                    'img/product-image/zoom-image/4.webp',
                                    [
                                        'escape' => false,
                                        'class' => 'venobox full-preview',
                                        'data-gall' => 'myGallery'
                                    ]
                                )?>
                            </div>
                            <div class="swiper-slide">
                                <?= $this->Html->image('product-image/zoom-image/5.webp',
                                    [
                                        'class' => 'img-responsive m-auto'
                                    ]
                                )?>
                                <?= $this->Html->link('<i class="fa fa-arrows-alt" aria-hidden="true"></i>',
                                    'img/product-image/zoom-image/5.webp',
                                    [
                                        'escape' => false,
                                        'class' => 'venobox full-preview',
                                        'data-gall' => 'myGallery'
                                    ]
                                )?>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-container mt-20px zoom-thumbs slider-nav-style-1 small-nav">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <?= $this->Html->image('product-image/small-image/1.webp',
                                    [
                                        'class' => 'img-responsive m-auto'
                                    ]
                                )?>
                            </div>
                            <div class="swiper-slide">
                                <?= $this->Html->image('product-image/small-image/2.webp',
                                    [
                                        'class' => 'img-responsive m-auto'
                                    ]
                                )?>
                            </div>
                            <div class="swiper-slide">
                                <?= $this->Html->image('product-image/small-image/3.webp',
                                    [
                                        'class' => 'img-responsive m-auto'
                                    ]
                                )?>
                            </div>
                            <div class="swiper-slide">
                                <?= $this->Html->image('product-image/small-image/4.webp',
                                    [
                                        'class' => 'img-responsive m-auto'
                                    ]
                                )?>
                            </div>
                            <div class="swiper-slide">
                                <?= $this->Html->image('product-image/small-image/5.webp',
                                    [
                                        'class' => 'img-responsive m-auto'
                                    ]
                                )?>
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
                    <div class="product-details-content quickview-content ml-25px">
                        <h2><?= $product->nome ?></h2>
                        <div class="pricing-meta">
                            <ul class="d-flex">
                                <li class="new-price">R$<?= $product->preco->preco_por ?></li>
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
                            <span class="read-review"><a class="reviews" href="#">(5 Customer Review)</a></span>
                        </div>
                        <p class="mt-30px"><?= $product->descricao ?></p>
                        <div class="pro-details-categories-info pro-details-same-style d-flex m-0">
                            <span>Categoria: </span>
                            <ul class="d-flex">
                                <li>
                                    <a href="#"><?= $product->category->nome ?></a>
                                </li>
                            </ul>
                        </div>
                        <div class="pro-details-categories-info pro-details-same-style d-flex m-0">
                            <span>Tags: </span>
                            <ul class="d-flex">
                                <li>
                                    <a href="#">informatica, </a>
                                </li>
                                <li>
                                    <a href="#">notebooks</a>
                                </li>
                            </ul>
                        </div>
                        <div class="pro-details-quality">
                            <div class="cart-plus-minus">
                                <input class="cart-plus-minus-box" type="number" name="qtybutton" value="1" />
                            </div>
                            <div class="pro-details-cart">
                                <button class="add-cart"> Adicionar ao Carrinho </button>
                            </div>
                            <div class="pro-details-compare-wishlist pro-details-wishlist ">
                                <a href="wishlist.html"><i class="pe-7s-like"></i></a>
                            </div>
                            <div class="pro-details-compare-wishlist pro-details-wishlist ">
                                <a href="compare.html"><i class="pe-7s-refresh-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- product details description area start -->
                    <div class="description-review-wrapper">
                        <div class="description-review-topbar nav">
                            <button data-bs-toggle="tab" data-bs-target="#des-details2">Informações</button>
                            <button class="active" data-bs-toggle="tab" data-bs-target="#des-details1">Descrição</button>
                            <button data-bs-toggle="tab" data-bs-target="#des-details3">Avaliações (02)</button>
                        </div>
                        <div class="tab-content description-review-bottom">
                            <div id="des-details2" class="tab-pane">
                                <div class="product-anotherinfo-wrapper text-start">
                                    <ul>
                                        <li><span>Peso</span> 400 g</li>
                                        <li><span>Dimensões</span>10 x 10 x 15 cm</li>
                                        <li><span>Material</span> 60% cotton, 40% polyester</li>
                                        <li><span>Outras informações</span> American heirloom jean shorts pug seitan letterpress</li>
                                    </ul>
                                </div>
                            </div>
                            <div id="des-details1" class="tab-pane active">
                                <div class="product-description-wrapper">
                                    <p>
                                        <?= $product->descricao ?>
                                    </p>
                                </div>
                            </div>
                            <div id="des-details3" class="tab-pane">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="review-wrapper">
                                            <div class="single-review">
                                                <div class="review-img">
                                                    <img src="assets/images/review-image/1.png" alt="" />
                                                </div>
                                                <div class="review-content">
                                                    <div class="review-top-wrap">
                                                        <div class="review-left">
                                                            <div class="review-name">
                                                                <h4>White Lewis</h4>
                                                            </div>
                                                            <div class="rating-product">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                        </div>
                                                        <div class="review-left">
                                                            <a href="#">Reply</a>
                                                        </div>
                                                    </div>
                                                    <div class="review-bottom">
                                                        <p>
                                                            Vestibulum ante ipsum primis aucibus orci luctustrices posuere
                                                            cubilia Curae Suspendisse viverra ed viverra. Mauris ullarper
                                                            euismod vehicula. Phasellus quam nisi, congue id nulla.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="single-review child-review">
                                                <div class="review-img">
                                                    <img src="assets/images/review-image/2.png" alt="" />
                                                </div>
                                                <div class="review-content">
                                                    <div class="review-top-wrap">
                                                        <div class="review-left">
                                                            <div class="review-name">
                                                                <h4>White Lewis</h4>
                                                            </div>
                                                            <div class="rating-product">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                        </div>
                                                        <div class="review-left">
                                                            <a href="#">Reply</a>
                                                        </div>
                                                    </div>
                                                    <div class="review-bottom">
                                                        <p>Vestibulum ante ipsum primis aucibus orci luctustrices posuere
                                                            cubilia Curae Sus pen disse viverra ed viverra. Mauris ullarper
                                                            euismod vehicula.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="ratting-form-wrapper pl-50">
                                            <h3>Avaliar</h3>
                                            <div class="ratting-form">
                                                <form action="#">
                                                    <div class="star-box">
                                                        <span>Your rating:</span>
                                                        <div class="rating-product">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="rating-form-style">
                                                                <input placeholder="Name" type="text" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="rating-form-style">
                                                                <input placeholder="Email" type="email" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="rating-form-style form-submit">
                                                                <textarea name="Your Review" placeholder="Message"></textarea>
                                                                <button class="btn btn-primary btn-hover-color-primary " type="submit" value="Submit">Submit</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- product details description area end -->
                </div>
            </div>
        </div>
    </div>
    <!-- Product Area Start -->
    <div class="product-area related-product">
        <div class="container">
            <!-- Section Title & Tab Start -->
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center m-0">
                        <h2 class="title">Produtos Relacionados</h2>
                        <p>Produtos que voê talvez você possa se interessar</p>
                    </div>
                </div>
            </div>
            <!-- Section Title & Tab End -->
            <div class="row">
                <div class="col">
                    <div class="new-product-slider swiper-container slider-nav-style-1">
                        <div class="swiper-wrapper">
                            <?php foreach ($products as $product): ?>
                                <div class="swiper-slide">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <span class="badges">
                                        <span class="new">New</span>
                                        </span>
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <?= $this->Html->image('product-image/1.webp',
                                                    [
                                                        'class' => 'img-responsive m-auto'
                                                    ]
                                                )?>
                                                <?= $this->Html->image('product-image/1.webp',
                                                    [
                                                        'class' => 'hover-image',
                                                        'alt' => 'Product'
                                                    ]
                                                )?>
                                            </a>
                                        </div>
                                        <div class="content">
                                            <span class="category"><a href="#"><?= $product->category->nome ?></a></span>
                                            <h5 class="title"><a href="single-product.html"><?= $product->nome ?></a>
                                            </h5>
                                            <span class="price">
                                            <span class="new">R$<?= $product->preco->preco_por ?></span>
                                            </span>
                                        </div>
                                        <div class="actions">
                                            <button title="Adicionar ao Carrinho" class="action add-to-cart" data-bs-toggle="modal" data-bs-target=<?= "#modalCart" . $product->id ?>><i
                                                class="pe-7s-shopbag"></i></button>
                                            <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                    class="pe-7s-like"></i></button>
                                            <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target=<?= "#modalView" . $product->id ?>><i class="pe-7s-look"></i></button>
                                            <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                    class="pe-7s-refresh-2"></i></button>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <!-- Add Arrows -->
                        <div class="swiper-buttons">
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product Area End -->
</div>
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
