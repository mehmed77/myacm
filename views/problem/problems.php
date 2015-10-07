<?php
/**
 * Created by PhpStorm.
 * User: Muhammad
 * Date: 13.09.2015
 * Time: 0:07
 */
if($this->accepted){
    foreach($this->accepted as $key => $value){
        $solved    = $value[0];
        $unsolved = $value[1];
    }
}

?>
<script>
    function search_page(result){
        location.href = '<?php print URL."problem/page/"?>'+result;
    }
</script>

<table class="table table-bordered table-striped">
    <thead>
    <?php print"
            <tr class='jumbotron'>
                <th class='text-center col-lg-1 col-md-1 col-sm-2'>".$head[0]."</th>
                <th class='text-center col-lg-4'>".$head[1]."</th>
                <th class='text-center col-lg-4 visible-lg visible-md'>".$head[2]."</th>
                <th class='text-center col-lg-2 visible-lg visible-md visible-sm'>".$head[3]."</th>
                <th class='text-center col-lg-1 col-md-1 col-sm-2'>".$head[4]."</th>
                <th class='text-center col-lg-1 visible-lg'>".$head[5]."</th>
            </tr>";
    ?>
    </thead>
    <tbody>
    <?php foreach($this->problems_list as $key => $value) {
        $id = $value['p_id'];
        if(strstr($solved, $id)){
            $color = "bg-info";
        }elseif(strstr($unsolved, $id)){
            $color = "bg-danger";
        }else{
            $color = "";
        }
        print "
             <tr>
                <td class='text-center ".$color."'>".$value['p_id']."</td>
                <td>".$value['p_name']."</td>
                <td class='visible-lg visible-md'>".$value['mav_name']."</td>
                <td class='visible-lg visible-md visible-sm text-center'>".($value['time']/1000)." sec / ".($value['memory']/1000000)." MB</td>
                <td class='text-center ".$color."'><button class='btn btn-xs btn-primary'>&nbsp;&nbsp;&nbsp;&nbsp;<span class='glyphicon glyphicon-send'></span>&nbsp;&nbsp;&nbsp;&nbsp;</button></td>
                <td class='visible-lg text-center'>".(intval($value['accepted']))."</td>
            </tr>
           ";
    }
    ?>
    </tbody>
</table>
<?php
$page = $this->page;
if($page % 5 == 0){
    $next = $page;
    $last = $page + 4;
}else{
    $next = (int)($page / 5)*5 + 1;
    $last = $next + 4;
}
if($this->page > 1){
    $Previous = $this->page-1;
    $true = true;
}else{
    $Previous = 1;
    $true = false;
}
?>
<div align="center">
    <nav  style=" margin-top: -20px">
        <ul class="pagination form-inline" >
            <li>
                <a href="<?php print URL."problem/page/$Previous"; ?>" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <?php
            for($i = $next; $i <= $last; $i++){
                if($this->page == $i){
                    print "<li class=\"active\"><a style=\"border-radius: 2px;\" href='".URL."problem/page/".$i."'; ?>$i</a></li>";
                }else{
                    print "<li><a style=\"border-radius: 2px;\" href='".URL."problem/page/".$i."';>$i</a></li>";
                }
            }
            ?>
            <li>
                <a href="<?php print URL."problem/page/".($this->page+1) ?>" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
            <li style="text-align: right">
                &nbsp;
                <input  placeholder="search" type="text" style="border: 1px solid #8c8c8c; border-radius: 3px; height: 33px; width: 50px; text-align: center"
                        onchange="search_page(this.value)"/>
            </li>
        </ul>
    </nav>
</div>
