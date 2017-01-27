<?php
/**
 * Created by PhpStorm.
 * User: Denny
 * Date: 28.12.2016
 * Time: 0:35
 */
class DashBoardModel extends Model{
    function __construct(){
        parent::__construct();
    }
    function xhrInsert(){
        $text = $_POST['text'];
        $stm = $this->db->prepare('INSERT INTO data (text) VALUES (:text)');
        $stm->execute(array(':text'=>$text));
        $data = array('text'=>$text, 'id'=>$this->db->lastInsertId());
        echo json_encode($data);
    }
    function xhrGetListing(){
        $data = $this->db->query('SELECT * FROM data')->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($data);
    }
    function xhrDeleteListing(){
        $id = $_POST['id'];
        $stm = $this->db->prepare('DELETE FROM data WHERE id="'.$id.'"');
        $stm->execute();

    }
}