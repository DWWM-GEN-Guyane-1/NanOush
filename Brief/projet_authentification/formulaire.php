<html>
<head> 
  <meta charset="utf-8"> 
  <title> Inscription </title>
  <link rel = "stylesheet" href = "authencss.css"/> 
</head> 
<body> 

    <div align="center">

      <h1>Inscription</h1>

        <form method="POST" action="inscription.php" style="border:1px solid #ccc">
    <div class="container">

          <table> 
            <tr>
              <td>
                <label for="login"><b>Pseudo/Login</b></label>
              </td>
              <td>
                <input type="text" placeholder="Entrez votre pseudo" name="login" maxlength="10" id="login">
              </td>
            </tr>

            <tr>
              <td>
                <label for="password"><b>Mot de passe</b></label>
              </td>
              <td>
                <input type="text" placeholder="Entrez votre mot de passe" name="password" maxlength="20" id="password">
              </td>
            </tr>

            <tr>
              <td>
                <label for="nom"><b>Nom</b></label>
              </td>
              <td>
                <input type="text" placeholder="Entrez votre nom" name="nom" maxlength="20" id="nom">
              </td>
            </tr>

            <tr>
              <td>
                <label for="prenom"><b>Prenom</b></label>
              </td>
              <td>
                <input type="text" placeholder="Entrez votre prenom" name="prenom" maxlength="20" id="prenom">
              </td>
            </tr>

            <tr>
              <td>
                <label for="mail"><b>E-mail</b></label>
              </td>
              <td>
                <input type="text" placeholder="Entrez votre e-mail" name="mail" maxlength="40" id="mail">
              </td>
            </tr>

            <tr>
              <td>
                <label for="tel"><b>N° de Téléphone</b></label>
              </td>
              <td>
                <input type="text" placeholder="Entrez votre n° de téléphone" name="tel" maxlength="10" id="tel">
              </td>
            </tr>
          </table>

          <input type="submit" name="forminscription" value="Je m'inscris">
    </div>
        </form>

  </body>
</html>