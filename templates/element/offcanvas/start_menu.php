<div id="offcanvas-mobile-menu" class="offcanvas offcanvas-mobile-menu">
    <button class="offcanvas-close"></button>
    <div class="user-panel">
        <ul>
            <li><a href="tel:2134567899"><i class="fa fa-phone"></i> 21 3456-7899</a></li>
            <li><a href="mailto:mercar@yopmail.com"><i class="fa fa-envelope-o"></i> mercar@yopmail.com</a></li>
            <?php if (!empty($user_logged)): ?>
                <li>
                    <?= $this->Html->link('<i class="fa fa-user"></i> Minha Conta',
                        [
                            'prefix' => 'client',
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
    <div class="inner customScroll">
        <div class="offcanvas-menu mb-4">
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