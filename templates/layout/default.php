<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mercar</title>
    <meta name="robots" content="index, follow" />
    <meta name="description" content="Hmart-Smart Product eCommerce html Template">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico" />
    <!-- CSS
    ============================================ -->
    <?= $this->Html->css(
        [
            'animate.min.css',
            'bootstrap.min.css',
            'font.awesome.css',
            'pe-icon-7-stroke.css',
            'animate.min.css',
            'swiper-bundle.min.css',
            'venobox.css',
            'jquery-ui.min.css',
            'style.css',
            'flash-notification.css'
        ]
    ) ?>
    <?= $this->Html->script(
        [
            '/js/vendor/bootstrap.bundle.min.js',
            '/js/vendor/jquery-3.6.0.min.js',
            '/js/vendor/jquery-migrate-3.3.2.min.js',
            '/js/vendor/modernizr-3.11.2.min.js',
            '/js/plugins/jquery.countdown.min.js',
            '/js/plugins/swiper-bundle.min.js',
            '/js/plugins/scrollUp.js',
            '/js/plugins/venobox.min.js',
            '/js/plugins/jquery-ui.min.js',
            '/js/vendor/jquery-3.6.0.min.js',
            '/js/plugins/mailchimp-ajax.js',
            '/js/plugins/jquery.mask.min.js',
            '/js/flash-notification.js'
        ]
    ) ?>
</head>
<body>
    <!-- Header Start -->
    <?= $this->element('default/header') ?>
    <!-- Header End -->

    <?= $this->Flash->render() ?>
    <?= $this->fetch('content') ?>
    
    <!-- offcanvas overlay start -->
    <div class="offcanvas-overlay"></div>
    <!-- offcanvas overlay end -->

    <!-- OffCanvas Menu Start -->
    <?= $this->element('offcanvas/start_menu') ?>
    <!-- OffCanvas Menu End -->

    <!-- OffCanvas Wishlist Start -->
    <?= $this->element('offcanvas/view_favoritos') ?>
    <!-- OffCanvas Wishlist End -->

    <!-- OffCanvas Cart Start -->
    <?= $this->element('offcanvas/shopping_cart') ?>
    <!-- OffCanvas Cart End -->
    
    <!-- Footer Start -->
    <?= $this->element('default/footer') ?>
    <!-- Footer End -->

    <?= $this->Html->script(
        [
            'main.js',
            'cart.js'
        ]
    ) ?>
</body>
</html>
