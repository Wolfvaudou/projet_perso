<?php session_start();
?>
<!doctype html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title> <?= $title ?></title>
		<link rel="stylesheet" type="text/css" href="layout.css">
	</head>
	<body>
	<header>
  <nav>
    <ul>
        <li  class="nav"><a href="Home">Home</a></li>
<?php  if (isset($_SESSION['login'])){  ?><li  class="nav"><a href="Dashboard">Dashboard</a></li><?php }?>
        <li  class="nav"><a href="Index"> index of challenges</a></li>
		<li  class="nav"><a href="Contact"> Contact us</a></li>
		<?php  if (!isset($_SESSION['login'])){  ?><li  class="nav"><a href="Signup"> Sign up</a></li><?php }?>
		<?php  if (isset($_SESSION['login'])){  ?><li  class="nav"><a href="Unco">Déconnexion</a></li><?php }?>
    </ul>
  </nav>
 </header>
		<?= $content?>
	</body>
</html>