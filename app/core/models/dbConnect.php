<?php

    // Informations permettant d'établir une connexion à la base de données intitulée mesLivres.
    $env = "localhost";
    $database = "discord";
    $dbUser = "root";
    $dbPwd = "";

    // Stockage de l'état de la connexion à la base de données dans la variable $pdoConn.
    $pdoConn = new PDO('mysql:host='.$env.';dbname='.$database.';charset=utf8',$dbUser,$dbPwd);
?>