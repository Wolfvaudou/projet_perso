<?php
session_start();
$table=$_GET["table"];
$_SESSION["table"]=$table;
?>
<a href="Admin2?method=select">select</a>
<a href="Admin2?method=insert">insert</a>
<a href="Admin2?method=delete">delete</a>
<a href="Admin2?method=update">update</a>

