<?php require_once "../../app/preset/prehead.php" ; ?>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<?php require_once "../../app/preset/head.php"; ?>

	<link rel="stylesheet" type="text/css" href="/public/css/main/top-main-menu.css">
	<link rel="stylesheet" type="text/css" href="/public/css/main/login-form.css">
	<link rel="stylesheet" type="text/css" href="/public/css/category/cat-list.css">

	<script src="/public/js/login-menu.js"></script>
</head>
<body>
	
	<?php
	if(isset($_SESSION)){
		$result = $_SESSION['logged_user']['id'];
	}else{
		constant($result = "#");
	}
	require '../../app/left-main-menu.php';
	require '../../app/top-main-menu.php';
	?>

<div id="row">

	<?php
		$cat_name = R::getAssoc( 'SELECT `id`, `title` FROM `category`' );
		$count = count($cat_name);
		$count++;

		for ($i=1; $i < $count; $i++) {

				echo '
					<div class = "catbox n'. $i .'">
						<img class= "cat-img n'. $i .'"; src="" alt="" >
					
					';

				$title = strtolower($cat_name[$i]);

				echo '<button id="cat-btn" action= cat-list/' . $title . '.php' . '>' . $cat_name[$i] . '</button></div>';
		};

	?>

</div>

</body>
</html>