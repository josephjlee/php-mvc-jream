<?php
/**
 * Created by PhpStorm.
 * User: Denny
 * Date: 22.12.2016
 * Time: 0:31
 */
class LoginModel extends Model{

    function __construct()
    {
        parent::__construct();

    }
    function run()
    {
        $stm = $this->db->prepare("SELECT id, role FROM users WHERE name = :login AND pass = sha1(:password)");
        $stm->execute(array(
            ':login'    => $_POST['login'],
            ':password' => $_POST['pass']));
//        $data = $stm->fetchAll();
        $data = $stm->fetch(PDO::FETCH_ASSOC);


        $count = $stm->rowCount();
        if($count>0){
            //login
            Session::init();
            Session::set('role', $data['role']);
            Session::set('loggedIn', true);
            header('location: ../dashboard');
        }else{
            //error
            header('location: ../login');
        }
    }

   }