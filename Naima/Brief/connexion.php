<?php
 
   require 'function.php';


   if(isset($_POST['formconnexion'])) {
      $mailconnect = htmlspecialchars($_POST['mailconnect']);
      $mdpconnect = sha1($_POST['mdpconnect']);
         
         if(!empty($mailconnect) AND !empty($mdpconnect)) {
            $requser = $pdo->prepare("SELECT * FROM utilisateur WHERE mail = ? AND password = ?");  //vérifie que l'utilisateur existe
            $requser->execute(array($mailconnect, $mdpconnect));
            $userexist = $requser->rowCount();
?>

<html>
<head> 
    <meta charset="utf-8"> 
    <title> Informations </title>
    <link rel = "stylesheet" href = "authencss.css"/> 
</head> 
<body> 
   <div align="center">
      <div class="container">
<?php
            if($userexist == 1){  // si l'utilisateur existe, connexion OK, remontée des infos.
               $reponse = $requser->fetch();
               echo "<h2>Bienvenue, voici vos informations</h2> <hr>";
               while ($donnees = $reponse){
                  echo "</br> Login : ". "$donnees[login]";
                  echo "</br>Nom : ". "$donnees[nom]";
                  echo "</br>Prénom : ". "$donnees[prenom]";
                  echo "</br>Mail : ". "$donnees[mail]";
                  echo "</br>Téléphone : ". "$donnees[tel]";
                  break;
               }

            } else {
               $erreur = "Mauvais mail ou mot de passe !";
            }

         } else {
            $erreur = "Tous les champs doivent être complétés !";
         }
   }
?>


         </br></br>
         <button type="submit" name="inscrip"><a href="./index.php">Retour à l'accueil</a></button>
      </div>
   </div>
</body>
</html>
<?php
   if(isset($erreur)){
        echo '<font color = "red">' . $erreur . '</font>';
    }

?>
