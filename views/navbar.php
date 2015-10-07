<?php
   Session::init();
   $this->lang = Session::get('lang');
   $title = Session::get('title');
   $active = Session::get('navbar_active');
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
    <script src="<?php print URL?>public/js/jquery.min.js" type="text/javascript"></script>
    <script src="<?php print URL?>public/js/bootstrap.js" type="text/javascript"></script>
    <script src="<?php print URL?>public/js/myjquery.js" type="text/javascript"></script>
    <link type="text/css" rel="stylesheet" href="<?php print URL?>public/stylesheet/bootstrap/css/bootstrap-theme.min.css" >
    <link type="text/css" media="screen" rel="stylesheet" href="<?php print URL?>public/stylesheet/bootstrap/css/bootstrap.css" >
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <link rel="shortcut icon" href="<?php print URL;?>public/img/favicon.png" type="image/png">
    <title><?php print $title; ?> - Coder</title>
</head>
<body>

    <?php
      $URL =  $_SERVER['REQUEST_URI'];
      $url = str_replace("/myacm/","",$URL);
    ?>
     <div class="text-right">

         <a href="<?php print URL; ?>index/insert_lang/0/<?php print $url  ?>"><img src="<?php print URL?>public/img/uzb.png" height="20px" width="20px">O'ZB</a>&nbsp;
         <a href="<?php print URL; ?>index/insert_lang/1/<?php print $url; ?>"><img src="<?php print URL?>public/img/us.png" height="20px" width="20px"> ENG</a>&nbsp;
         <a href="<?php print URL; ?>index/insert_lang/2/<?php print $url; ?>"><img src="<?php print URL?>public/img/rus.png" height="20px" width="20px"> РУС</a>&nbsp;
    </div>
<?php require('language.php');
$lang_opt=$this->lang;
?>
<nav class="navbar navbar-inverse navbar-static-top" style="background: url('<?php print URL?>public/img/menu.jpg');">
<div class="container-fluid">
    <div class="navbar-header">
        <a class="navbar-brand" href="/" style="COLOR: #ffffff"><img alt=<?php echo $language[$lang_opt];?> height="15px" src="images/logo.png"></a>
        <button class="navbar-toggle" type="button" data-target="#menu1" data-toggle="collapse" >
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    <div class="collapse navbar-collapse"   id="menu1">
        <ul class="nav navbar-nav">
            <li class="<?php if($active == "index") print "active" ?>"><a style="COLOR: #ffffff" href="<?php print URL ?>index/news"><i class="glyphicon glyphicon-home"></i> <?php echo $home[$lang_opt]; ?></php></a></li>
            <li class="<?php if($active == "problemset") print "active" ?>"><a style="COLOR: #ffffff" href="<?php print URL ?>problemset"><span class="glyphicon glyphicon-tasks"></span> <?php echo $archive[$lang_opt]; ?></a></li>
            <li class=""><a href="<?php print URL ?>index/contest" style="COLOR: #ffffff"><span class="glyphicon glyphicon glyphicon-globe"></span> <?php echo $contest[$lang_opt]; ?></a></li>
            <li class=""><a href="<?php print URL ?>index/gym" style="COLOR: #ffffff"><span class="glyphicon glyphicon-blackboard"></span> <?php echo $training[$lang_opt]; ?></a></li>
            <li class=""><a href="<?php print URL ?>index/rayting" style="COLOR: #ffffff"><span class="glyphicon glyphicon-stats"></span> <?php echo $raiting[$lang_opt]; ?></a></li>
            <li class=""><a href="<?php print URL ?>index/form" style="COLOR: #ffffff"><span class="glyphicon glyphicon-bullhorn"></span> <?php echo $forum[$lang_opt]; ?></a></li>
            <li class=""><a href="<?php print URL ?>index/help" style="COLOR: #ffffff"><span class="glyphicon glyphicon-question-sign"></span> <?php echo $help[$lang_opt]; ?></a></li>
        </ul>
        <?php
            if(Session::get('loggedIn')){
                $login=Session::get('login');
        ?>
        <ul class="nav navbar-nav navbar-right" >
            <li><a style="COLOR: #ffffff" href="/reg"><span class="glyphicon glyphicon-user"></span> <?php echo $login; ?></a></li>
            <li><a style="COLOR: #ffffff" href="<?php print URL."login/logOut/".$url;?>"><span class="glyphicon glyphicon-log-out"></span> <?php echo $logOutText[$lang_opt]; ?></a> </li>
        </ul>
        <?php }else{
        ?>
        <ul class="nav navbar-nav navbar-right" >
             <li class="<?php if($active == "reg") print "active" ?>"><a style="COLOR: #ffffff" href="<?php print URL;?>registration"><span class="glyphicon glyphicon-user"></span> <?php echo $signUpText[$lang_opt]; ?></a></li>
             <li class="<?php if($active == "login") print "active" ?>"><a style="COLOR: #ffffff" href="<?php print URL;?>login/"><span class="glyphicon glyphicon-log-in"></span> <?php echo $logInText[$lang_opt]; ?></a> </li>
        </ul>
        <?php
        }?>
    </div>
</div>
</nav>
<div class="col-xs-12">