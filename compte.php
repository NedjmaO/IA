<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
      <link href="compte.css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
      <script src='jquery-3.3.1.js'></script>
    </head>

    <body>
      <header>
          <ul class="menu">
              <li>Menu
                <ul class="sous-menu">
                  <li><a href="EXPLICATION_IA.php">Qu'est-ce que l'IA</a></li>
                  <li><a href="actualite.php">Actualité</a></li>
                  <li><a href="INSTITUTIONS.php">Les grandes institutions</a></li>
                </ul>
              </li>
          </ul>
          <p><a href="index.php">L'intelligence artificielle</a></p>
          <p><a href="compte.php">Compte</a></p>
      </header>

      <h1>Inscrivez-vous !</h1>

      <section class="formulaire">
        <div class="f">
          <p><input type="text" placeholder="Nom" id="nom"></p>
          <p><input type="text" placeholder="Prenom" id="prenom"></p>
          <p><input type="text" placeholder="Age" id="age"></p>
          <p><input type="text" placeholder="Adresse e-mail" id="mail"></p>
          <p><button>Je m'inscris !</button></p>
        </div>
      </section>

      <section class="contact">
        <form method="post" action="mail.php">
            <label>Un problème? Contactez-moi</label>
            <textarea rows="10" cols="30" name="message"></textarea>
            <input type="submit">
        </form>
      </section>

      <script src="compte.js"></script>
    </body>
</html>
