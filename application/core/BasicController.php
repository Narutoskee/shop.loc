<?php
/**
 * Created by PhpStorm.
 * User: Tatiana
 * Date: 26.11.2018
 * Time: 20:29
 */

namespace app\core;


class BasicController
{
    public $layout = 'default';
    public function __construct()
    {

    }

    public function error404(){
        header("HTTP/1.0 404 Not Found");
        echo "404";
    }

    public function render($view, $data=null){
        $arr = explode('\\', get_class($this));
        Helper::debug (strtolower(str_replace('Controller','',array_pop($arr))));
        $view =__DIR__."/../views/".$view.".php";
        include __DIR__.'/../views/layouts/'.$this->layout.".php";
    }


}