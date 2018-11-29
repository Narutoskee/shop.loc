<?php
/**
 * Created by PhpStorm.
 * User: Tatiana
 * Date: 28.11.2018
 * Time: 15:33
 */

namespace app\core;


use PDO;
use PDOException;

class Db
{
    private static $connection;

    public static function getConnection(){
        if(self::$connection){

        }else{
            try{
                $connection = new PDO('mysql:host=localhost;dbname=php_shop;', 'root', '', [
                    PDO::ATTR_ERRMODE=>PDO::ERRMODE_WARNING
                ]);
                self::$connection = $connection;
            }catch (PDOException $exception){
                echo $exception->getMessage();
            }
        }
        return self::$connection;
    }
}