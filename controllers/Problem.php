<?php

/**
 * Created by PhpStorm.
 * User: Muhammad
 * Date: 12.09.2015
 * Time: 16:14
 */
class Problem extends Controller{
    function __construct(){
        Session::init();
        parent::__construct();

    }
    function index(){
        if(Session::get('loggedIn')){
            $this->view->accepted = $this->model->accepted(Session::get('login'));
        }
        Session::set('task_problem',1);
        Session::set('task_status',1);
        Session::set('task_standings',1);
        Session::set('task_active_page','problem'); // if test active page null then active page

        $this->view->page = 1;
        $this->view->st_page = 1; // status page;
        $this->view->stan_page = 1;// status page;

        $this->view->problems_list = $this->model->problems_list(1);  // problem list
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
        Session::set('task_active_page','problem'); // this is active page
        Session::set('task_problem',$arg);         // task problem set argument page

        if(Session::get('task_status') == null){
            Session::set('task_status',1);         // if task status page null then set argument
        }
        if(Session::get('task_standings') == null){
            Session::set('task_standings',1);      // if task standings page null then set argument
        }

        $this->view->page = $arg;   // problem page
        $this->view->st_page = Session::get('task_status');     // status page
        $this->view->stan_page = Session::get('task_standings');// standings page;

        $this->view->problems_list = $this->model->problems_list($this->view->page);             // problems
        $this->view->status_list = $this->model->status_list($this->view->st_page); // status
        $this->view->standings_list = $this->model->standings_list($this->view->stan_page); // standings

        if($this->view->problems_list == null){
            $this->error("Requested page is not exists");
            return false;
        }
        $this->view->render("problem/index");
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

        if(Session::get('task_problem') == null){
            Session::set('task_problem',1);      // if task standings page null then set argument
        }
        if(Session::get('task_standings') == null){
            Session::set('task_standings',1);      // if task standings page null then set argument
        }


        $this->view->page = Session::get('task_problem');   // problem page
        $this->view->st_page = $arg;     // status page
        $this->view->stan_page = Session::get('task_standings');// standings page;

        $this->view->problems_list = $this->model->problems_list($this->view->page);   // problems
        $this->view->status_list = $this->model->status_list($this->view->st_page); // status
        $this->view->standings_list = $this->model->standings_list($this->view->stan_page); // standings

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

        if(Session::get('task_problem') == null){
            Session::set('task_problem',1);      // if task standings page null then set argument
        }
        if(Session::get('task_status') == null){
            Session::set('task_standings',1);      // if task standings page null then set argument
        }


        $this->view->page = Session::get('task_problem');   // problem page
        $this->view->st_page = Session::get('task_status');     // status page
        $this->view->stan_page = $arg;// standings page;

        $this->view->problems_list = $this->model->problems_list($this->view->page);   // problems
        $this->view->status_list = $this->model->status_list($this->view->st_page); // status
        $this->view->standings_list = $this->model->standings_list($this->view->stan_page); // standings

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