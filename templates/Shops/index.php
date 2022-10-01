<?php 
    use Cake\Chronos\Chronos;
    $now = Chronos::now();
?>
<div class="main-wrapper">
    <!-- Shop Page Start  -->
    <div class="shop-category-area pt-100px pb-100px">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 order-lg-last col-md-12 order-md-first">
                    <!-- Shop Top Area Start -->
                    <div class="shop-top-bar d-flex">
                        <p class="compare-product p-0 m-0">
                            <span><?= $this->Paginator->counter(__('{{current}}')) ?></span>Produtos exibidos de  <span><?= $this->Paginator->counter(__('{{count}}')) ?></span>
                        </p>
                        <!-- Left Side End -->
                        <div class="shop-tab nav">
                            <button class="active" data-bs-target="#shop-grid" data-bs-toggle="tab">
                                <i class="fa fa-th" aria-hidden="true"></i>
                            </button>
                            <button data-bs-target="#shop-list" data-bs-toggle="tab">
                                <i class="fa fa-list" aria-hidden="true"></i>
                            </button>
                        </div>
                        <!-- Right Side Start -->
                        <div class="select-shoing-wrap d-flex align-items-center">
                            <div class="shot-product">
                                <p class="text-nowrap">Ordenar por:</p>
                            </div>
                            <!-- Single Wedge End -->
                            <div class="header-bottom-set dropdown">
                                <button class="dropdown-toggle header-action-btn" data-bs-toggle="dropdown">Default <i class="fa fa-angle-down"></i></button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <?= $this->Paginator->sort('nome', __('Nome')) ?>
                                    <li><a class="dropdown-item" href="#">Name, A to Z</a></li>
                                    <li><a class="dropdown-item" href="#">Name, Z to A</a></li>
                                    <li><a class="dropdown-item" href="#">Price, low to high</a></li>
                                    <li><a class="dropdown-item" href="#">Price, high to low</a></li>
                                    <li><a class="dropdown-item" href="#">Sort By new</a></li>
                                    <li><a class="dropdown-item" href="#">Sort By old</a></li>
                                </ul>
                            </div>
                            <!-- Single Wedge Start -->
                        </div>
                        <!-- Right Side End -->
                    </div>
                    <!-- Shop Top Area End -->
                    <!-- Shop Bottom Area Start -->
                    <div class="shop-bottom-area">
                        <!-- Tab Content Area Start -->
                        <div class="row">
                            <div class="col">
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="shop-grid">
                                        <div class="row mb-n-30px mb-3">
                                            <?php foreach ($products as $product): ?>
                                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                                    <!-- Single Prodect -->
                                                    <div class="product">
                                                        <?php if(!empty($product->preco->preco_de) || $product->created->format('Y-m') == $now->format('Y-m')): ?>
                                                            <span class="badges" style="z-index: 99;">
                                                            <?php if(!empty($product->preco->porcentagem_desconto)): ?>
                                                                <span class="sale">-<?= $product->preco->porcentagem_desconto ?>%</span>
                                                            <?php endif; ?>
                                                            <?php if ($product->created->format('Y-m')): ?>
                                                                <span class="new">Novo</span></span>
                                                            <?php endif; ?>
                                                        <?php endif; ?>
                                                        <div class="thumb">
                                                            <?php if (!empty($product->images)) : ?>
                                                                <div class="swiper" style="height: 250px;">
                                                                    <!-- Additional required wrapper -->
                                                                    <div class="swiper-wrapper">
                                                                        <!-- Slides -->
                                                                        <?php foreach (json_decode($product->images) as $image) : ?>
                                                                            <div class="swiper-slide d-flex">
                                                                                <?= $this->Html->image($image,
                                                                                    [
                                                                                        'pathPrefix' => "/mercar/img/uploads/products/{$product->store->id}/",
                                                                                        'class' => 'img-responsive m-auto w-100',
                                                                                        'style' => 'height: 200px; max-height: 600px;'
                                                                                    ]
                                                                                )?>
                                                                            </div>
                                                                        <?php endforeach; ?>
                                                                    </div>

                                                                    <!-- If we need navigation buttons -->
                                                                    <div class="swiper-button-prev"></div>
                                                                    <div class="swiper-button-next"></div>
                                                                </div>
                                                            <?php else : ?>
                                                                <?= $this->Html->image('product-image/1.webp',
                                                                    [
                                                                        'alt' => 'Produto'
                                                                    ]
                                                                )?>
                                                            <?php endif; ?>
                                                        </div>
                                                        <div class="content">
                                                            <span class="category"><a href="#"><?= $product->category->nome ?></a></span>
                                                            <h5 class="title">
                                                                <a href=<?= "/products/{$product->slug}" ?>><?= $product->nome ?></a>
                                                            </h5>
                                                            <span class="price">
                                                                <?php if (!empty($product->preco->preco_de)): ?>
                                                                    <span class="old"><?= $product->preco->preco_de ?></span>
                                                                <?php endif; ?>
                                                            <span class="new">R$ <?= number_format($product->preco->preco_por, 2, ',', '.') ?></span>
                                                            </span>
                                                        </div>
                                                        <div class="actions">
                                                            <button title="Adicionar ao Carrinho" class="action add-to-cart" data-bs-toggle="modal" data-bs-target=<?= "#modalCart" . $product->id ?> onClick="addToCart(<?= $product->id ?>)"><i class="pe-7s-shopbag"></i></button>
                                                            <button class="action wishlist" title="Adicionar aos Favoritos" data-bs-toggle="modal" data-bs-target=<?= "#modalWishlist" . $product->id ?>><i
                                                                    class="pe-7s-like"></i></button>
                                                            <button class="action quickview" data-link-action="quickview" title="Visualizar" data-bs-toggle="modal" data-bs-target=<?= "#modalView" . $product->id ?>><i class="pe-7s-look"></i></button>
                                                            <button class="action compare" title="Comparar" data-bs-toggle="modal" data-bs-target=<?= "#modalCompare" . $product->id ?>><i
                                                                    class="pe-7s-refresh-2"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade mb-n-30px" id="shop-list">
                                        <?php foreach ($products as $product): ?>
                                            <div class="shop-list-wrapper mb-30px">
                                                <div class="row">
                                                    <div class="col-md-5 col-lg-5 col-xl-4 mb-lm-30px">
                                                        <div class="product">
                                                            <div class="thumb">
                                                                <?php if (!empty($product->images)) : ?>
                                                                    <div class="swiper" style="height: 250px;">
                                                                        <!-- Additional required wrapper -->
                                                                        <div class="swiper-wrapper">
                                                                            <!-- Slides -->
                                                                            <?php foreach (json_decode($product->images) as $image) : ?>
                                                                                <div class="swiper-slide d-flex">
                                                                                    <?= $this->Html->image($image,
                                                                                        [
                                                                                            'pathPrefix' => "/mercar/img/uploads/products/{$product->store->id}/",
                                                                                            'class' => 'img-responsive m-auto w-100',
                                                                                            'style' => 'height: 200px; max-height: 600px;'
                                                                                        ]
                                                                                    )?>
                                                                                </div>
                                                                            <?php endforeach; ?>
                                                                        </div>

                                                                        <!-- If we need navigation buttons -->
                                                                        <div class="swiper-button-prev"></div>
                                                                        <div class="swiper-button-next"></div>
                                                                    </div>
                                                                <?php else : ?>
                                                                    <?= $this->Html->image('product-image/1.webp',
                                                                        [
                                                                            'alt' => 'Produto'
                                                                        ]
                                                                    )?>
                                                                <?php endif; ?>
                                                                <?php if(!empty($product->preco->preco_de) || $product->created->format('Y-m') == $now): ?>
                                                                    <span class="badges">
                                                                    <?php if(!empty($product->preco->preco_de)): ?>
                                                                        <?php
                                                                            $valor_desconto = $product->preco->preco_de - $product->preco->preco_por;
                                                                            $porcentagem_desconto = $product->preco->preco_por / $valor_desconto;
                                                                        ?>
                                                                        <span class="sale">-<?= round($porcentagem_desconto, 2) ?>%</span>
                                                                    <?php endif; ?>
                                                                    <?php if ($product->created->format('Y-m')): ?>
                                                                        <span class="new">Novo</span></span>
                                                                    <?php endif; ?>
                                                                <?php endif; ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7 col-lg-7 col-xl-8">
                                                        <div class="content-desc-wrap">
                                                            <div class="content">
                                                                <span class="category"><a href="#"><?= $product->category->nome ?></a></span>
                                                                <h5 class="title">
                                                                    <a href=<?= "/products/{$product->slug}" ?>><?= $product->nome ?></a>
                                                                </h5>
                                                                <p><?= $product->descricao ?></p>
                                                            </div>
                                                            <div class="box-inner">
                                                                <span class="price">
                                                                <?php if (!empty($product->preco->preco_de)): ?>
                                                                    <span class="old"><?= $product->preco->preco_de ?></span>
                                                                <?php endif; ?>
                                                                    <span class="new">R$ <?= number_format($product->preco->preco_por, 2, ',', '.') ?></span>
                                                                </span>
                                                                <div class="actions">
                                                                    <button title="Adicionar ao Carrinho" class="action add-to-cart" data-bs-toggle="modal" data-bs-target=<?= "#modalCart" . $product->id ?>><i class="pe-7s-shopbag"></i></button>
                                                                    <button class="action wishlist" title="Adicionar aos Favoritos" data-bs-toggle="modal" data-bs-target=<?= "#modalWishlist" . $product->id ?>><i
                                                                            class="pe-7s-like"></i></button>
                                                                    <button class="action quickview" data-link-action="quickview" title="Visualizar" data-bs-toggle="modal" data-bs-target=<?= "#modalView" . $product->id ?>><i class="pe-7s-look"></i></button>
                                                                    <button class="action compare" title="Comparar" data-bs-toggle="modal" data-bs-target=<?= "#modalCompare" . $product->id ?>><i
                                                                            class="pe-7s-refresh-2"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Tab Content Area End -->
                        <?php if (count($products) == 9): ?>
                            <!--  Pagination Area Start -->
                            <div class="pro-pagination-style text-center text-lg-end mt-6" data-aos="fade-up" data-aos-delay="200">
                                <div class="pages">
                                    <div class="paginator">
                                        <ul class="pagination">
                                            <?= $this->Paginator->prev('< ') ?>
                                            <?= $this->Paginator->numbers() ?>
                                            <?= $this->Paginator->next(' > ') ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--  Pagination Area End -->
                        <?php endif; ?>
                    </div>
                    <!-- Shop Bottom Area End -->
                </div>
                <!-- Sidebar Area Start -->
                <div class="col-lg-3 order-lg-first col-md-12 order-md-last">
                    <div class="shop-sidebar-wrap">
                        <!-- Sidebar single item -->
                        <div class="sidebar-widget">
                            <h4 class="sidebar-title">Top Categories</h4>
                            <div class="sidebar-widget-category">
                                <ul>
                                    <li><a href="#" class="selected m-0"> All
                                            <span>(65)</span> </a></li>
                                    <li><a href="#" class=""> Computer
                                            <span>(12)</span> </a></li>
                                    <li><a href="#" class=""> Covid-19
                                            <span>(22)</span> </a></li>
                                    <li><a href="#" class=""> Electronics
                                            <span>(19)</span> </a></li>
                                    <li><a href="#" class=""> Frame Sunglasses
                                            <span>(17)</span> </a></li>
                                    <li><a href="#" class=""> Furniture
                                            <span>(7)</span> </a></li>
                                    <li><a href="#" class=""> Genuine Leather
                                            <span>(9)</span> </a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Sidebar single item -->
                        <div class="sidebar-widget mt-8">
                            <h4 class="sidebar-title">Price Filter</h4>
                            <div class="price-filter">
                                <div class="price-slider-amount">
                                    <input type="text" id="amount" class="p-0 h-auto lh-1" name="price" placeholder="Add Your Price" />
                                </div>
                                <div id="slider-range"></div>
                            </div>
                        </div>
                        <!-- Sidebar single item -->
                        <div class="sidebar-widget">
                            <h4 class="sidebar-title">Color</h4>
                            <div class="sidebar-widget-color">
                                <ul class="d-flex flex-wrap">
                                    <li><a href="#" class="color-1"></a></li>
                                    <li><a href="#" class="color-2"></a></li>
                                    <li><a href="#" class="color-3"></a></li>
                                    <li><a href="#" class="color-4"></a></li>
                                    <li><a href="#" class="color-5"></a></li>
                                    <li><a href="#" class="color-6"></a></li>
                                    <li><a href="#" class="color-7"></a></li>
                                    <li><a href="#" class="color-8"></a></li>
                                    <li><a href="#" class="color-9"></a></li>
                                    <li><a href="#" class="color-10"></a></li>
                                    <li><a href="#" class="color-11"></a></li>
                                    <li><a href="#" class="color-12"></a></li>
                                    <li><a href="#" class="color-13"></a></li>
                                    <li><a href="#" class="color-14"></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Sidebar single item -->
                        <div class="sidebar-widget">
                            <h4 class="sidebar-title">Size</h4>
                            <div class="sidebar-widget-size">
                                <ul>
                                    <li><a href="#" class="selected m-0"> All
                                            <span>(6)</span> </a></li>
                                    <li><a href="#" class=""> S <span>(12)</span> </a>
                                    </li>
                                    <li><a href="#" class=""> M <span>(21)</span> </a>
                                    </li>
                                    <li><a href="#" class=""> L <span>(16)</span> </a>
                                    </li>
                                    <li><a href="#" class=""> XL <span>(22)</span> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Sidebar single item -->
                        <div class="sidebar-widget">
                            <h4 class="sidebar-title">Brands</h4>
                            <div class="sidebar-widget-brand">
                                <ul>
                                    <li><a href="#" class="selected m-0"> Lakmeeto<span>(65)</span> </a></li>
                                    <li><a href="#" class=""> Beautifill <span>(14)</span></a></li>
                                    <li><a href="#" class=""> Made In GD <span>(21)</span></a></li>
                                    <li><a href="#" class=""> Pecifico <span>(16)</span></a></li>
                                    <li><a href="#" class=""> Xlovgtir<span>(12)</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Sidebar single item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Page End  -->
</div>
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
    });
</script>