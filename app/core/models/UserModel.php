<?php
  require_once('./app/core/models/dbConnect.php');
  require_once('dbConnect.php');

function getAllUsers() {

}

function getByIdUser(int $id) {

}

function getByOneUser(string $pseudo) {
    require_once('./app/core/models/dbConnect.php');
    require_once('dbConnect.php');
    // var_dump($pdoConn);

    $query = "SELECT COUNT(*) FROM users WHERE pseudo='$pseudo'";

    $exec = $pdoConn->query($query);


    $result = $exec->fetch(PDO::FETCH_ASSOC);
    if($pdoConn){
        
        if($exec){
        }
        else{
            // header('Location: ../error.php')
            echo "Erreur";
        }
    }
    // var_dump($result);
    return $result;
    
}

function addUser(string $pseudo, string $password) {
    require_once('./app/core/models/dbConnect.php');
    require_once('dbConnect.php');

    $req = "INSERT INTO user (pseudo, passwd) VALUES ('$pseudo','$password')";

    var_dump($req);
    $exec = $pdoConn->query($req);

    return $exec;

}

function updateUser(int $id, string $pseudo, string $password, string $picture) {

}

function deleteUser(int $id) {

}