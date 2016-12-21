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

    }
    function index(){
        $this->view->msg = "This is index page";
        $this->view->render("index/index");

    }

    function details(){

    }

    function other($arg = false){
        $this->view->msg = "Inside other method <br>";
        $this->view->render("index/index");

    }
}