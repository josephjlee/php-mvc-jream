<?php
/**
 * Created by PhpStorm.
 * User: Denny
 * Date: 26.11.2016
 * Time: 8:12
 */

class Error extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->render("error/index");

    }
}