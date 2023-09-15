<?php

function getAllChannels() {

//show all channels
// Prepare and execute the SELECT query
$selectQuery = $database->prepare("SELECT * FROM channels");
$selectQuery->execute();

// Fetch the results
$results = $selectQuery->fetchAll(PDO::FETCH_ASSOC);

}

function getByIdChannel(int $id) {
// SQL query with a placeholder for createdBy
$allChannels = $database->prepare("SELECT users.pseudo, channels.name 
                                   FROM users 
                                   INNER JOIN participate ON users.userId = participate.userId 
                                   INNER JOIN channels ON participate.channelId = channels.channelId 
                                   WHERE createdBy = :createdBy");
}

function getByOneChannel(string $word) {
    // Prepare and execute the query
$channelQuery = $database->prepare("SELECT * FROM channels WHERE id = :channelID");
$channelID = 4; // Replace with the desired channel ID
$channelQuery->bindParam(':channelID', $channelID, PDO::PARAM_INT);
$channelQuery->execute();

// Fetch the results, assuming you want to retrieve the data
$result = $channelQuery->fetch(PDO::FETCH_ASSOC);

// Check if a row was found
if ($result) {
    // Process the data, for example:
    $channelName = $result['name'];
    $channelDescription = $result['description'];
    // ...
} else {
    // Handle the case where no row was found
}

    
}

function addChannel(string $name, string $description, string $picture) {
    // Prepare and execute the INSERT query
$insertQuery = $database->prepare("INSERT INTO channels (name, picture, description) VALUES (:name, :picture, :description)");
$insertQuery->bindParam(':name', $name, PDO::PARAM_STR);
$insertQuery->bindParam(':picture', $picture, PDO::PARAM_STR);
$insertQuery->bindParam(':description', $description, PDO::PARAM_STR);
$insertQuery->execute();

// Check the number of affected rows to see if the insert was successful
if ($insertQuery->rowCount() > 0) {
    echo "Insert successful!";
} else {
    echo "Insert failed.";
}


}

function updateChannel(int $id, string $name, string $description, string $picture) {

    // Prepare and execute the UPDATE query
$updateQuery = $database->prepare("UPDATE channels SET name = :name, picture = :picture, description = :description WHERE id = :channelID");
$updateQuery->bindParam(':name', $name, PDO::PARAM_STR);
$updateQuery->bindParam(':picture', $picture, PDO::PARAM_STR);
$updateQuery->bindParam(':description', $description, PDO::PARAM_STR);
$updateQuery->bindParam(':channelID', $id, PDO::PARAM_INT);
$updateQuery->execute();

// Check the number of affected rows to see if the update was successful
if ($updateQuery->rowCount() > 0) {
    echo "Update successful!";
} else {
    echo "No rows were updated.";
}


}

function deleteChannel(int $id) {

    // Prepare and execute the DELETE query
$deleteQuery = $database->prepare("DELETE FROM channels WHERE id = :channelID");
$deleteQuery->bindParam(':channelID', $id, PDO::PARAM_INT);
$deleteQuery->execute();

// Check the number of affected rows to see if the delete was successful
if ($deleteQuery->rowCount() > 0) {
    echo "Delete successful!";
} else {
    echo "No rows were deleted.";
}
}