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
       Session::init();
       Session::set('navbar_active', "Problem");
       parent::__construct();
   }
    function index(){
        $this->view->render("registration/index");
    }
}