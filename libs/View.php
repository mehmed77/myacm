<?php

/**
 * Created by PhpStorm.
 * User: Muhammad
 * Date: 04.09.2015
 * Time: 20:30
 */
class View
{
   function __construct(){

   }
    public function render($name){
        Session::init();

        require 'views/navbar.php';
        require 'views/'.$name.'.php';
//        require 'views/footer.php';
    }
    public function render1($name){
        require'views/'.$name.'.php';
    }
}