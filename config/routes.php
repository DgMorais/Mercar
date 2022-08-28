<?php
/**
 * Routes configuration.
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * It's loaded within the context of `Application::routes()` method which
 * receives a `RouteBuilder` instance `$routes` as method argument.
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

use Cake\Routing\Route\DashedRoute;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;

return static function (RouteBuilder $routes) {
    $routes->setRouteClass(DashedRoute::class);

    $routes->scope('/', function (RouteBuilder $builder) {
        $builder->connect('/', ['controller' => 'Pages', 'action' => 'display', 'prefix' => null, 'home']);
        $builder->connect('/login', ['controller' => 'Users', 'action' => 'login']);
        $builder->connect('/logout', ['controller' => 'Users', 'action' => 'logout']);
        $builder->connect('/shop', ['controller' => 'Shops', 'action' => 'index']);
        $builder->connect('/cart', ['controller' => 'Shops', 'action' => 'cart']);
        $builder->connect('/checkout', ['controller' => 'Shops', 'action' => 'checkout']);
        $builder->connect('/address-checkout', ['controller' => 'Shops', 'action' => 'addressCheckout']);
        $builder->connect('/finalize-purchase', ['controller' => 'Shops', 'action' => 'finalizePurchase']);
        $builder->connect('/check-purchase', ['controller' => 'Shops', 'action' => 'checkPurchase']);
        $builder->connect('/add-cupom/*', ['controller' => 'Shops', 'action' => 'addCupom']);
        $builder->connect('/clear-shopping-cart', ['controller' => 'Shops', 'action' => 'clearShoppingCart']);
        $builder->connect('/products/*', ['controller' => 'Products', 'action' => 'view']);
        $builder->connect('/payment-sale/*', ['controller' => 'Sales', 'action' => 'paymentSale']);
        $builder->connect('/update-sale/*', ['controller' => 'Sales', 'action' => 'updateSale']);
        $builder->connect('/completed-pucharse/*', ['controller' => 'Sales', 'action' => 'completedPucharse']);

        $builder->fallbacks();
    });

    $routes->prefix('cliente', function (RouteBuilder $builder) {
        $builder->connect('/my-account/*', ['controller' => 'Users', 'action' => 'myAccount', 'prefix' => 'cliente']);
        $builder->connect('/edit', ['controller' => 'Users', 'action' => 'edit', 'prefix' => 'cliente']);
        $builder->connect('/default-address', ['controller' => 'Users', 'action' => 'defineDefaultAddress', 'prefix' => 'cliente']);
        $builder->connect('/add-address', ['controller' => 'Users', 'action' => 'addAddress', 'prefix' => 'cliente']);

        $builder->fallbacks(DashedRoute::class);
    });
};
