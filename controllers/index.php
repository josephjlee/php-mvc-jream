<?php
/**
 * Created by PhpStorm.
 * User: Denny
 * Date: 26.11.2016
 * Time: 7:18
 */

class Index extends Controller{
    function __construct(){
        parent::__construct();
        echo "IndexController<br>";
    }

    function other($arg = false){
        echo "Inside other method <br>";
        echo "with $arg";
    }
}