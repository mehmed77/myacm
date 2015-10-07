<?php

/**
 * Created by PhpStorm.
 * User: Muhammad
 * Date: 04.09.2015
 * Time: 20:30
 */
class Start
{
   function __construct(){

       $url = isset($_GET['url']) ? $_GET['url'] : "";
       $url = rtrim($url,'/');
       $url = explode('/',$url);
       if(empty($url[0])){
           require 'controllers/index.php';
           $controller = new Index();
           $controller->index();
           return false;
       }
       $file = 'controllers/'. $url[0] .'.php';
       if(file_exists($file)){
           require 'controllers/'. $url[0] .'.php';
       }else{
          $this->error("Bunday File topilmadi");
           return false;
       }

       $controller = new $url[0];
       $path = './models/' . $url[0] . '_model.php';
       if(file_exists($path)){
           $controller->loadModel($url[0]);
       }
      // Methodlar bilan ishlash;
       if(isset($url[2]) != null){
           if(method_exists($controller, $url[1])){
                 if(isset($url[3])){
                   $controller->{$url[1]}($url[2],$url[3]);
                 }else{
                     $controller->{$url[1]}($url[2]);
                 }
           }else{
               $this->error("Bunday Method mavjud emas");
               return false;
           }
       }else{
           if(isset($url[1])){
               if(method_exists($controller, $url[1])){
                   $controller->{$url[1]}();
               }else{
                   $this->error("Bunday Method mavjud emas");
                   return false;
               }
           }else{
               $controller->index();
           }
       }
   }



   function error($msg=false){
        require 'controllers/error.php';
        $error = new Error();
        $error->index($msg);
        return false;
   }
}