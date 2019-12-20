<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
   <title>...</title>
    </head>
    <body>
        <div id="container">
            <!-- zone de connexion -->
            
            <form action="verification.php" method="POST">
                <h1>INSCRIPTION</h1>
                
                <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>

                <label><b>Répéter votre mot de passe</b></label>
                <input type="password" placeholder="Répéter le mot de passe" name="password" required>

                <input type="submit" id='submit' value='LOGIN' >
                
            </form>
        </div>
        <?php

if (isset($_POST['submit']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    $repeatpassword=$_POST['password'];

    if ($username&&$password&&$repeatpassword)
    {


       if ($password==$repeatpassword) 
       {
           $connect=mysql_connect('localhost','root','Current-Root-Password') or die ('Error');

           mysql_select_db('phpaccueil');

           $query=mysql_query("INSERT INTO users VALUES('','$username','$password')");

           die("inscription terminé veuillez vous  <a href='accueil.php'>connecter</a>");



       }else echo "les mots de passe doivent être identiques";


    }else echo "veuillez saisir tous les champs";
}

?>
    </body>
</html>