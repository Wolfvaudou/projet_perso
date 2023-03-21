
<table border=1>
<tr>

<?php

foreach($results as $result){
    var_dump(get_object_vars($result));
foreach(get_object_vars($result) as $key => $value) {
    ?><td><?= $key ?></td>
     
<?php }
?></tr><tr> <?php
foreach(get_object_vars($result) as $key => $value) {
  ?><td><?= $value ?></td>
 <?php }
 ?>
 </tr><tr> <?php
}
?>
</table>
