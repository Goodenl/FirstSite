<?php
require_once "../../includes/config.php"; require_once "../../includes/db.php";
session_start();
// upload on server
$_FILES['path']['name'] = $_POST['cust_name'];

$file = "upload/".$_FILES['path']['name']. ".mp4";
//var_dump($_FILES);
move_uploaded_file("/pages/upload/uploaded_video/", $file);

	if(isset($_FILES['path']['name'])==true){
		
		echo "Загруженный первый файл: ".$_FILES['path']['name']. ".mp4" ."</br>";
		echo "Размер: ".$_FILES['path']['size']."байт"."</br>";
		echo "<a href = '/'> Exit </a>";
	}
	else{
		echo "Nope";
	}
// upload on db

$video = R::dispense('video');

$video->title = $_FILES['path']['name'];
$video->author = $_SESSION['logged_user'];
$video->video_category = strval($_POST['cat_video']);
$video->preview = strval($_POST['path_img']);

$id = R::store( $video );