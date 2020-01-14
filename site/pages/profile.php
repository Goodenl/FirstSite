<?php session_start(); require_once '../app/preset/prehead.php';

	if( isset($_SESSION['logged_user']) )
	{
		require "../app/profile.php";
	}else{

		require "../app/guest.php";
	}

?>