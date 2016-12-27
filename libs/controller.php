<?php
/**
 * Created by PhpStorm.
 * User: Denny
 * Date: 26.11.2016
 * Time: 8:22
 */
class Controller {
    function __construct(){
        $this->view = new View();



    }

    function loadModel ($name){
        $file = 'models/'.$name.'Model.php';
        if(file_exists($file)){
            require $file;
            $modelName = $name.'Model';
            $this->model = new $modelName;
        }

    }
}