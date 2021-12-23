<!DOCTYPE html>
<html>
<head>
  <script src="https://kit.fontawesome.com/47b3af4cc8.js" crossorigin="anonymous"></script>
  <style type="text/css">
  
footer {
  font-family: 'Roboto', sans-serif;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  justify-self: end;
}

#menu_footer {
  display: flex;
  flex-direction: row;
  justify-content: center;
  align-items: center;
  padding: 0;
  flex-wrap: wrap;
}

#menu_footer li {
  display: flex;
  flex-direction: row;
  justify-content: center;
  align-items: center;
  margin: 0 30px 0 30px;
  padding: 0;
  width: auto;
}

#menu_footer a {
  color: #dbdbdb;
  font-style: normal;
  text-decoration: none;
  cursor: pointer;
  font-size: 20px;
}

#social_icons {
  display: flex;
  flex-direction: row;
  justify-content: center;
}

.social_link {
  text-decoration: none;
  color: #D0875D;
  transition-duration: 0.2s;
}

#social_icons span {
  margin-left: 10px;
  margin-right: 10px;
  font-size: 2em;
}

#social_icons span:hover a {
  color: #E2B69C;
}

#copyright {
  margin-top: 10px;
  margin-bottom: 10px;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  color: #b5b5b5;
}

#copyright p {
  font-size: 14px;
  margin: 0;
  text-align: center;
}

#copyright span {
  font-size: 1.2em;
  color: #b5b5b5;
}

#copyright a {
  text-decoration: none;
}

@media screen and (max-width: 450px) {
  #menu_footer a {
    font-size: 16px;
  }
}

  </style>
</head>
<body>
<footer>
  <ul id="menu_footer">
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
  <div id="social_icons">
    <span>
      <a class="social_link" target="_blank" href="https://www.facebook.com/grosjeanines/"><i class="fab fa-facebook-f"></i></a>
    </span>
    <span>
      <a class="social_link" target="_blank" href="https://www.instagram.com/ins.grosjean/?hl=fr"><i class="fab fa-instagram"></i></a>
    </span>
    <span>
      <a class="social_link" target="_blank" href="https://www.linkedin.com/in/ines-grosjean"><i class="fab fa-linkedin-in"></i></a>
    </span>
    <span>
      <a class="social_link" href="mailto:ines.grosjean@icloud.com"><i class="fas fa-envelope"></i></a>
    </span>
  </div>
  <div id="copyright">
    <p>Webdesigner : Julien Ribiollet</p>
    <p>Ce site et son contenu sont sous license Creative Commons CC BY-NC-ND 4.0</p>
    <a href="https://creativecommons.org/licenses/by-nc-nd/4.0" target="_blank">
      <span>
        <i class="fab fa-creative-commons"></i>
      </span>
      <span>
        <i class="fab fa-creative-commons-by"></i>
      </span>
      <span>
        <i class="fab fa-creative-commons-nc-eu"></i>
      </span>
      <span>
        <i class="fab fa-creative-commons-nd"></i>
      </span>
    </a>
  </div>
</footer>
</body>
</html>