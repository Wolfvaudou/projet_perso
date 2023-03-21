
<?php
session_start();
$_SESSION["table"]=$tables;
foreach($tables as $table)
{ ?>
   <h3><a href="Admin1?table=<?= $table->Tables_in_hackcode?>"> <?= $table->Tables_in_hackcode?></a></h3>

<?php
}
?>

