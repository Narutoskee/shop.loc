<?php
/**
 * Created by PhpStorm.
 * User: Tatiana
 * Date: 26.11.2018
 * Time: 21:56
 */

namespace app\Controllers;


use app\core\BasicController;

class SiteController extends BasicController
{
    public function index(){
        $this->render('site/main');
    }

    public function about(){
        $this->render('site/about');
    }


    public function notFound(){
        echo "404";
    }
}