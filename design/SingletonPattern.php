<?php
/**
 * Created by PhpStorm.
 * User: ${mengfei}
 * Date: 2021/3/26
 * Time: 4:42 PM
 * 设计模式
 */



class SingletonPattern
{
    private static $_instance;

    private function __construct()
    {
    }

    private function __clone()
    {
        // TODO: Implement __clone() method.
    }

    public static function getInstance()
    {
        if(self::$_instance instanceof SingletonPattern){
             self::$_instance = new SingletonPattern;
        }

        return self::$_instance;
    }

}