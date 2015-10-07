<?php

/**
 * Created by PhpStorm.
 * User: Muhammad
 * Date: 04.09.2015
 * Time: 20:29
 */
class Controller
{
   function __construct(){
       $this->view = new View();
   }
   public function loadModel($name){
       $path = './models/'. $name .'_model.php';
       if(file_exists($path)){
           require $path;
           $modelName = $name.'_Model';
           $this->model = new $modelName;
       }
   }
}