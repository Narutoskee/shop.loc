<?php
/**
 * Created by PhpStorm.
 * User: Tatiana
 * Date: 27.11.2018
 * Time: 13:48
 */

return [
    'blog/article/(?P<id>\d+)'=>'BlogController@article',
    'blog'=>'BlogController@index',
    ''=>'SiteController@index',


];