<?php
/**
 * Created by PhpStorm.
 * User: Tatiana
 * Date: 27.11.2018
 * Time: 13:56
 */

namespace app\core;


class App
{
    public static function run(){
        $routes = include __DIR__.'/../routes.php';
        $url = $_SERVER['REQUEST_URI'];
//        Helper::debug($routes);

        foreach ($routes as $pattern => $route){
            preg_match('#^/'.$pattern.'$#', $url, $matches);
            if (!empty($matches)){
                break;
            }
        }
        $tmp = explode('@', $route);
        $controller = 'app\Controllers\\'.$tmp[0];
        $method = $tmp[1];
        $controller = new $controller();
        $controller->$method();
//        Helper::debug($controller);
    }
}