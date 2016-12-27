<?php
/**
 * Created by PhpStorm.
 * User: Denny
 * Date: 30.11.2016
 * Time: 15:55
 */
class Model{
    public function __construct(){
        $this->db = new Database();
    }
}