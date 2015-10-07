<?php
/**
 * Created by PhpStorm.
 * User: Muhammad
 * Date: 12.09.2015
 * Time: 0:31
 */

?>
<table class="table table-bordered">
    <thead>
          <tr>
              <th  class="text-center">Best</th>
              <th  class="text-center">Best</th>
              <th  class="text-center">Best</th>
              <th  class="text-center">Best</th>
          </tr>
    </thead>
    <tbody>
         <tr>
             <?php
             $cnt = 0;
                 foreach($this->gly as $key => $value){
                     $cnt++;
                     $gly = $value['glyphicon'];
                     print "<td class='text-center bg-info'><span class='$gly'></span><br>$gly</td>";
                     if($cnt == 4){
                         $cnt = 0;
                         print "</tr>";
                     }
                 }

             ?>
         </tr>
    </tbody>
</table>
