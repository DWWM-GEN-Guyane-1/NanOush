<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style.css" rel="stylesheet">
    <title>BRIEF PHP</title>
</head>
<body>

 <h1 class="titre" align="center"> FORMULAIRE D'INSCRIPTION </h1>

 <?php

if (isset ($_REQUEST['OK'])){
    if($_REQUEST['OK']==2){
   
    echo "Nom".$_REQUEST['nom'];
    echo "<br>";
    echo "Prénom".$_REQUEST['prenom'];
    }
}
 else {
 }
?>
<table border="1"  align="center">
    <form method="post" action="index.php?f=formulaire" name="inscription" onSubmit="verif(inscription)" >
     
      <tr>
        <td class="comp"> Nom: </td>
        <td><input type="text" name="nom" size="25" maxlength="30" value="votre nom" onClick="effacer()" ></td>
      </tr>
      <tr>
        <td class="comp"> Prénom: </td>
        <td><input type="text" name="prenom" size="25" maxlength="40" value="" ></td>
      </tr>
      <tr>
        <td class="comp">Mot de passe: </td>
        <td><input type="password" name="pass" size="25" maxlength="40" value="" onBlur="test()" >
        </td>
      </tr>
      <!-- <tr>
        <td class="comp">Date de naissance: </td>
        <td><select name="jour">
            <option value="1">1
          <option value="2">2
          <option value="3">3
          <option value="4">4
          <option value="5">5
          <option value="6">6
          <option value="7">7
          <option value="8">8
          <option value="9">9
          <option value="10">10
          <option value="11">11
          <option value="12">12
          <option value="13">13
          <option value="14">14
          <option value="15">15
          <option value="16">16
          <option value="17">17
          <option value="18">18
          <option value="19">19
          <option value="20">20
          <option value="21">21
          <option value="22">22
          <option value="23">23
          <option value="24">24
          <option value="25">25
          <option value="26">26
          <option value="27">27
          <option value="28">28
          <option value="29">29
          <option value="30">30
          <option value="31">31 </option>
          </select>
          
          <select name="mois">
            <option value="janvier">Janvier 
            <option value="fevier">Février
            <option value="mars">Mars
            <option value="avril">Avril
            <option value="mai">Mai
            <option value="juin">Juin
            <option value="juillet">Juillet
            <option value="aout">Août
            <option value="semptembre">Semptembre
            <option value="octobre">Octobre
            <option value="novembre">Novembre
            <option value="decembre">Décembre </option>
          </select>
          /
          <select name="annee">
            <option value="1980">1980 
            <option value="1981">1981
            <option value="1983">1982
            <option value="1984">1985
            <option value="1986">1986
            <option value="1987">1987
            <option value="1988">1988
            <option value="1989">1989
            <option value="1990">1990
            <option value="1992">1991
            <option value="1992">1992
            <option value="1993">1993
            <option value="1994">1994
            <option value="1995">1995
             </option>
          </select>
        </td>
      </tr>

      <tr>
        <td class="comp"> Lieu de naissance: </td>
        <td><input type="text" name="lieu" size="25" maxlength="40" value="">
        </td>
      </tr>
      <tr>
        <td class="comp"> Sex: </td>
        <td><input type="radio" name="sex" value="feminin" >
          Masculin
          <input type="radio" name="sex" value="masculin" checked>
          Feminin </td>
      </tr>
     
    </form>
  </table> -->
  
<script type="text/javascript" src="script.js"></script>
</body>
</html>
