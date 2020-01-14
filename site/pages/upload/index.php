<?php require_once "../../app/preset/prehead.php";?>

<html>
<head>
	<title>Upload Video</title>
	<?php require_once '../../app/preset/head.php' ?>
	<link rel="stylesheet" type="text/css" href="../../public/css/upload/upload.css">
</head>

<body>
<?php require_once '../../app/left-main-menu.php'?>

<form name="form1" action="upload.php" enctype="multipart/form-data" method="post">

	<div id="left-side">
		<div id="select-image">
			<input id="path-img" type="file" name="path_img"/>
			<label id="label-path-img" for="path-img">Select image for video</label>
		</div>
		<input id="title-video" type="text" name="cust_name" placeholder="Выберите имя файлa"/></br>
		<input type="submit" name="button" /></br>
	</div>

	<div id="right-side">
		
			<?php
			$cat_name = R::getAssoc( 'SELECT `id`, `title` FROM `category`' );
			$count = count($cat_name);
			$count++;

			for ($i=1; $i < $count; $i++) {
					$title = strtolower($cat_name[$i]);
					echo "<input id=\"cat-select n".$i."\" type=\"radio\" name=\"cat_video\" value=\"".$i."\"/>";
					echo  "<label for=\"cat-select\">$title</label>";
				} echo "<br/>"?>
			<input id="path-select" type="file" name="path"/></br>
		</br>		
	</div>
</body>

</html>