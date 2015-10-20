<?php
/**
 * Created by PhpStorm.
 * User: Muhammad
 * Date: 12.09.2015
 * Time: 16:17
 */


Session::init();
$lang = Session::get('lang');
$active = Session::get('task_active_page');

//print_r($this->problem_one);

if($lang == null) $lang = 0;
  $head = mb_split('_',$problem_list_head[$lang],-1);
?>

<ul id="innerMenu" class="nav nav-tabs visible-lg visible-md visible-sm">
    <li class="<?php if($active == "problemset") print "active";?>"><a href="#problem" data-toggle="tab"><span class="glyphicon glyphicon-tasks"></span>&nbsp<?php print $archive[$lang];?></a></li>
    <li class="<?php if($active == "problem_one") print "active"; else print "hidden"; ?>"><a href="#problem_one" data-toggle="tab"><span class="glyphicon glyphicon-check"></span>&nbsp<?php print $this->problem_id; ?></a></li>
    <li class="<?php if($active == "submit") print "active";?>"><a href="#submit" data-toggle="tab"><span class="glyphicon glyphicon-send"></span>&nbsp<?php print $submit[$lang];?></a></li>
    <li class="<?php if($active == "status") print "active";?>"><a href="#status" data-toggle="tab"><span class="glyphicon glyphicon-hourglass"></span>&nbsp<?php print $status[$lang];?></a></li>
    <li class="<?php if($active == "standings") print "active";?>"><a href="#standings" data-toggle="tab"><span class="glyphicon glyphicon-flag"></span>&nbsp<?php print $standings[$lang];?></a></li>
    <li class="<?php if($active == "attempts") print "active";?>"><a href="#attempts" data-toggle="tab"><span class="glyphicon glyphicon-list-alt"></span>&nbsp<?php print $attempts[$lang];?></a></li>


</ul>

<ul id="innerMenu" class="nav nav-tabs visible-xs">
    <li class="<?php if($active == "problemset") print "active";?>"><a href="#problem" data-toggle="tab"><span class="glyphicon glyphicon-tasks"></span>&nbsp;</a></li>
    <li class="<?php if($active == "problem_one") print "active"; else print "hidden"; ?>"><a href="#problem_one" data-toggle="tab"><span class="glyphicon glyphicon-check"></span>&nbsp;</a></li>
    <li class="<?php if($active == "submit") print "active";?>"><a href="#submit" data-toggle="tab"><span class="glyphicon glyphicon-send"></span>&nbsp;</a></li>
    <li class="<?php if($active == "status") print "active";?>"><a href="#status" data-toggle="tab"><span class="glyphicon glyphicon-hourglass"></span>&nbsp;</a></li>
    <li class="<?php if($active == "standings") print "active";?>"><a href="#standings" data-toggle="tab"><span class="glyphicon glyphicon-flag"></span>&nbsp;</a></li>
    <li class="<?php if($active == "attempts") print "active";?>"><a href="#attempts" data-toggle="tab"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;</a></li>
</ul>

<div id="innerContent" class="tab-content">
    <div class="tab-pane fade <?php if($active == "problemset") print "in active";?>" id="problem">
        <?php include "problems.php"; ?>
    </div>
    <div class="tab-pane fade <?php if($active == "problem_one") print "in active";?>" id="problem_one">
        <?php include "problem.php"; ?>
    </div>
    <div class="tab-pane fade <?php if($active == "submit") print "in active";?>" id="submit">
        <?php include "submit1.php"; ?>
    </div>
    <div class="tab-pane fade <?php if($active == "status") print "in active";?>" id="status">
        <?php include "status.php"; ?>
    </div>
    <div class="tab-pane fade <?php if($active == "standings") print "in active";?>" id="standings">
        <?php include "standings.php"; ?>
    </div>
    <div class="tab-pane fade <?php if($active == "attempts") print "in active";?>" id="attempts">
        My attempts!!! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, eaque quisquam? Adipisci aliquam aperiam dignissimos earum esse, explicabo ipsam laboriosam magnam mollitia nihil, nulla perspiciatis praesentium repellendus saepe sunt temporibus velit? Autem dignissimos dolore expedita fugiat, illum impedit iste laboriosam non porro possimus quos saepe sapiente tenetur. A assumenda blanditiis cupiditate distinctio doloremque earum et maiores natus, nesciunt nostrum quis quo repellendus ut. Ab aperiam consectetur dignissimos dolore iusto laborum laudantium minus molestias nam nulla odio, odit officia quae quam ratione repellendus voluptates. Ad amet cumque, enim impedit nesciunt odio officiis possimus quos rem repellendus sed temporibus ut velit voluptate.
    </div>
</div>



