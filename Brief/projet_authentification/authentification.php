<!DOCTYPE html> 
<html>
<head> 
  <meta charset="utf-8"> 
  <title>Authentification</title>
  <link rel = "stylesheet" href = "authencss.css"/> 
</head> 
<body> 


<form method="POST" action="connexion.php" style="border:1px solid #ccc">
  <div class="container">
    <h1>Connexion</h1>
    <hr>

    <label for="Mail"><b>Mail</b></label>
    <input type="text" placeholder="Mail" name="mailconnect" required>

    <label for="mdp"><b>Mot de passe</b></label>
    <input type="password" placeholder="Mot de passe" name="mdpconnect" require>


   <p>Pas encore inscrit? <a href="formulaire.php" style="color:dodgerblue">Cliquez ici pour vous inscrire</a>.</p>
    <div class="clearfix">
      <button type="submit" name="formconnexion">Se connecter</button>
    </div>
  </div>
</form>

</body>
</html>
