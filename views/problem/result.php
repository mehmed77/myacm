<?php
/**
 * Created by PhpStorm.
 * User: Muhammad
 * Date: 18.09.2015
 * Time: 22:02
 */
    foreach ($this->result as $key => $value) {
        $val = $value['Source'];
    }
  $val = str_replace("<","&lt",$val);
  $val = str_replace(">","&gt",$val);
?>
<pre class="pre prettyprint lang-java linenums">
    <?php
       print $val;
    ?>
</pre>
