<div id = "top-main-menu">
	
	
	<div class="profile-box">
		<a id="prfl-btn" href="#">Profile</a>
		<div class="dropMenu">

			<?php if( isset($_SESSION['logged_user']) ) : ?>
				<!-- Logined User -->
				<a href="/pages/profile.php">
					<div class="user-profile">
						<img id = "prfl-img" src ='/pic/icon/non-avatar.png'>
						<p id = "prfl-name"><?php echo $_SESSION['logged_user']['login'];?></p>
					</div>
				</a>
				<a href="/pages/logout.php">Выход</a>

			<?php else : ?>
				<!-- Non-Logined User -->
				<?php require 'login.php';?>
				<a href="/pages/signup.php">Регистрация</a>

			<?php endif; ?>

		</div>
	</div>
</div>