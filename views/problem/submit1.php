<script>
    function myFunction(str){
        if(str == "java"){
            document.getElementById("demo").innerHTML = "Asosoiy class main bo'lishi kerak";
        }else{
            document.getElementById("demo").innerHTML = "";
        }
    }
</script>
<!-- Submit solution widget -->
<div style="margin-top: 15px;" class="col-lg-8 col-lg-offset-2">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title text-center" style="margin-top: 10px;">Submit Solution</h3>
        </div>
        <div class="panel-body">
            <form action="#" method="post">
                <div class="has-feedback" style="width: 180px;">
                    <input type="text" onchange="is_Problem(this.value)" class="form-control input-sm panel panel-primary" name="problem" placeholder="Problem ID"/>
                    <span class="form-control-feedback" id="isproblem"></span>
                </div>
                <div class="form-group">
                    <select name="language" class="form-control panel panel-primary h4" style="width: 180px;" onchange="myFunction(this.value)">
                        <option value="c++">GNU (c++)</option>
                        <option value="java">Java 1.7(JDK)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                        <option value="c">GNU (c)</option>
                        <option value="pascal">Pascal</option>
                        <option value="delphi">Delphi</option>
                    </select>
                </div>
                <span id="demo" style='color: red'></span>
                <div>
                    <textarea class="textarea" placeholder="Source code..." style="width: 100%; height: 300px; font-size: 14px; line-height: 18px; border: 1px solid #46b8da; border-radius: 5px 5px; padding: 10px;"></textarea>
                </div>
            </form>
        </div>
        <div class="panel-footer clearfix">
            <button class="center-block btn btn-primary">Submit <i class="glyphicon glyphicon-arrow-circle-right"></i></button>
        </div>
    </div>
</div>