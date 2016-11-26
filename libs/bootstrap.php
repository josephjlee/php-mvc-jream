<?php

/**
 * Created by PhpStorm.
 * User: Denny
 * Date: 26.11.2016
 * Time: 7:58
 */
class Bootstrap
{
    public function  __construct()
    {
        $url = explode("/", rtrim($_GET['r'], '/'));
        $file = "controllers/" . $url[0] . ".php";
        if(file_exists($file)){
            require $file;
        }else{
            require "controllers/error.php";
            $this->error = new Error();
            return false;
        }


        $controller = new $url[0];

        if (isset($url[2])) {
            $controller->$url[1]($url[2]);
        } elseif (isset($url[1])) {
            $controller->$url[1]();
        }
    }
}