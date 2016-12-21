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
        $url = isset($_GET['url'])? $_GET['url'] : null;
        if(empty($url[0])){
            require 'controllers/index.php';
            $controller = new Index();
            $controller->index();
            return false;
        }

        $url = explode("/", rtrim($_GET['url'], '/'));
        $file = "controllers/" . $url[0] . ".php";
        if(file_exists($file)){
            require $file;
        }else{
            require "controllers/error.php";
            $this->error = new Error("This page is not exest");
            $this->error->index();
            return false;
        }

        $controller = new $url[0]();

        if (isset($url[2])) {
            $controller->$url[1]($url[2]);




        } elseif (isset($url[1])) {
            if(method_exists($controller, $url[1])){
                $controller->$url[1]();
            }else{
                require "controllers/error.php";
                $this->error = new Error("This page is not exest");
                $this->error->index();
                return false;
            }


        }else{
            $controller->index();
        }

    }

}