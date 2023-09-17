<?php


function getAllChannels() {
    require './app/core/models/dbConnect.php';
    if($pdoConn){
        try {
            $query = 'SELECT * FROM channels';
            $results = $pdoConn->query($query)->fetchAll(PDO::FETCH_ASSOC);
            return $results;
        } catch (PDOException $e) {
            return $e;
        }
    } else {
        header('Location: ./app/core/views/main/error.php');
    }
}

function getByIdChannel(int $id) {
    require './app/core/models/dbConnect.php';
    if($pdoConn) {
        try {
            $query = 'SELECT * FROM channels WHERE channelId = :id';
            $prepare = $pdoConn->prepare($query);
            $prepare->bindParam(':id', $id, PDO::PARAM_INT);
            $prepare->execute();
            $result = $prepare->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (PDOException $e) {
            return $e;
        }
    } else {
        header('Location: index.php?controller=main&action=error');
    }
}

function getByOneChannel(string $word) {
    require_once('./app/core/models/dbConnect.php');
    require_once('dbConnect.php');

    if($pdoConn) {
        try {
            $query = 'SELECT * FROM channels WHERE name LIKE :search';
            $prepare = $pdoConn->prepare($query);
            $search = "%".$word."%";
            $prepare->bindParam(':search', $search, PDO::PARAM_STR);
            $results = $prepare->execute();
            return $results;
        } catch (PDOException $e) {
            return $e;
        }
    } else {
        header('Location: ./app/core/views/main/error.php');
    } 
}

function addChannel(string $name, string $description, string $picture) {
    require './app/core/models/dbConnect.php';
    if($pdoConn) {
        try {
            $query = 'INSERT INTO channels (name, description, picture) VALUES (:name, :desc, :pic)';
            $prepare = $pdoConn->prepare($query);
            $prepare->bindParam(':name', $name, PDO::PARAM_STR);
            $prepare->bindParam(':desc', $description, PDO::PARAM_STR);
            $prepare->bindParam(':pic', $picture, PDO::PARAM_STR);
            $results = $prepare->execute();
            return $results;       
        } catch (PDOException $e) {
            return $e;
        }
    } else {
        header('Location: ./app/core/views/main/error.php');
    }
}

function updateChannel(int $id, string $name, string $description, string $picture) {
    require_once('./app/core/models/dbConnect.php');
    require_once('dbConnect.php');
    if($pdoConn) {
        try {
            $query = 'UPDATE channels SET name = :name, description = :desc, picture = :pic WHERE channelId = :id';
            $prepare = $pdoConn->prepare($query);
            $prepare->bindParam(':id', $id, PDO::PARAM_INT);
            $prepare->bindParam(':name', $name, PDO::PARAM_STR);
            $prepare->bindParam(':desc', $description, PDO::PARAM_STR);
            $prepare->bindParam(':pic', $picture, PDO::PARAM_STR);
            $results = $prepare->execute();
            return $results;
        } catch (PDOException $e) {
            return $e;
        }
    } else {
        header('Location: ./app/core/views/main/error.php');
    }
}

function deleteChannel(int $id) {
    require './app/core/models/dbConnect.php';
    if($pdoConn) {
        try {
            $query = 'DELETE FROM channels WHERE channelId = :id';
            $prepare = $pdoConn->prepare($query);
            $prepare->bindParam(':id', $id, PDO::PARAM_INT);
            $results = $prepare->execute();
            return $results;
        } catch (PDOException) {
            return $e;
        }
    } else {
        echo "error in model";
        // header('Location: ./app/core/views/main/error.php');
    }
}