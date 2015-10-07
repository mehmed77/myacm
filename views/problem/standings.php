<?php
/**
 * Created by PhpStorm.
 * User: Muhammad
 * Date: 13.09.2015
 * Time: 16:19
 */
?>

<table class="table table-bordered table-striped">
    <thead class="jumbotron">
        <tr>
            <th class="text-center col-lg-1">#</th>
            <th class="text-center col-lg-9">User</th>
            <th class="text-center col-lg-1 visible-lg visible-md visible-sm">Solved</th>
            <th class="text-center col-lg-1 visible-lg visible-md">Send</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $count = ($this->stan_page - 1) * 20;
            foreach($this->standings_list as $key => $value){
                $count++;
                print"
                 <tr>
                    <td class='text-center'>".$count."</td>
                    <td class='text-center'>".$value['fname']." ".$value['name']." { ".$value['login']." }</td>
                    <td class='text-center visible-lg visible-md visible-sm'>".$value['solved']."</td>
                    <td class='text-center visible-lg visible-md'>".$value['sent']."</td>
                 </tr>
                ";
            }
        ?>
    </tbody>
</table>
<?php
$page = $this->stan_page;
if($page % 5 == 0){
    $next = $page;
    $last = $page + 4;
}else{
    $next = (int)($page / 5)*5 + 1;
    $last = $next + 4;
}
if($this->stan_page > 1){
    $Previous = $this->stan_page-1;
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
                <a href="<?php print URL."problem/standings/$Previous"; ?>" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <?php
            for($i = $next; $i <= $last; $i++){
                if($this->stan_page == $i){
                    print "<li class=\"active\"><a href=".URL."problem/standings/".$i.">$i</a></li>";
                }else{
                    print "<li><a href=".URL."problem/standings/".$i.">$i</a></li>";
                }
            }
            ?>
            <li>
                <a href="<?php print URL."problem/standings/".($this->stan_page+1) ?>" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>
</div>
