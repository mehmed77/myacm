<?php
/**
 * Created by PhpStorm.
 * User: Muhammad
 * Date: 13.09.2015
 * Time: 10:19
 */
?>

<!-- Modal HTML  Begin -->
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Confirmation</h4>
            </div>
            <div class="modal-body">
                <div id="task_for_result_id"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span></button>
            </div>
        </div>
    </div>
</div>
<!-- Modal HTML  End -->


<table class="table table-bordered table-striped">
    <thead>
    <?php print"
            <tr class='jumbotron'>
                <th class='text-center col-lg-1'> &nbsp;#</th>
                <th class='text-center col-lg-2 visible-lg'><span class='glyphicon glyphicon-time'></span> &nbsp;When</th>
                <th class='text-center col-lg-3'><span class='glyphicon glyphicon-user'></span> &nbsp;Who</th>
                <th class='text-center col-lg-3'><span class='glyphicon glyphicon-tasks'></span> &nbsp;Problem</th>
                <th class='text-center col-lg-1 visible-lg visible-md'><span class='glyphicon glyphicon-saved'></span>&nbsp;Lang</th>
                <th class='text-center col-lg-2 visible-lg visible-md visible-sm'><span class='glyphicon glyphicon-ok'></span> &nbsp;Verdict</th>
            </tr>";
    ?>
    </thead>
    <tbody>
        <?php
            foreach($this->status_list as $key => $value){
                print "
                    <tr>
                        <td class='text-center'><a href=\"#myModal\" onclick=\"task_status_result(".$value['uid'].")\" data-toggle=\"modal\">".$value['uid']."</a></td>
                        <td class='text-center visible-lg'>".$value['send_time']."</td>
                        <td class='text-center'><a href='".URL."profile/user/".$value['login']."'>".$value['login']."</a></td>
                        <td class='text-center'><a href='".URL."problemset/problem/".$value['problem_id']."'>".$value['problem_name']."</a></td>
                        <td class='text-center visible-lg visible-md'>".$value['lang_id']."</td>
                        <td class='text-center visible-lg visible-md visible-sm'>".state_case($value['state'], $value['testcase'])."</td>
                    </tr>
                ";
            }
        ?>
    </tbody>
</table>
<?php
$page = $this->st_page;
if($page % 5 == 0){
    $next = $page;
    $last = $page + 4;
}else{
    $next = (int)($page / 5)*5 + 1;
    $last = $next + 4;
}
if($this->st_page > 1){
    $Previous = $this->st_page-1;
    $true = true;
}else{
    $Previous = 1;
    $true = false;
}
?>
<div align="center">
    <nav style="margin-top: -20px;">
        <ul class="pagination">
            <li>
                <a href="<?php print URL."problemset/status/$Previous"; ?>" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <?php
            for($i = $next; $i <= $last; $i++){
                if($this->st_page == $i){
                    print "<li class=\"active\"><a href=".URL."problemset/status/".$i.">$i</a></li>";
                }else{
                    print "<li><a href=".URL."problemset/status/".$i.">$i</a></li>";
                }
            }
            ?>
            <li>
                <a href="<?php print URL."problemset/status/".($this->st_page+1) ?>" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>
</div>
