<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="accueil.css"/>
        <title>Hackcode</title>
       <div> 
        <p><?php echo $_SESSION['name']?></p>
        <p><?php echo $_SESSION['nickname']?></p>
        </div>

        <div><?php echo $challenges0[0]?></p> commencés, x finis</div>
        <div>mes challenges 
            <li>c1</li>
            <li>c2</li>
        </div>