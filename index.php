<?php
/**
 * Created by PhpStorm.
 * User: Muhammad
 * Date: 04.09.2015
 * Time: 21:26
 */

require './libs/Database.php';
require './libs/Session.php';
require './libs/Start.php';
require './libs/Controller.php';
require './libs/Model.php';
require './libs/View.php';

require './config/database.php';
require './config/path.php';
require './config/testcase.php';


$session  = new Session();
$session->init();
if($session->get('lang') == null){
    $session->set('lang',0);
}
//    $session->set('login',"mehmed_77");
//    $session->set('loggedIn',true);




$aplication = new Start();

/*
 * if lang==0 then uzbek
 * if lang==1 then english
 * if lang==2 then russian
 */
