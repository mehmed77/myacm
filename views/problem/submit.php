<?php
/**
 * Created by PhpStorm.
 * User: Muhammad
 * Date: 13.09.2015
 * Time: 18:09
 */?>

<script>

</script>

<div class="panel panel-default">
    <div class="panel-heading text-center">
        Submit Soluction
    </div>
    <div class="panel-body">
        <form action="http://127.0.0.1/acm/send/send_insert" method="POST">
            <h3 class="panel panel-primary">
                &nbsp; <code class="text-warning">Problem:</code>&nbsp;&nbsp;&nbsp;&nbsp;
                <input onchange="is_Problem(this.value)" type="text" style="text-align: center" name="problem" size="10"  class="panel panel-primary h4">
                 <span id="isproblem"></span>
                <br/>
                &nbsp;<code class="text-warning">Language:</code>&nbsp;&nbsp;
                <select name="language" class="panel panel-primary h4" id="mySelect" onchange="myFunction()">
                    <option value="c++">GNU (c++)</option>
                    <option value="java">Java 1.7(JDK)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                    <option value="c">GNU (c)</option>
                    <option value="pascal">Pascal</option>
                    <option value="delphi">Delphi</option>
                </select>
                <code>
                    <i id="demo"></i>
                </code>
            </h3>
            <div class="text-center">

                <textarea placeholder="Source Code..." name="source"  style="width: 60%; height: 300px;"></textarea>

            </div>
            <button class="btn btn-primary center-block" type="submit" name="submit">
                Submit
            </button>
        </form>
    </div>
</div>