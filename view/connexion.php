<?php
if (isset($_POST["btn_inscription"])) {
    header( "Location: inscription.php");
  }
?>

<html>
<head>
  <title>Connexion</title>
  <link rel="stylesheet" href="connexion.css" type="text/css">
</head>
<body>
  <div class="container">
    <div class="form">
      <h1>Connexion</h1>
      <form action="connexion.php" method="post">
        <input type="text" placeholder="Nom d'utilisateur" name="username" id = "username" required>
        <input type="password" placeholder="Mot de passe" name="password" id = "password"required>
        <button id ="btn_connection"type="submit" name="btn_connection">Se connecter</button>
        <button id ="btn_inscription"type="submit" name="btn_inscription">Vous n'avez pas de compte ?</button>
      </form>
      
    </div>
  </div>
</body>
</html>