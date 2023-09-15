<?php

  require_once('dbConnect.php');

function getAllUsers() {

    // get All users
$query = $database->prepare("SELECT * FROM users");

// Execute the SQL query
$query->execute();

// Fetch the results
$results = $query->fetchAll(PDO::FETCH_ASSOC);

// You can loop through $results to process each row if needed
foreach ($results as $row) {
    // Access data in $row['column_name']
    // Process each retrieved row here
}

}

function getByIdUser(int $id) {

// query with a placeholder for userId
$query = $database->prepare("SELECT * FROM users WHERE userId = :userID");

// Bind the userId parameter
$query->bindParam(':userID', $userID, PDO::PARAM_INT); // Assuming userID is an integer

// Execute the SQL query
$query->execute();

// Fetch the results
$results = $query->fetchAll(PDO::FETCH_ASSOC);

// You can loop through $results to process each row if needed
foreach ($results as $row) {
    // Access data in $row['column_name']
    // Process each retrieved row here
}

}

function getByOneUser(string $pseudo) {

    require_once('dbConnect.php');
    $Users = $database->prepare("SELECT * FROM users WHERE pseudo = :pseudo");
$Users->binParam(':pseudo', PDO::PARAM_STR);


    
}

function addUser(string $pseudo, string $password) {

    require_once('dbConnect.php');

    $req = "INSERT INTO user (pseudo, passwd) VALUES ('$pseudo','$password')";

    var_dump($req);
    $exec = $pdoConn->query($req);

    return $exec;

}

function updateUser(int $id, string $pseudo, string $password, string $picture) {

    // update user (we can update the pseudo also )
$updateUser = $database->prepare("UPDATE users 
SET pseudo = :pseudo, passwd = :passwd, pfpic = :pfpic 
WHERE userId = :id");

// Bind parameters
$updateUser->bindParam(':id', $id, PDO::PARAM_INT); 
$updateUser->bindParam(':pseudo', $pseudo, PDO::PARAM_STR);
$updateUser->bindParam(':passwd', $password, PDO::PARAM_STR);
$updateUser->bindParam(':pfpic', $picture, PDO::PARAM_STR);

// Execute the SQL query
$updateUser->execute();

}

function deleteUser(int $id) {

    $users = $database->prepare('DELETE FROM users WHERE userId= :id');
$users->bindParam(':id', PDO::PARAM_INT);

}