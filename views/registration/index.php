<?php
/**
 * Created by PhpStorm.
 * User: Muhammad
 * Date: 19.09.2015
 * Time: 22:19
 */
?>
<ul id="innerMenu" class="nav nav-tabs visible-lg visible-md visible-sm">
    <li class="<?php if($active == "account-1") print "active";?>"><a href="#account-1" data-toggle="tab"><span class="glyphicon glyphicon-tasks"></span>&nbsp<?php print $archive[$lang];?></a></li>
    <li class="<?php if($active == "account-2") print "active";?>"><a href="#account-2" data-toggle="tab"><span class="glyphicon glyphicon-send"></span>&nbsp<?php print $submit[$lang];?></a></li>
    <li class="<?php if($active == "account-3") print "active";?>"><a href="#account-3" data-toggle="tab"><span class="glyphicon glyphicon-list-alt"></span>&nbsp<?php print $attempts[$lang];?></a></li>
</ul>

<ul id="innerMenu" class="nav nav-tabs visible-xs">
    <li class="<?php if($active == "account-1") print "active";?>"><a href="#account-1" data-toggle="tab"><span class="glyphicon glyphicon-tasks"></span>&nbsp</a></li>
    <li class="<?php if($active == "account-2") print "active";?>"><a href="#account-2" data-toggle="tab"><span class="glyphicon glyphicon-send"></span>&nbsp</a></li>
    <li class="<?php if($active == "account-3") print "active";?>"><a href="#account-3" data-toggle="tab"><span class="glyphicon glyphicon-list-alt"></span>&nbsp</a></li>
</ul>

