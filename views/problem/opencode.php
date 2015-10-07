<?php
/**
 * Created by PhpStorm.
 * User: Muhammad
 * Date: 18.09.2015
 * Time: 22:45
 */


    foreach($this->form_open_code as $key => $val){
        $user         = $val['Login'];
        $send_time    = $val['Send_Time'];
        $Problem_ID   = $val['Problem_ID'];
        $problem_name = $val['problem_name'];
        $State        = $val['State'];
        $TestCase     = $val['TestCase'];
    }

?>

<div class="list-group">
    <a class="list-group-item">
        <div class="row">
            <span class="col-lg-5 text-left"><code>Login:</code> <?php print $user; ?></span>
            <span class="col-lg-7 text-left"><code>Send Time:</code> <?php print $send_time; ?></span>
        </div>
        <br/>
        <div class="row">
            <span class="col-lg-5 text-left"><code>Problem ID: </code> <?php print $Problem_ID; ?></span>
            <span class="col-lg-7 text-left"><code>Name: </code> <?php print $problem_name; ?></span>
        </div>
        <br/>
        <div class="row">
            <span class="col-lg-12 text-left"><code>Verdict: </code> <?php print state_case($State, $TestCase); ?></span>
        </div>
    </a>
</div>


<form action="onsubmit" method="POST">
    <textarea class="form-control" rows="10" name="discription">Iltimos Shu Codni ko'rishga ruhsat bersangiz
    </textarea>
    <br/>
    <button class="center-block btn btn-primary btn-sm" type="submit">Clink me</button>
</form>
