<?php
/**
 * Created by PhpStorm.
 * User: Denny
 * Date: 23.12.2016
 * Time: 14:26
 */
class DashBoard extends Controller{

    function __construct(){
        parent::__construct();
        Session::init();
        $logged = Session::get('loggedIn');
        if($logged == false){
            Session::destroy();
            header('location: ../login');
            exit;
        }
        $this->view->js= array('dashboard/js/default.js');
    }
    function index(){
        $this->view->msg = "Logged only";
        $this->view->render('dashboard/index');
    }
    function logout(){
        Session::destroy();
        header('location: ../login');
        exit;

    }

}