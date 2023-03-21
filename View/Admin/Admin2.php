<?php

$_SESSION["method"]=$_GET["method"];
if ($_SESSION["method"]=="select")
{?>
    <form method="POST" action="select">             
    <p class="select">
        <p>Selectionner les éléments de <?php echo $_SESSION["table"]?> où</p>
        <?php foreach($columns as $column)
        { ?>
            <label for="<?= $column->Field ?>"><?= $column->Field ?></label>
            <input type="<?= $column->Type ?>" id="<?= $column->Field ?>" name="<?= $column->Field ?>">

        
   <?php } 
   ?>

            <input type='submit' value="Envoyer">
        </form>
<?php
};


if ($_SESSION["method"]=="insert")
{?>
    <form method="POST" action="insert">             
    <p class="insert into">
        <?php foreach($columns as $column)
        { ?>
            <label for="<?= $column->Field ?>"><?= $column->Field ?></label>
            <input type="<?= $column->Type ?>" id="<?= $column->Field ?>" name="<?= $column->Field ?>e">

        
   <?php } 
   ?>

            <input type='submit' value="Envoyer">
        </form>
<?php
};