<?php

function getAllMessages()
{
    require_once('dbConnect.php');

    if ($pdoConn) {
        $req = "SELECT * FROM messages";
        $exec = $pdoConn->query($req);

        if($exec){
            $messages = $exec->fetchAll(PDO::FETCH_ASSOC);
        }
    }

    return $messages;
}

function getByIdMessage(int $id)
{
    require_once('dbConnect.php');

    if ($pdoConn) {
        $req = "SELECT * FROM messages WHERE messageId=$id";
        $exec = $pdoConn->query($req);

        if ($exec) {
        }
    }
}

// function getByContentMessage(string $content){
// }

function addMessage(string $content, $dateTime, $userId ,$channelId)
{
    require_once('dbConnect.php');

    if ($pdoConn) {
        $req = "INSERT INTO messages (content, createdAt, channelId, userId) VALUES ('$content', '$dateTime', '$userId', '$channelId)";
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
            echo "L'execution à été effectué";
            header('Location: index.php?controller=message&action=all');
        }
    }
}
