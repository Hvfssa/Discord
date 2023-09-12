<?php

function getAllMessages(){
    require_once('dbConnect.php');
    $req = "SELECT m.content, m.createdAt, m.updatedAt, u.pseudo ,u.pfpic FROM messages AS m INNER JOIN users AS u on m.userId = u.userId";
    $exec = $pdoConn->query($req)->fetchAll(PDO::FETCH_ASSOC);
    return $exec;
}

function getByIdMessage(int $id) {

}

function getByOneMessage(string $word) {

}

function addMessage(string $content) {
    require_once('dbConnect');

    // $ = 
    $req = "INSERT INTO messages (content, createdAt, updatedAt) VALUES ('$content','$','$')";
}

function updateMessage(int $id, string $content) {

}

function deleteMessage(int $id) {

}