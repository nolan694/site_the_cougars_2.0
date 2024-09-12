<?php
if (isset($_POST["btn_connexion"])){
    header( "Location: connexion.php");
}
?>
<html>
<head>
  <title>Inscription</title>
  <link rel="stylesheet" href="connexion.css" type="text/css">
</head>
<body>
  <div class="container">
    <div class="form">
      <h1>Inscription</h1>
      <form action="inscription.php" method="post">
        <input type="text" placeholder="Nom d'utilisateur" name="username" id = "username" required>
        <input type="password" placeholder="Mot de passe" name="password" id = "password"required>
        <button id ="btn_inscription"type="submit" name="btn_inscription">s'inscrire</button>
        <button id ="btn_connexion"type="submit" name="btn_connexion">vous avez un compte ?</button>
      </form>

    </div>
  </div>
</body>
</html>