<?php

function getAllUsers()
{
}

function getByIdUser(int $id)
{
}

function getByOneUser($pseudo)
{
    require('./app/core/models/dbConnect.php');

    if ($pdoConn) {

        $query = $pdoConn->prepare("SELECT * FROM users WHERE pseudo=:pseudo");
        $query->bindParam(':pseudo', $pseudo, PDO::PARAM_STR);
        $exec = $query->execute();
        // var_dump($exec);
        if ($exec) {
            // var_dump($query);

            $result = $query->fetch(PDO::FETCH_ASSOC);
        } else {
            // header('Location: ../error.php')
            echo "Erreur";
        }
    }
    return $result;
}

function addUser($pseudo, $password)
{
    require('./app/core/models/dbConnect.php');

    $insert = $pdoConn->prepare("INSERT INTO users (pseudo, passwd) VALUES (:pseudo, :pwd)");
    $insert->bindParam(':pseudo', $pseudo, PDO::PARAM_STR);
    $insert->bindParam(':pwd', $password, PDO::PARAM_STR);
    // $insert->bindParam(':pp', $toto, PDO::PARAM_STR);

    $exec = $insert->execute();

    return $exec;
}

function updateUser(int $id, string $pseudo, string $password, string $picture)
{
}

function deleteUser(int $id)
{
}
