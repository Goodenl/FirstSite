<?php require_once '../includes/config.php'; include_once "../includes/db.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<?php require_once 'preset/head.php' ?>
	<link rel="stylesheet" type="text/css" href="../public/css/profile/profile.css">
	<script src="../public/js/prfl-paralax.js"></script>
	<script src="../public/js/prfl-button.js"></script>
</head>

<body>

	
	<?php require_once '../app/left-main-menu.php'?>

	<div id="head-paralax">
		<div id="usr-img"><img src=<?php echo "/pic/prfl/non-avatar.svg"; ?> alt=""></div>
	</div>

	<a href = "#" class="usr-btn user-setting">Setting</a>

	<a class="upload-video-box" href ="../pages/upload/">
		<img src="/pic/icon/upload-video.svg" alt="Uploud your best video!">
		Загрузить видео!
	</a>

	<div id="foot-paralax">

		<div class="btn-box"><button class="usr-btn user-video">My video</button></div>
		<div class="btn-box"><button class="usr-btn like">Me Like This</button></div>
		<div class="btn-box"><button class="usr-btn history">History</button></div>

	</div>

	<div id="list">
		<div class="list-btn user-video-list"></div>
		<div class="list-btn like-list"></div>
		<div class="list-btn history-list"></div>
	</div>
</body>

</html>