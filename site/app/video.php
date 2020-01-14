<?php
	ini_set("display_errors", 0);
	require_once "/opt/lampp/htdocs/includes/config.php";
	require_once "/opt/lampp/htdocs/includes/db.php";
	session_start();
	$video_title = array_values(R::getCol( 'SELECT `title` FROM `video`' ));
	$video_author = array_values(R::getCol( 'SELECT `author` FROM `video`' ));

	$startFrom = $_GET['startFrom'];
	if ($startFrom >= count($video_title)){
		die;
	}
	array_unshift($video_title, $bufer);
	array_unshift($video_author, $bufer);
?>
<div class="row">
	<div class="video">
		<div id="title"><a href=<?php $startFrom++; echo "pages/video-player.php?v=" . $video_title[$startFrom] . "&a=" . $video_author[$startFrom];?>><?php  echo $video_title[$startFrom]; ?></a></div>
		<div id=""></div>
		<div id=""></div>
		<div id="rating"><p></p></div>
	</div>
	<div class="video">
		<div id="title"><a href=<?php $startFrom++; echo "pages/video-player.php?v=" . $video_title[$startFrom] . "&a=" . $video_author[$startFrom]; ?>><?php  echo $video_title[$startFrom]; ?></a></div>
		<div id=""></div>
		<div id=""></div>
		<div id="rating"><p></p></div>
	</div>
	<div class="video">
		<div id="title"><a href=<?php $startFrom++; echo "pages/video-player.php?v=" . $video_title[$startFrom] . "&a=" . $video_author[$startFrom]; ?>><?php  echo $video_title[$startFrom]; ?></a></div>
		<div id=""></div>
		<div id=""></div>
		<div id="rating"><p></p></div>
	</div>
</div>
<div class="row">
	<div class="video">
		<div id="title"><a href=<?php $startFrom++; echo "pages/video-player.php?v=" . $video_title[$startFrom] . "&a=" . $video_author[$startFrom]; ?>><?php  echo $video_title[$startFrom]; ?></a></div>
		<div id=""></div>
		<div id=""></div>
		<div id="rating"><p></p></div>
	</div>
	<div class="video">
		<div id="title"><a href=<?php $startFrom++; echo "pages/video-player.php?v=" . $video_title[$startFrom] . "&a=" . $video_author[$startFrom]; ?>><?php  echo $video_title[$startFrom]; ?></a></div>
		<div id=""></div>
		<div id=""></div>
		<div id="rating"><p></p></div>
	</div>
	<div class="video">
		<div id="title"><a href=<?php $startFrom++; echo "pages/video-player.php?v=" . $video_title[$startFrom] . "&a=" . $video_author[$startFrom]; ?>><?php  echo $video_title[$startFrom]; ?></a></div>
		<div id=""></div>
		<div id=""></div>
		<div id="rating"><p></p></div>
	</div>
</div>
<div class="row">
	<div class="video">
		<div id="title"><a href=<?php $startFrom++; echo "pages/video-player.php?v=" . $video_title[$startFrom] . "&a=" . $video_author[$startFrom]; ?>><?php  echo $video_title[$startFrom]; ?></a></div>
		<div id=""></div>
		<div id=""></div>
		<div id="rating"><p></p></div>
	</div>
	<div class="video">
		<div id="title"><a href=<?php $startFrom++; echo "pages/video-player.php?v=" . $video_title[$startFrom] . "&a=" . $video_author[$startFrom]; ?>><?php  echo $video_title[$startFrom]; ?></a></div>
		<div id=""></div>
		<div id=""></div>
		<div id="rating"><p></p></div>
	</div>
	<div class="video">
		<div id="title"><a href=<?php $startFrom++; echo "pages/video-player.php?v=" . $video_title[$startFrom] . "&a=" . $video_author[$startFrom]; ?>><?php  echo $video_title[$startFrom]; ?></a></div>
		<div id=""></div>
		<div id=""></div>
		<div id="rating"><p></p></div>
	</div>
</div>