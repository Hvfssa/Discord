<?php

function getAllMessages()
{
    require_once('dbConnect.php');

    if ($pdoConn) {
        $req = "SELECT m.content, m.createdAt, u.pseudo ,u.pfpic FROM messages AS m INNER JOIN users AS u on m.userId = u.userId";
        $exec = $pdoConn->query($req);

        if($exec){
            $results = $exec->fetchAll(PDO::FETCH_ASSOC);
        }
    }

    return $results;
}

function getByIdMessage(int $id)
{
    require_once('dbConnect.php');

    if ($pdoConn) {
        $req = "SELECT * FROM messages WHERE messageId=$id";
        $exec = $pdoConn->query($req);

        if ($exec) {
            echo "Votre message à été suprimmé avec succès";
        }
    }
}

// function getByContentMessage(string $content){
// }

function addMessage(string $content)
{
    require_once('dbConnect.php');

    if ($pdoConn) {
        $req = "INSERT INTO messages (content, createdAt, updatedAt) VALUES ('$content','$','$')";
        $exec = $pdoConne->query($req);

        if ($exec) {
        } else {
            echo "Une erreur est survenue, veuillez réessayer ultérieurement";
        }
    }
}

function deleteMessage(int $id)
{
    require_once('dbConnect.php');

    if ($pdoConn) {
        $req = "DELETE FROM messages WHERE messageId=$id";
        $exec = $pdoConn->query($req);

        if ($exec) {
            echo "Votre Message à bien était supprimer";
        }
    }
}
