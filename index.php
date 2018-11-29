<?php
/**
 * Created by PhpStorm.
 * User: Tatiana
 * Date: 26.11.2018
 * Time: 20:45
 */


use app\Controllers\BlogController;
use app\Controllers\SiteController;
use app\core\App;
use app\core\Db;
use app\core\Helper;
use app\Models\Category;

require 'vendor/autoload.php';

//$route = $_SERVER['REQUEST_URI'];
//switch ($route){
//    case "/":
//        $controller = new SiteController();
//        $controller->index();
//        break;
//    case '/about':
//        $controller = new SiteController();
//        $controller->about();
//        break;
//    case '/blog':
//        $controller = new BlogController();
//        $controller-> index();
//        break;
//    case '/page':
//        $controller = new BlogController();
//        $controller->page();
//        break;
//    default:
//        $controller = new SiteController();
//        $controller-> error404();
//}



App::run();