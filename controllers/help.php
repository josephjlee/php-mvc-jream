<?php
/**
 * Created by PhpStorm.
 * User: Denny
 * Date: 26.11.2016
 * Time: 7:22
 */

class Help extends Controller{

    function __construct(){
        parent::__construct();

        $this->view->msg = "This is help page";


    }
    function index(){
        $this->view->render("help/index");
    }

    function other($args = false){


        require 'models/helpModel.php';
        $model = new helpModel();
        $this->view->blah = $model->blah();

    }
}