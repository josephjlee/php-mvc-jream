<?php

/**
 * Created by PhpStorm.
 * User: Denny
 * Date: 26.11.2016
 * Time: 7:58
 */
class Bootstrap
{
    function  __construct()
    {
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = explode('/', rtrim($url, '/'));
        if (empty($url[0])) {
            include 'controllers/index.php';
            $controller = new Index();
            $controller->index();
            return false;
        }

        $file = "controllers/" . $url[0] . ".php";
        if (file_exists($file)) {
            require $file;

        } else {
            $this->error("This file is not exist");
            return false;
        }
        $controller = new $url[0];
        $controller ->loadModel($url[0]);


        if (isset($url[2])) {
            if (method_exists($controller, $url[1])) {
                $controller->$url[1]($url[2]);
            } else {
                $this->error("There is no method");
                return false;
            }
        } else {
            if (isset($url[1])) {
                if (method_exists($controller, $url[1])) {
                    $controller->$url[1]();
                } else {
                    $this->error("There is wrong parameter");
                    return false;
                }

            } else {
                $controller->index();
            }

        }

    }

    /**
     * @param string $msg
     * @return bool
     */
    function error($msg = "Unknown error")
    {
        require 'controllers/error.php';
        $controller = new Error();
        $controller->index($msg);


    }

}