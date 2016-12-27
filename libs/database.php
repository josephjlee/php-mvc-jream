<?php
/**
 * Created by PhpStorm.
 * User: Denny
 * Date: 22.12.2016
 * Time: 0:13
 */
class Database extends PDO{
    function __construct(){
        parent::__construct(DB_TYPE.':host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS );
    }
}