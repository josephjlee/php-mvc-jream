<?php
/**
 * Created by PhpStorm.
 * User: Denny
 * Date: 30.11.2016
 * Time: 15:52
 */
class helpModel extends Model{
    public function __construct(){
        echo "Model connected";
    }
    function blah(){
        return 20;
    }
}