<?php
/**
 * Created by PhpStorm.
 * User: Muhammad
 * Date: 18.09.2015
 * Time: 19:34
 */
?>

<script>
    avatar("avatar");
</script>

<form action="<?php print URL; ?>login/run" method="POST">
    <div class="list-group col-lg-4 col-md-4 col-sm-6 col-xs-10 col-lg-offset-4 col-md-offset-4 col-sm-offset-3 col-xs-offset-1" >
        <a class="list-group-item active text-center">
            Your Login and Password
        </a>
        <a class="list-group-item text-center">
            <p id="avatar"></p>
        </a>
        <a class="list-group-item">
            <div class="input-group">
                <label for="log-1" class="input-group-addon">
                         <i class="glyphicon glyphicon-user"></i>
                </label>
                <input id="log-1" onchange="avatar(this.value)" type="text" class="form-control" name="login" placeholder="Login">
            </div>
        </a>
        <a class="list-group-item">
            <div class="input-group">
                <label for="pas-1" class="input-group-addon">
                         <i class="glyphicon glyphicon-lock"></i>
                </label>
                <input id="pas-1" type="password" class="form-control" name="parol" placeholder="Password">
            </div>
        </a>
        <a class="list-group-item text-center">
            <button type="submit" class="btn btn-primary btn-lg-2">
                OK
            </button>
        </a>
        <p class="list-group-item text-center">
            <a href="<?php echo URL ?>registration">
                <span  class="glyphicon glyphicon-registration-mark" ></span> &nbsp;Register now
            </a>
        </p>
        <p class="list-group-item text-right">
            <a href="#" ><span  class="glyphicon glyphicon-question-sign" ></span> &nbsp; Forgot your password</a>
        </p>
    </div>

</form>
