<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
      <link href="compte.css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
      <script src='jquery-3.3.1.js'></script>
    </head>

    <body>
      <?php include('header.php'); ?>

      <h1>Inscrivez-vous !</h1>

      <section>
        <div>
          <p><input type="text" placeholder="Nom" id="nom"></p>
          <p><input type="text" placeholder="Prenom" id="prenom"></p>
          <p><input type="text" placeholder="Age" id="age"></p>
          <p><input type="text" placeholder="Adresse e-mail" id="mail"></p>
          <p><button>Je m'inscris !</button></p>
        </div>
      </section>

      <script src="compte.js"></script>
    </body>
</html>
