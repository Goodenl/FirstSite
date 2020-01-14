
<html lang="en">

<head>
	<?php require_once 'preset/head.php'?>
	<link rel="stylesheet" href="../public/css/profile/guest.css"> <!-- a guest profile -->
	<script src="../public/js/guest-login-menu.js"></script>
</head>

<body>
	<?php require '../app/left-main-menu.php'?>

	<div id="preview"></div>

	<div id="login-box" >
		<div class="login-form login-popup">
		<?php require_once '../app/login.php';?>
		</div>
	</div>
	
</body>

</html>