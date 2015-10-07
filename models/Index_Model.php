<?php

/**
 * Created by PhpStorm.
 * User: Muhammad
 * Date: 04.09.2015
 * Time: 21:34
 */
class Index_Model extends Model
{
   function __construct(){

//       print $this->lang;
       parent::__construct();
       Session::init();
       $this->lang = Session::get('lang');
   }
   public function news(){
       if($this->lang == 1){

           $sql = "select m.mav_name_en as mavzu from `mavzu` m";
       } elseif($this->lang == 2){
           $sql = "select m.mav_name_ru as mavzu from `mavzu` m";
       }else{
           $sql = "select m.mav_name_uz as mavzu from `mavzu` m";
       }
       $sth = $this->db->prepare($sql);
       $sth->execute();
       return $sth->fetchAll();
   }





    // glyphicon larni chop qilish;
    public function glyphicon(){
        $sth = $this->db->prepare("select * from glyphicon");
        $sth->execute();
        return $sth->fetchAll();
    }

}