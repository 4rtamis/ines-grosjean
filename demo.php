<!DOCTYPE html>
<!-- Webdesign : Julien Ribiollet (julienribiollet@orange.fr) -->
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/demo.css">
	<title>Bande Démo</title>
</head>
<body>
	<?php include 'header.php'; ?>
	<div id="main">
	<!--
		<h1 style="color: white;">Bande Démo</h1>
		<p>Prochainement</p>
	-->
		<div id='wrap-player'>
    		<div class="video-container">
        		<div id="player"></div>
    		</div> 
		</div>
	</div>

	<?php include 'footer.php'; ?>

	<script type="text/javascript">
		var tag = document.createElement('script');

		tag.src = "https://www.youtube.com/iframe_api";
		var firstScriptTag = document.getElementsByTagName('script')[0];
		firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

		// 1. This function creates an <iframe> (and YouTube player)
		//    after the API code downloads.
		var player;
		function onYouTubeIframeAPIReady() {
			player = new YT.Player('player', {
				playerVars: {

					enablejsapi: 1,
					disablekb: 1,
					showinfo: 0,
					controls: 1,
					fs: 0,
					
				},
				height: '100%',
				width: '100%',
				videoId: 'dHuZ4rjnA6U',
				events: {
					'onReady': onPlayerReady,
				}
			});
		}

		// 2. The API will call this function when the video player is ready.
		function onPlayerReady(event) {
			event.target.playVideo();
		}

		function stopVideo() {
			player.stopVideo();
		}
	</script>
</body>
</html>