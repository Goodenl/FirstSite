<?php require_once '../includes/config.php'; include_once "../includes/db.php"; session_start();

$author_img = R::getAssoc('SELECT `login`, `user-img` FROM `users`');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php require_once '../app/preset/head.php' ?>

	<link rel="stylesheet" href="../public/css/video/video-page.css">
</head>
<body>
	
	<?php require_once '../app/left-main-menu.php'?>

	<video controls>

		<source src=<?php echo "../pages/upload/uploaded_video/". $_GET['v'] . ".mp4"; ?> type="video/mp4">
		<source src=<?php echo "../pages/upload/uploaded_video/". $_GET['v'] . ".webm"; ?> type="video/webm">
		Your browser does not support the video tag.
		
	</video>

	<div class="video-info">
		<comment>lorem</comment>
		<about>
			<p class="video-rating"></p>
			<a href="" class="video-author"><img src="<?php echo $author_img[$_GET['a']]; ?>" alt="" class="video-author"></a>
		</about>
	</div>

	<div class="video-proposed-list">
		<div class="video-proposed">
			<img src="" alt="">
			<p></p>
		</div>

		<div class="video-proposed">
			<img src="" alt="">
			<p></p>
		</div>

		<div class="video-proposed">
			<img src="" alt="">
			<p></p>
		</div>

		<div class="video-proposed">
			<img src="" alt="">
			<p></p>
		</div>

		<div class="video-proposed">
			<img src="" alt="">
			<p></p>
		</div>

		<div class="video-proposed">
			<img src="" alt="">
			<p></p>
		</div>

		<div class="video-proposed">
			<img src="" alt="">
			<p></p>
		</div>

		<div class="video-proposed">
			<img src="" alt="">
			<p></p>
		</div>
	</div>

</body>
</html>