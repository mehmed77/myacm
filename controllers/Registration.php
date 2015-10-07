<?php

/**
 * Created by PhpStorm.
 * User: Muhammad
 * Date: 19.09.2015
 * Time: 22:09
 */
class Registration extends Controller
{
   function __construct(){
       parent::__construct();
   }
    function index(){
        $this->view->render("registration/index");
    }
}