<?php
/**
 * Created by PhpStorm.
 * User: Tatiana
 * Date: 26.11.2018
 * Time: 21:59
 */

namespace app\core;


class Helper
{
    public static function debug($arr){
        echo "<pre>";
        print_r($arr);
        echo "</pre>";
    }
}