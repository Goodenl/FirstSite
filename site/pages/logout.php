<?php require_once '/opt/lampp/htdocs/includes/config.php';include_once "/opt/lampp/htdocs/includes/db.php";
	session_start();
	unset( $_SESSION['logged_user']);
	header('Location: /');
	R::close();