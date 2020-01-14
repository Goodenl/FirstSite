<?php require_once 'includes/config.php'; include_once "includes/db.php";session_start();?>
<!DOCTYPE html>
<html lang="ru">

<head>
	<?php require_once 'preset/head.php' ?>
	<link rel="stylesheet" type="text/css" href="public/css/main/top-main-menu.css">
	<link rel="stylesheet" type="text/css" href="public/css/main/login-form.css">
	<link rel="stylesheet" type="text/css" href="public/css/video/video.css">

	<script type="text/javascript" src="public/js/login-menu.js"></script>
	<script type="text/javascript" src="public/js/scroll.js"></script>
</head>

<body>

	<?php require_once 'app/left-main-menu.php'?>

	<?php require_once 'app/top-main-menu.php'?>

	<div id="main-video"><?php require 'app/video.php';?></div>
	
</body>

</html>