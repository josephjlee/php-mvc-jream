<?php
/**
 * Created by PhpStorm.
 * User: Denny
 * Date: 26.11.2016
 * Time: 10:51
 */
class View
{
    function __construct()
    {

    }

    public function render($name, $noInclude = false)
    {

        if ($noInclude == true) {
            require "view/" . $name . ".php";
        } else {

            require "view/themplate/header.php";
            require "view/" . $name . ".php";
            require "view/themplate/footer.php";
        }

    }
}