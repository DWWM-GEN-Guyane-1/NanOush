<?php

    try {

      $handle = @fopen("connection.txt", "r"); //read line one by one
        $buffer = fgets($handle, 4096); // Read a line.
        list($usernameServer, $passwordServer)=explode(",",$buffer);//Separate string by the means of ,
        //echo $usernameServer . ' , ' . $passwordServer;

            $servername = "localhost";
            $username = $usernameServer;
            $password = $passwordServer;

      $strConnection = 'mysql:host=localhost;dbname=test'; //Ligne 1 
      $arrExtraParam= array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"); //Ligne 2 
      $pdo = new PDO($strConnection, $username, $password, $arrExtraParam); //Ligne 3; Instancie la connexion 
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//Ligne 4

    } catch(PDOException $e) {

      $msg = 'ERREUR PDO dans ' . $e->getFile() . ' L.' . $e->getLine() . ' : ' . $e->getMessage(); die($msg);
    }

?>

