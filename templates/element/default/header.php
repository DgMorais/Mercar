<header>
    <!-- Header top area start -->
    <div class="header-top">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col">
                    <div class="welcome-text">
                        <p>Bem-vindo a Mercar!</p>
                    </div>
                </div>
                <div class="col d-none d-lg-block">
                    <div class="top-nav">
                        <ul>
                            <li><a href="tel:2134567899"><i class="fa fa-phone"></i> 21 3456-7899</a></li>
                            <li><a href="mailto:mercar@yopmail.com"><i class="fa fa-envelope-o"></i> mercar@yopmail.com</a></li>
                            <?php if (!empty($user_logged)): ?>
                                <li>
                                    <?= $this->Html->link('<i class="fa fa-user"></i> Minha Conta',
                                        [
                                            'prefix' => $user_logged->group_name,
                                            'controller' => 'Users',
                                            'action' => 'myAccount'
                                        ],
                                        [
                                            'escapeTitle' => false
                                        ]
                                    ) ?>
                                </li>
                            <?php else: ?>
                                <li>
                                    <?= $this->Html->link('<i class="fa fa-user"></i> Login',
                                        [
                                            'prefix' => false,
                                            'controller' => 'Users',
                                            'action' => 'login'
                                        ],
                                        [
                                            'escapeTitle' => false
                                        ]
                                    ) ?>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header top area end -->
    <!-- Header action area start -->
    <div class="header-bottom d-none d-lg-block">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-3 col">
                    <div class="header-logo">
                        <?= $this->Html->link($this->Html->image('logo/logo.png',
                            [
                                'alt' => 'Site Logo'
                            ]
                            ),
                            '/',
                            [
                                'escapeTitle' => false
                            ]
                        ) ?>
                    </div>
                </div>
                <div class="col-lg-6 d-none d-lg-block">
                    <div class="search-element">
                        <?= $this->Form->create(null,
                            [
                                'method' => 'get',
                                'action' => '/shop'
                            ]
                        ) ?>
                            <?= $this->Form->control('search',
                                [
                                    'type' => 'text',
                                    'label' => false,
                                    'placeholder' => 'Search'
                                ]
                            ) ?>
                            <?= $this->Form->button('<i class="pe-7s-search"></i>',
                                [
                                    'escapeTitle' => false
                                ]
                            ) ?>
                        <?= $this->Form->end() ?>
                    </div>
                </div>
                <div class="col-lg-3 col">
                    <div class="header-actions">
                        <?php if (!empty($user_logged)): ?>
                            <?= $this->Html->link('<i class="fa fa-user"></i>',
                                [
                                    'prefix' => 'client',
                                    'controller' => 'Users',
                                    'action' => 'myAccount'
                                ],
                                [
                                    'class' => 'header-action-btn pr-0',
                                    'escapeTitle' => false
                                ]
                            )?>
                        <?php endif; ?>
                        <!-- Single Wedge Start -->
                        <a href="#offcanvas-wishlist" class="header-action-btn offcanvas-toggle">
                            <i class="pe-7s-like"></i>
                        </a>
                        <!-- Single Wedge End -->
                        <a href="#offcanvas-cart" class="header-action-btn header-action-btn-cart offcanvas-toggle pr-0">
                            <i class="pe-7s-shopbag"></i>
                            <span class="header-action-num">01</span>
                        </a>
                        <a href="#offcanvas-mobile-menu" class="header-action-btn header-action-btn-menu offcanvas-toggle d-lg-none">
                            <i class="pe-7s-menu"></i>
                        </a>
                        <?php if (!empty($user_logged)): ?>
                            <?= $this->Html->link("<i class='fa fa-sign-out'></i>",
                                '/logout',
                                [
                                    'class' => 'header-action-btn pr-0',
                                    'escapeTitle' => false
                                ]
                                );?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header action area end -->
    <!-- Header action area start -->
    <div class="header-bottom d-lg-none sticky-nav style-1">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-3 col">
                    <div class="header-logo">
                        <?= $this->Html->link($this->Html->image('logo/logo.png',
                            [
                                'alt' => 'Site Logo'
                            ]
                            ),
                            '/',
                            [
                                'escapeTitle' => false
                            ]
                        ) ?>
                    </div>
                </div>
                <div class="col-lg-6 d-none d-lg-block">
                    <div class="search-element">
                        <?= $this->Form->create(null,
                            [
                                'method' => 'get',
                                'action' => '/shop'
                            ]
                        ) ?>
                            <?= $this->Form->control('search',
                                [
                                    'type' => 'text',
                                    'label' => false,
                                    'placeholder' => 'Search'
                                ]
                            ) ?>
                            <?= $this->Form->button('<i class="pe-7s-search"></i>',
                                [
                                    'escapeTitle' => false
                                ]
                            ) ?>
                        <?= $this->Form->end() ?>
                    </div>
                </div>
                <div class="col-lg-3 col">
                    <div class="header-actions">
                        <!-- Single Wedge Start -->
                        <a href="#offcanvas-wishlist" class="header-action-btn offcanvas-toggle">
                            <i class="pe-7s-like"></i>
                        </a>
                        <!-- Single Wedge End -->
                        <a href="#offcanvas-cart" class="header-action-btn header-action-btn-cart offcanvas-toggle pr-0">
                            <i class="pe-7s-shopbag"></i>
                            <span class="header-action-num">01</span>
                            <!-- <span class="cart-amount">€30.00</span> -->
                        </a>
                        <a href="#offcanvas-mobile-menu" class="header-action-btn header-action-btn-menu offcanvas-toggle d-lg-none">
                            <i class="pe-7s-menu"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header action area end -->
    <!-- header navigation area start -->
    <div class="header-nav-area d-none d-lg-block sticky-nav">
        <div class="container">
            <div class="header-nav">
                <div class="main-menu position-relative">
                    <ul>
                        <li>
                            <?= $this->Html->link('Home',
                                '/'
                            ) ?>
                        </li>
                        <li>
                            <?= $this->Html->link('Sobre',
                                '#'
                            ) ?>
                        </li>
                        <li class="dropdown position-static"><a href="about.html">Pages <i class="fa fa-angle-down"></i></a>
                            <ul class="mega-menu d-block">
                                <li class="d-flex">
                                    <ul class="d-block">
                                        <li class="title"><a href="#">Inner Pages</a></li>
                                        <li><a href="404.html">404 Page</a></li>
                                        <li><a href="order-tracking.html">Order Tracking</a></li>
                                        <li><a href="faq.html">Faq Page</a></li>
                                        <li><a href="coming-soon.html">Coming Soon Page</a></li>
                                    </ul>
                                    <ul class="d-block">
                                        <li class="title"><a href="#">Other Shop Pages</a></li>
                                        <li><a href="cart.html">Cart Page</a></li>
                                        <li><a href="checkout.html">Checkout Page</a></li>
                                        <li><a href="compare.html">Compare Page</a></li>
                                        <li><a href="wishlist.html">Wishlist Page</a></li>
                                    </ul>
                                    <ul class="d-block">
                                        <li class="title"><a href="#">Related Shop Pages</a></li>
                                        <li><a href="my-account.html">Account Page</a></li>
                                        <li><a href="login.html">Login & Register Page</a></li>
                                        <li><a href="empty-cart.html">Empty Cart Page</a></li>
                                        <li><a href="thank-you-page.html">Thank You Page</a></li>
                                    </ul>
                                    <ul class="d-flex align-items-center p-0 border-0 flex-column justify-content-center">
                                        <li>
                                            <a class="p-0" href="shop-left-sidebar.html"><img class="img-responsive w-100" src="assets/images/banner/menu-banner.png" alt=""></a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown position-static"><a href="#">Shop <i
                            class="fa fa-angle-down"></i></a>
                            <ul class="mega-menu d-block">
                                <li class="d-flex">
                                    <ul class="d-block">
                                        <li class="title"><a href="#">Shop Page</a></li>
                                        <li><a href="shop-3-column.html">Shop 3 Column</a></li>
                                        <li><a href="shop-4-column.html">Shop 4 Column</a></li>
                                        <li><a href="shop-left-sidebar.html">Shop Left Sidebar</a></li>
                                        <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                        <li><a href="shop-list-left-sidebar.html">Shop List Left Sidebar</a>
                                        </li>
                                        <li><a href="shop-list-right-sidebar.html">Shop List Right Sidebar</a>
                                        </li>
                                    </ul>
                                    <ul class="d-block">
                                        <li class="title"><a href="#">product Details Page</a></li>
                                        <li><a href="single-product.html">Product Single</a></li>
                                        <li><a href="single-product-variable.html">Product Variable</a></li>
                                        <li><a href="single-product-affiliate.html">Product Affiliate</a></li>
                                        <li><a href="single-product-group.html">Product Group</a></li>
                                        <li><a href="single-product-tabstyle-2.html">Product Tab 2</a></li>
                                        <li><a href="single-product-tabstyle-3.html">Product Tab 3</a></li>
                                    </ul>
                                    <ul class="d-block">
                                        <li class="title"><a href="#">Single Product Page</a></li>
                                        <li><a href="single-product-slider.html">Product Slider</a></li>
                                        <li><a href="single-product-gallery-left.html">Product Gallery Left</a>
                                        <li><a href="single-product-gallery-right.html">Product Gallery Right</a> </li>
                                        <li><a href="single-product-sticky-left.html">Product Sticky Left</a>
                                        </li>
                                        <li><a href="single-product-sticky-right.html">Product Sticky Right</a>
                                        </li>
                                        <li><a href="cart.html">Cart Page</a></li>
                                    </ul>
                                    <ul class="d-block p-0 border-0">
                                        <li class="title"><a href="#">Single Product Page</a></li>
                                        <li><a href="checkout.html">Checkout Page</a></li>
                                        <li><a href="compare.html">Compare Page</a></li>
                                        <li><a href="wishlist.html">Wishlist Page</a></li>
                                        <li><a href="my-account.html">Account Page</a></li>
                                        <li><a href="login.html">Login & Register Page</a></li>
                                        <li><a href="empty-cart.html">Empty Cart Page</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown "><a href="#">Blog <i class="fa fa-angle-down"></i></a>
                            <ul class="sub-menu">
                                <li class="dropdown position-static"><a href="blog-grid-left-sidebar.html">Blog Grid
                                        <i class="fa fa-angle-right"></i></a>
                                    <ul class="sub-menu sub-menu-2">
                                        <li><a href="blog-grid.html">Blog Grid</a></li>
                                        <li><a href="blog-grid-left-sidebar.html">Blog Grid Left Sidebar</a></li>
                                        <li><a href="blog-grid-right-sidebar.html">Blog Grid Right Sidebar</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown position-static"><a href="blog-list-left-sidebar.html">Blog List
                                        <i class="fa fa-angle-right"></i></a>
                                    <ul class="sub-menu sub-menu-2">
                                        <li><a href="blog-list.html">Blog List</a></li>
                                        <li><a href="blog-list-left-sidebar.html">Blog List Left Sidebar</a></li>
                                        <li><a href="blog-list-right-sidebar.html">Blog List Right Sidebar</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown position-static"><a href="blog-single-left-sidebar.html">Single
                                        Blog <i class="fa fa-angle-right"></i></a>
                                    <ul class="sub-menu sub-menu-2">
                                        <li><a href="blog-single.html">Single Blog</a>
                                        <li><a href="blog-single-left-sidebar.html">Single Blog Left Sidebar</a>
                                        </li>
                                        <li><a href="blog-single-right-sidebar.html">Single Blog Right Sidebar</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <?= $this->Html->link('Contato',
                                '#'
                            ) ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- header navigation area end -->
    <div class="mobile-search-box d-lg-none">
        <div class="container">
            <!-- mobile search start -->
            <div class="search-element max-width-100">
                <?= $this->Form->create(null,
                    [
                        'method' => 'get',
                        'action' => '/shop'
                    ]
                ) ?>
                    <?= $this->Form->control('search',
                        [
                            'type' => 'text',
                            'label' => false,
                            'placeholder' => 'Search'
                        ]
                    ) ?>
                    <?= $this->Form->button('<i class="pe-7s-search"></i>',
                        [
                            'escapeTitle' => false
                        ]
                    ) ?>
                <?= $this->Form->end() ?>
            </div>
            <!-- mobile search start -->
        </div>
    </div>
</header>
