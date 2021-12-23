<!DOCTYPE html>
<!-- Webdesign : Julien Ribiollet (julienribiollet@orange.fr) -->
<html>
<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/infos.css">
	<title>CV / Infos</title>
</head>
<body>
	<?php include 'header.php'; ?>
	<div id="main">
		<h1>CV - Informations</h1>
		<iframe allowfullscreen src="https://drive.google.com/file/d/1FptHeWK7KL8IspvuShSdhFmgpa3fhMhI/preview" width="80%" height="100%" allow="autoplay">
			<p>Votre navigateur ne prend pas en charge ce type de fichier. Veuillez le télécharger directement.</p>
			<a href="res/pdf/cv.pdf" target="_blank">Télécharger</a>
		</iframe>
		<a id="download_link" target="_blank" href="res/pdf/cv.pdf">
			<img id="download_img" src="res/img/pdf_logo.png" alt="Télécharger">
		</a>
	</div>
	<?php include 'footer.php'; ?>
</body>
</html>