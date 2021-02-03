<?php
if(session_status() === PHP_SESSION_NONE) {
  session_start();
}
include_once dirname(__DIR__) . DIRECTORY_SEPARATOR . './function/function_site.php';
include_once dirname(__DIR__) . DIRECTORY_SEPARATOR . './functions/auth.php';

  if(isset($_GET['accepte-cookie'])) {
    setcookie('accepte-cookie', 'true', time() + 365*24*3600);
    header('Location: ../public/index.php');
  }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Ismael Shepherd

Name       : Ismael Shepherd
Version    : 1.0

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?= $title ?? "Chauffagiste Auderghem | Hassan" ?></title>

<!--STYLE CSS, SCSS, SASS-->
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<script src="https://kit.fontawesome.com/6282f3433c.js" crossorigin="anonymous"></script>
<link href="../css/header" rel="stylesheet" type="text/css" media="all" />
<link href="../css/fonts.css" rel="stylesheet" type="text/css" media="all" />
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--STYLE CSS, SCSS, SASS-->

</head>
<body>
<div id="wrapper">
	<div id="header-wrapper">
		<div id="header" class="container-fluid">
			<div id="logo">
				<img src="../images/hassan-chpl.png" alt="">
			</div>
		</div>
		<div id="menu" class="container">
			<ul>
			<?= nav_menu('nav-link'); ?>
			</ul>
		</div>
	</div>

