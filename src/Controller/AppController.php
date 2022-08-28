<?php
declare(strict_types=1);

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Event\EventInterface;
use Cake\Controller\Controller;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/4/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{
    public $user_logged;

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('FormProtection');`
     *
     * @return void
     */
    public function initialize(): void
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Paginator');
        $this->loadComponent('Flash');
        $this->loadComponent('Authentication.Authentication');
    }

    public function beforeFilter(EventInterface $event)
    {
        parent::beforeFilter($event);

        $this->Authentication->allowUnauthenticated(['display']);
        if ($this->request->hasHeader('Authorization') && $this->request->getHeader('Authorization')[0] == md5(env('AUTHORIZATION_UPDATE'))) {
            $this->Authentication->allowUnauthenticated(['updateSale']);
        }
    }

    // public function afterFilter(EventInterface $event)
    // {

    // }

    public function nodeModule(...$path_pieces)
    {
        $file_path = ROOT . DS . "node_modules" . DS . implode(DS, $path_pieces);
        if(!file_exists($file_path))
        {
            $this->response = $this->response->withStatus(404);
            throw new NotFoundException("The requested file has not been found, holmes");
        }
        $this->response = $this->response->withFile($file_path);
        return $this->response;
}
}
