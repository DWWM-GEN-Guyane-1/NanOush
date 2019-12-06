<?php

    require 'function.php';

 // partie du formulaire
    
    if(isset($_POST['forminscription'])){
        //création de variable en récupérant les variables du formulaire.
        $login = htmlspecialchars($_POST['login']);   // htmlspecialchars sécurise les injonctions dans la barre d'adresse
        $password = sha1($_POST['password']);        //système de hashage pour le mdp
        $nom = htmlspecialchars($_POST['nom']); 
        $mail = htmlspecialchars($_POST['mail']); 
        $prenom = htmlspecialchars($_POST['prenom']); 
        $tel = htmlspecialchars($_POST['tel']); 

    	if(!empty($_POST['login']) AND !empty($_POST['password']) AND !empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['mail']) AND !empty($_POST['tel'])){
    		if(filter_var($mail, FILTER_VALIDATE_EMAIL)){  // vérifie que c'est bien une adresse mail qui a été rentré.
    			$reqmail = $pdo->prepare("SELECT * FROM utilisateur WHERE mail = ?");  // vérifie si le mail existe déjà
            	$reqmail->execute(array($mail));
            	$mailexist = $reqmail->rowCount(); // compte si des informations existent avec ce mail
            	if($mailexist == 0){
            		$insertuser = $pdo->prepare("INSERT INTO utilisateur(nom, prenom, mail, tel, login, password) VALUES(?, ?, ?, ?, ?, ?)");  // requête de préparation pour la bdd
                    $insertuser->execute(array($nom, $prenom, $mail, $tel, $login, $password));   // exécute la requête 
            	} else {
            		$erreur = "Adresse mail déjà utilisée !";
            	} 
            } else {
            	$erreur = "Votre adresse mail n'est pas valide !";
            }
    	} else {
    		$erreur = "Tous les champs doivent être remplis!";	
    	}
    } else {
        $erreur = "Merci d'utiliser la page de formulaire!";
    }
?> 

<html>
<head> 
    <meta charset="utf-8"> 
    <title> Inscription </title>
    <link rel = "stylesheet" href = "authencss.css"/> 
</head> 
<body> 
    <div align="center">
       <div class="container">

<?php

    if(isset($erreur)){
        echo '</br><font color = "red">' . $erreur . '</font></br>';

    } else {

    echo "<h2>Enregistrement en cours </h2><hr>";                    
        echo "</br> Votre compte a bien été créé ! </br></br>";
        echo "Bienvenue " . $nom . " " . $prenom; 
        echo "</br> Adresse du compte : " . $mail; 

        //requete affichage
        $sth = $pdo->prepare("SELECT * FROM utilisateur");
        $sth->execute();
        echo "</br></br>Nous avons actuellement " . $sth->rowCount() . " utilisateurs inscrits </br>";
    }
?>
</br>
            <button type="submit" name="inscrip"><a href="./index.php">Retour à l'accueil</a></button>
            <button type="submit" name="connect"><a href="./authentification.php">Me connecter</a></button>
        </div>
   </div>
</body>
</html>
