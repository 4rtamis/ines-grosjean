<!DOCTYPE html>
<!-- Webdesign : Julien Ribiollet (julienribiollet@orange.fr) -->
<html>
<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  	<link type="text/css" rel="stylesheet" href="css/lightgallery.css" /> 
  	<link rel="stylesheet" type="text/css" href="css/gallery.css">
	<title>Galerie</title>
</head>
<body>
	<?php include 'header.php'; ?>

	<div id="content">
		<div id="button_container">
			<a id="book_button" href="http://inesgrosjean.book-folio.fr/" target="_blank">Voir mon Book</a>
		</div>

		<section id="main">

			<div id="lightgallery_1" class="gallery">
			  <a href="res/img/gallery/gp/gp_1_900.jpg" data-sub-html='<p>Crédit photo : Yoann Rivet</p>'>
			      <img alt="Miniature Galerie Inès Grosjean" class="portrait" src="res/img/gallery/gp/mini_gp_1.jpg" />
			      <div class="overlay"></div>
			  </a>
			  <a href="res/img/gallery/gp/gp_2_900.jpg" data-sub-html='<p>Crédit photo : Yoann Rivet</p>'>
			      <img alt="Miniature Galerie Inès Grosjean" class="portrait" src="res/img/gallery/gp/mini_gp_2.jpg" />
			      <div class="overlay"></div>
			  </a>
			  <a href="res/img/gallery/gp/gp_3_900.jpg" data-sub-html='<p>Crédit photo : François Berthier</p>'>
			      <img alt="Miniature Galerie Inès Grosjean" class="portrait" src="res/img/gallery/gp/mini_gp_3.jpg" />
			      <div class="overlay"></div>
			  </a>
			  <a href="res/img/gallery/gp/gp_5_900.jpg" data-sub-html='<p>Crédit photo : François Berthier</p>'>
			      <img alt="Miniature Galerie Inès Grosjean" class="portrait" src="res/img/gallery/gp/mini_gp_5.jpg" />
			      <div class="overlay"></div>
			  </a>
			  <a href="res/img/gallery/gp/gp_4_900.jpg" data-sub-html='<p>Crédit photo : François Berthier</p>'>
			      <img alt="Miniature Galerie Inès Grosjean" class="landscape" src="res/img/gallery/gp/mini_gp_4.jpg" />
			      <div class="overlay"></div>
			  </a>
			  <a href="res/img/gallery/gp/gp_6_900.jpg" data-sub-html='<p>Crédit photo : Vianne Burquier</p>'>
			      <img alt="Miniature Galerie Inès Grosjean" class="landscape" src="res/img/gallery/gp/mini_gp_6.jpg" />
			      <div class="overlay"></div>
			  </a>
			  <a href="res/img/gallery/gp/gp_7_900.jpg" data-sub-html='<p>Crédit photo : Vianne Burquier</p>'>
			      <img alt="Miniature Galerie Inès Grosjean" class="landscape" src="res/img/gallery/gp/mini_gp_7.jpg" />
			      <div class="overlay"></div>
			  </a>
			  <a href="res/img/gallery/gp/gp_8_900.jpg" data-sub-html='<p>Crédit photo : Yoann Rivet</p>'>
			      <img alt="Miniature Galerie Inès Grosjean" class="landscape" src="res/img/gallery/gp/mini_gp_8.jpg" />
			      <div class="overlay"></div>
			  </a>
			</div>

			<div id="lightgallery_2" class="gallery">
			  <a href="res/img/gallery/gf/gf_1_900.jpg" data-sub-html='<p>Crédit photo : Yoann Rivet</p>'>
			      <img alt="Miniature Galerie Inès Grosjean" src="res/img/gallery/gf/mini_gf_1.jpg" />
			      <div class="overlay"></div>
			  </a>
			  <a href="res/img/gallery/gf/gf_2_900.jpg" data-sub-html='<p>Crédit photo : Vianne Burquier</p>'>
			      <img alt="Miniature Galerie Inès Grosjean" src="res/img/gallery/gf/mini_gf_2.jpg" />
			      <div class="overlay"></div>
			  </a>
			  <a href="res/img/gallery/gf/gf_3_900.jpg" data-sub-html='<p>Crédit photo : François Berthier</p>'>
			      <img alt="Miniature Galerie Inès Grosjean" src="res/img/gallery/gf/mini_gf_3.jpg" />
			      <div class="overlay"></div>
			  </a>
			  <a href="res/img/gallery/gf/gf_4_900.jpg" data-sub-html='<p>Crédit photo : Yoann Rivet</p>'>
			      <img alt="Miniature Galerie Inès Grosjean" src="res/img/gallery/gf/mini_gf_4.jpg" />
			      <div class="overlay"></div>
			  </a>
			  <a href="res/img/gallery/gf/gf_5_900.jpg" data-sub-html='<p>Crédit photo : Yoann Rivet</p>'>
			      <img alt="Miniature Galerie Inès Grosjean" src="res/img/gallery/gf/mini_gf_5.jpg" />
			      <div class="overlay"></div>
			  </a>
			  <a href="res/img/gallery/gf/gf_6_900.jpg" data-sub-html='<p>Crédit photo : Vianne Burquier</p>'>
			      <img alt="Miniature Galerie Inès Grosjean" src="res/img/gallery/gf/mini_gf_6.jpg" />
			      <div class="overlay"></div>
			  </a>
			</div>

		</section>
	</div>

	<?php include 'footer.php'; ?>

	<script type="text/javascript" src="js/jquery-3.5.0.min.js"></script>
	<script src="js/lightgallery.min.js"></script>
	<!-- lightgallery plugins -->
    <script src="js/lg-thumbnail.min.js"></script>
    <script src="js/lg-fullscreen.min.js"></script>

	<script type="text/javascript">
    	lightGallery(document.getElementById('lightgallery_1'), {
    		mode: 'lg-slide',
    		cssEasing : 'cubic-bezier(0.25, 0, 0.25, 1)',
    		thumbnail : true,
    		fullscreen : true
		});

		lightGallery(document.getElementById('lightgallery_2'), {
    		mode: 'lg-slide',
    		cssEasing : 'cubic-bezier(0.25, 0, 0.25, 1)',
    		thumbnail : true,
    		thumbContHeight : 150,
    		fullscreen : true
		});
	</script>
</body>
</html>