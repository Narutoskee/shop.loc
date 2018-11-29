<?php
/**
 * Created by PhpStorm.
 * User: Tatiana
 * Date: 26.11.2018
 * Time: 20:31
 */

namespace app\core;


class Model
{
    protected static $tablename=null;

    public static function findById($id){
        $pdo = Db::getConnection();
        $query = "SELECT * FROM `".static::getTablename()."` where id=:id";
        $smth = $pdo->prepare($query);
        $smth->execute([':id'=>$id]);
        return $smth->fetch(\PDO::FETCH_OBJ);
    }

    public static function getTablename(){
        if(self::$tablename){
            return static::$tablename;
        }else{
            return strtolower(array_pop(explode('\\', static::class)));
        }
    }

    public static function getAll($id){
        $pdo = Db::getConnection();
        $query = "SELECT * FROM `".static::getTablename()."`";
        $smth = $pdo->prepare($query);
        $smth->execute([':id'=>$id]);
        return $smth->fetchAll(\PDO::FETCH_OBJ);
    }

    public function save(){

    }

    public function delete(){

    }
}