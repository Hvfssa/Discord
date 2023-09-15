<?php


function showRegisterForm()
{
    // require("./app/core/views/formRegister.php");
    require("./app/core/views/formRegister.php");
}



function register(){

    require("./app/core/models/UserModel.php");

    //Requete inscription
$insert = $database->prepare("INSERT INTO users (pseudo, passwd, pfpic) VALUES (':pseudo', ':pwd', ':pp')");
$insert->bindParam(':pseudo', $tata, PDO::PARAM_STR);
$insert->bindParam(':pwd', $titi, PDO::PARAM_STR);
$insert->bindParam(':pp', $toto, PDO::PARAM_STR);
}


function showLoginForm()
{
    require("./app/core/views/formLogin.php");
}


function logIn()
{
    require("./app/core/models/UserModel.php");

}

function signOut()
{
    // destruction des sessions ou cookies
    // redirection page de connexion
}


function modify()
{
    require("./app/core/models/UserModel.php");

    // controlle données

    // modification BDD

    // redirection ou message erreur
    updateUser($id, $pseudo, $mdp, $pfpic);
}
