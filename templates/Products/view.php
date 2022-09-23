<div class="main-wrapper">
    <!-- offcanvas overlay start -->
    <div class="offcanvas-overlay"></div>
    <!-- offcanvas overlay end -->

    <!-- OffCanvas Wishlist Start -->
    <?=$this->element('offcanvas/view_favoritos')?>
    <!-- OffCanvas Wishlist End -->

    <!-- OffCanvas Cart Start -->
    <?=$this->element('offcanvas/shopping_cart')?>
    <!-- OffCanvas Cart End -->
    
    <!-- Product Details Area Start -->
    <div class="product-details-area pt-100px pb-100px">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12 col-xs-12 mb-lm-30px mb-md-30px mb-sm-30px">
                    <!-- Slider main container -->
                    <div class="swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <?php if (!empty($product->images)) : ?>
                                <?php foreach (json_decode($product->images) as $image) : ?>
                                    <div class="swiper-slide d-flex">
                                        <?= $this->Html->image($image,
                                            [
                                                'pathPrefix' => "/mercar/img/uploads/products/{$product->store->id}/",
                                                'class' => 'img-responsive m-auto w-100',
                                                'style' => 'margin-top: auto; height: 600px; max-height: 600px;'
                                            ]
                                        )?>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>

                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>

                        <!-- If we need scrollbar -->
                        <div class="swiper-scrollbar"></div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-delay="200">
                    <div class="product-details-content quickview-content ml-25px">
                        <h2><?=$product->nome?></h2>
                        <div class="pricing-meta">
                            <ul class="d-flex">
                                <li class="new-price">R$<?=$product->preco->preco_por?></li>
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
                        <p class="mt-30px"><?=$product->descricao?></p>
                        <div class="pro-details-categories-info pro-details-same-style d-flex m-0">
                            <span>Categoria: </span>
                            <ul class="d-flex">
                                <li>
                                    <a href="#"><?=$product->category->nome?></a>
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
                                        <?=$product->descricao?>
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
                                                <?=$this->Html->image('product-image/1.webp',
                                                    [
                                                        'class' => 'img-responsive m-auto',
                                                    ]
                                                )?>
                                                <?=$this->Html->image('product-image/1.webp',
                                                    [
                                                        'class' => 'hover-image',
                                                        'alt' => 'Product',
                                                    ]
                                                )?>
                                            </a>
                                        </div>
                                        <div class="content">
                                            <span class="category"><a href="#"><?=$product->category->nome?></a></span>
                                            <h5 class="title"><a href="single-product.html"><?=$product->nome?></a>
                                            </h5>
                                            <span class="price">
                                            <span class="new">R$<?=$product->preco->preco_por?></span>
                                            </span>
                                        </div>
                                        <div class="actions">
                                            <button title="Adicionar ao Carrinho" class="action add-to-cart" data-bs-toggle="modal" data-bs-target=<?="#modalCart" . $product->id?>><i
                                                class="pe-7s-shopbag"></i></button>
                                            <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                    class="pe-7s-like"></i></button>
                                            <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target=<?="#modalView" . $product->id?>><i class="pe-7s-look"></i></button>
                                            <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                    class="pe-7s-refresh-2"></i></button>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach;?>
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
<?=$this->element('modal/view_product',
    [
        'products' => $products,
    ]
)?>
<?=$this->element('modal/cart',
    [
        'products' => $products,
    ]
)?>
<?=$this->element('modal/wishlist',
    [
        'products' => $products,
    ]
)?>
<?=$this->element('modal/compare',
    [
        'products' => $products,
    ]
)?>
<?=$this->Html->script('swiper-bundle.min')?>
<script>
    const swiper = new Swiper('.swiper', {
        // Optional parameters
        slidesPerView: 1,
        loop: true,
        direction: 'horizontal',
        loop: true,
        loopFillGroupWithBlank: true,

        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
            clickable: true
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        // And if we need scrollbar
        scrollbar: {
            el: '.swiper-scrollbar',
        },
    });
</script>
