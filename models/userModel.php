<?php
/**
 * Created by PhpStorm.
 * User: Denny
 * Date: 22.12.2016
 * Time: 0:31
 */
class UserModel extends Model{

    public function __construct()
    {
        parent::__construct();

    }

    public function userList()
    {
        $stm = $this->db->prepare('SELECT id, name, role FROM users');
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);

    }
    public function userSingleList($id)
    {
        $stm = $this->db->prepare('SELECT id, name, role FROM users WHERE id = :id');
        $stm->execute(array(
            ':id' => $id,
        ));
        return $stm->fetch(PDO::FETCH_ASSOC);
    }
    public function create($data)
    {
        $stm = $this->db->prepare('INSERT INTO users (name, pass, role)
        VALUES (:name, :pass, :role);
                                  ');

        $stm->execute(array(
            ':name'     => $data['name'],
            ':pass' => $data['pass'],
            ':role'     => $data['role']
        ));
    }

    public function delete($id){
        $stm = $this->db->prepare('DELETE FROM users WHERE id = :id');
        $stm->execute(array(
            ':id'=>$id,
        ));
    }

}