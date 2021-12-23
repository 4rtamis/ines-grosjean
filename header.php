<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
nav {
	font-family: 'Roboto', sans-serif;
	padding-top: 12px;
	padding-bottom: 12px;
	display: flex;
	flex-direction: row;
	justify-content: space-around;
	align-items: center;
	margin: 0;
	height: auto;
	background-color: rgba(0, 0, 0, 0.7);
	border-bottom: solid 1px #636363;
}

#logo_section {
	display: flex;
	flex-direction: row;
	justify-content: center;
}

#logo_link {
	text-decoration: none;
}

#logo_container {
	margin-left: 10px;
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
}

#logo_container h2 {
	margin: 0;
	color: hsl(22, 55%, 75%);
	font-weight: bold;
	font-size: 1.5em;
}

#logo_container h3 {
	margin: 0;
	font-size: 1.17em;
	font-weight: bold;
	color: white;
}

#menu {
	display: flex;
	flex-direction: row;
	justify-content: center;
	align-items: center;
	width: auto;
}

#menu li {
	display: flex;
	flex-direction: row;
	justify-content: center;
	align-items: center;
	margin: 0 30px 0 30px;
	padding: 0;
	width: auto;
}

li a {
	color: white;
	font-style: normal;
	text-decoration: none;
	cursor: pointer;
	font-size: 20px;
	text-align: center;
	transition-duration: 0.3s;
}

li:hover a {
	color: rgb(200,200,200);
}


#open_icon {
	color: white;
	text-decoration: none;
	font-size: 30px;
	margin-right: 20px;
	z-index: 4;
	display: none;
	transition-duration: 0.4s;
}

#open_icon:hover {
	color: rgb(200,200,200);
}

@media screen and (max-width: 1020px) {
	nav {
		justify-content: space-around;
	}

	#logo_link {
		margin-left: 20px;
	}

	#menu {
		display: flex;
		flex-direction: column;
		position: fixed;
		top: 0;
		right: 0;
		background-color: rgba(0,0,0,0.9);
		z-index: 3;
		width: 0;
		height: 100%;
		margin: 0;
		padding: 0;
		transition: width 0.4s;
		overflow: hidden;
	}

	li a {
		font-size: 40px;
		margin: 10px 0 10px 0;
	}

	#open_icon {
		display: block;
	}
}

@media screen and (max-width: 400px) {
	#logo_container h2 {
		font-size: 1.2em;
	}

	#logo_container h3 {
		font-size: 1em;
	}

	#logo_header {
		width: 50px;
		height: 50px;
	}

	#logo_link {
		margin-left: 10px;
	}

	#open_icon {
		margin-right: 10px;
	}
}



</style>
</head>
<body>
  <nav>
  	<a id="logo_link" href="index.php">
      <div id="logo_section">
      	<img src="res/img/logo_256.png" width="60px" height="60px" id="logo_header">
      	<div id="logo_container">
          <h2>Inès Grosjean</h2>
          <h3>Comédienne, modèle</h3>
      	</div>
      </div>
	</a>
	<a href="javascript:void(0);" id="open_icon" onclick="openNav()">
    	<i id="open_tab_ico" class="fa fa-bars"></i>
  	</a>
    <ul id="menu">
      <li>
        <a href="index.php">Accueil</a>
      </li>
      <li>
        <a href="gallery.php">Galerie</a>
      </li>
      <li>
        <a href="demo.php">Bande Démo</a>
      </li>
      <li>
        <a href="infos.php">CV / Infos</a>
      </li>
      <li>
        <a href="contact.php">Contact</a>
      </li>
    </ul>
  </nav>

  <script type="text/javascript">
  	var isOpen = false;
  	function openNav() {
  		var menu = document.getElementById('menu');
  		if (isOpen) {
  			menu.style.width = "0%";
  			isOpen = false;
  			document.getElementById('open_tab_ico').className = 'fa fa-bars';
  		} else {
  			menu.style.width = "100%";
  			isOpen = true;
  			document.getElementById('open_tab_ico').className = 'fa fa-chevron-right';
  		}
  	}
  	//On redimensione à auto si passage de PC à mobile
  	window.addEventListener('resize', widthMenu);

  	function widthMenu() {
  		var menu = document.getElementById('menu');
  		if(window.matchMedia("(min-width:1021px)").matches) {
  			menu.style.width = "auto";
  		} else {
  			menu.style.width = "0";
  		}
  	}
  </script>
</body>
</html>