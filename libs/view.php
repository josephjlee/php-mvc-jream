<?php
/**
 * Created by PhpStorm.
 * User: Denny
 * Date: 26.11.2016
 * Time: 10:51
 */
class View {
    function __construct(){

        echo "This is view";

    }

    public function render($name){
        require "view/".$name.".php";
    }
}