<?php

/**
 * Created by PhpStorm.
 * User: Muhammad
 * Date: 04.09.2015
 * Time: 21:27
 */
class Index extends Controller
{

    function __construct(){
        parent::__construct();
        Session::init();
        $this->view->lang = Session::get('lang');
    }
    public function index(){
        $this->view->render("index/index");
        return false;
    }
    public function news(){
        $this->view->mavzu = $this->model->news();
        $this->view->render("index/news");
    }
    // Tilni o'zgartirish funksiyasi;
    public function insert_lang($lang, $url=false){
        if($lang !=0 && $lang != 1 && $lang != 2){
            header("location: ".URL.$url);
        }
        Session::set('lang',$lang);
        $url = $_SERVER['REQUEST_URI'];
        $url = str_replace("myacm/index/insert_lang/".$lang."/","",$url);
        $url = ".".$url;
        $url = str_replace("./","",$url);
        header("location: ".URL.$url);
     }









    public function glyphicon(){
        $this->view->gly = $this->model->glyphicon();
        $this->view->render("index/glyphicon");
    }

}

