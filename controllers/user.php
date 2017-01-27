<?php
/**
 * Created by PhpStorm.
 * User: Denny
 * Date: 23.12.2016
 * Time: 14:26
 */
class User extends Controller
{

    public function __construct()
    {
        parent::__construct();
        Session::init();
        $logged = Session::get('loggedIn');
        $role = Session::get('role');

        if ($logged == false || $role == 'default') {
            Session::destroy();
            header('location: ../login');
            exit;
        }

    }

    public function index()
    {
        $this->view->userList = $this->model->userList();
        $this->view->msg = "This page for Logged only users";
        $this->view->render('user/index');
    }

    public function create()
    {
        $data = array();
        $data['name'] = $_POST['login'];
        $data['pass'] = sha1($_POST['pass']);
        $data['role'] = $_POST['role'];

        //@TODO: Do some error checking;

        $this->model->create($data);
        header('location: '.URL.'user');
    }
    public function edit($id)
    {

        //fetch individual user
        $this->view->user = $this->model->userSingleList($id);
        $this->view->render('user/edit');
    }
    public function editSave($id)
    {
        $data = array();
        $data['id'] = $id;
        $data['name'] = $_POST['login'];
        $data['pass'] = sha1($_POST['pass']);
        $data['role'] = $_POST['role'];

        //@TODO: Do some error checking;

        $this->model->editSave($data);
        header('location: '.URL.'user');
    }

    public function delete($id)
    {
        $this->model->delete($id);
        header('location: '.URL.'user');
    }
}
