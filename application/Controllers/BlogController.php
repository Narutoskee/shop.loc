<?php
/**
 * Created by PhpStorm.
 * User: Tatiana
 * Date: 26.11.2018
 * Time: 23:33
 */

namespace app\Controllers;


use app\core\BasicController;
use app\core\Helper;
use app\Models\Page;

class BlogController extends BasicController
{
    public function index(){
        echo "blog";
    }

    public function article($data=[]){
        $page = Page::findById($data['id']);
        Helper::debug($page);
        echo "search record". $data['id'];
    }
}