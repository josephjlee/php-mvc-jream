<?php
/**
 * Created by PhpStorm.
 * User: Denny
 * Date: 09.12.2016
 * Time: 17:45
 */
class Login extends Controller{
    function __construct(){
        parent::__construct();


    }
    function index(){

        $this->view->msg = "This is logon page";
        $this->view->render("login/index");
    }
    function loginDo(){
        $this->model->run();
    }

}