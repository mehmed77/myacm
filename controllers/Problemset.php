<?php

/**
 * Created by PhpStorm.
 * User: Muhammad
 * Date: 12.09.2015
 * Time: 16:14
 */
class Problemset extends Controller{
    public $problem_one = false;

    function __construct(){
        Session::init();
        Session::set('navbar_active', "problemset");
        parent::__construct();
    }
    function index(){
        if(Session::get('loggedIn')){
            $this->view->accepted = $this->model->accepted(Session::get('login'));
        }
        Session::set('title',"Problemset");
        if($this->problem_one){
            $this->view->page = Session::get('task_problem');    // problems page;
            $this->view->problems_list = $this->model->problems_list($this->view->page);  // problem list
            Session::set('task_active_page','problem_one'); //problem_one page active;
        }else{
            Session::set('task_problem',1);
            $this->view->problems_list = $this->model->problems_list(1);  // problem list
            Session::set('task_active_page','problemset'); // if test active page null then active page
        }


        $this->view->st_page = 1; // status page;
        $this->view->stan_page = 1;// status page;


        $this->view->status_list = $this->model->status_list(1); // status list
        $this->view->standings_list = $this->model->standings_list(1); // status list

        $this->view->render("problem/index");
    }

    function is_problem($arg=false){
        if(!$this->model->is_problem($arg)){
           print "<span class='glyphicon glyphicon-remove'></span>";
        }else{
           print "<span class='glyphicon glyphicon-ok'></span>";
        }
    }

    // this page in problems
    function page($arg = false){
        if(!is_numeric($arg)){
            $this->error("Wrong it is not a number");
            return false;
        }else{
            if($arg < 1){
                $arg = 1;
            }
        }
        if(Session::get('loggedIn')){
            $this->view->accepted = $this->model->accepted(Session::get('login'));
        }
        Session::set('task_active_page','problemset'); // this is active page
        Session::set('task_problem',$arg);         // task problem set argument page

        $this->view->page = $arg;      // problem page
        $this->view->st_page = 1;      // status page
        $this->view->stan_page = 1;   // standings page;

        $this->view->problems_list = $this->model->problems_list($this->view->page);             // problems
        $this->view->status_list = $this->model->status_list(1); // status
        $this->view->standings_list = $this->model->standings_list(1); // standings

        if($this->view->problems_list == null){
            $this->error("Requested page is not exists");
            return false;
        }
        $this->view->render("problem/index");
    }
   // Problem one;
    function problem($arg=false){
        $this->view->problem_one = $this->model->problem_one($arg);
        if($this->view->problem_one == null){
            $this->error("Bunday Masala mavjud emas");
            exit(0);
        }
        $this->view->problem_id = $arg;
        $this->problem_one = true;
        $this->index();
        //$this->view->render("problem/problem");
    }

    function status($arg = false){
        if(!is_numeric($arg) && $arg != null){
            $this->error("Wrong it is not a number");
            return false;
        }else{
            if($arg < 1){
                $arg = 1;
            }
        }
        if(Session::get('loggedIn')){
            $this->view->accepted = $this->model->accepted(Session::get('login'));
        }
        Session::set('task_active_page','status'); // this is active page
        Session::set('task_status',$arg);   // status page set;

        $this->view->st_page = $arg;     // status page
        $this->view->page = 1;   // problem page
        $this->view->stan_page = 1;// standings page;

        $this->view->problems_list = $this->model->problems_list(1);   // problems
        $this->view->status_list = $this->model->status_list($arg); // status
        $this->view->standings_list = $this->model->standings_list(1); // standings

        if($this->view->status_list == null){
            $this->error("Requested page is not exists");
            return false;
        }
        $this->view->render("problem/index");
    }

    function standings($arg = false){
        if(!is_numeric($arg) && $arg != null){
            $this->error("Wrong it is not a number");
            return false;
        }else{
            if($arg < 1){
                $arg = 1;
            }
        }
        if(Session::get('loggedIn')){
            $this->view->accepted = $this->model->accepted(Session::get('login'));
        }
        Session::set('task_active_page','standings'); // this is active page
        Session::set('task_standings',$arg);   // status page set;

        $this->view->page = 1;   // problem page
        $this->view->st_page = 1;     // status page
        $this->view->stan_page = $arg;// standings page;

        $this->view->problems_list = $this->model->problems_list(1);   // problems
        $this->view->status_list = $this->model->status_list(1); // status
        $this->view->standings_list = $this->model->standings_list($arg); // standings

        if($this->view->standings_list == null){
            $this->error("Requested page is not exists");
            return false;
        }
        $this->view->render("problem/index");
    }

    // Taskning ichidagi statusning natijalarini ko'rish funksiyasi
    function task_for_result_in_status($id){
        $this->view->result = $this->model->task_for_result_in_status($id);
        if($this->view->result){
            $this->view->render1("problem/result");
            return false;
        }else{
            $this->view->form_open_code = $this->model->form_open_code($id);
            $this->view->render1("problem/opencode");
        }
    }


    function error($msg=false){
        require 'controllers/error.php';
        $error = new Error();
        $error->index($msg);
        return false;
    }
}