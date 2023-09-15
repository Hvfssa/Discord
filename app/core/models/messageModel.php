<?php

function getAllMessages()
{
    require_once('dbConnect.php');

   // Préparez la requête SELECT
$select = $database->prepare("SELECT * FROM messages");

// Exécutez la requête
if ($select->execute()) {
    // Récupérez toutes les lignes résultantes
    $messages = $select->fetchAll(PDO::FETCH_ASSOC);

    // Affichez les données (vous pouvez personnaliser cette étape selon vos besoins)
    foreach ($messages as $message) {
        echo "ID: " . $message['id'] . "<br>";
        echo "Contenu: " . $message['content'] . "<br>";
        echo "Créé à: " . $message['created_at'] . "<br>";
        echo "<br>";
    }
} else {
    echo "Erreur lors de l'exécution de la requête : " . $select->errorInfo()[2];
}

    return $messages;
}

function getByIdMessage(int $id)
{
    require_once('dbConnect.php');

   // Your SQL query with placeholders
$query = $database->prepare("SELECT messages.*, channels.name, channels.description, users.pseudo
FROM messages
INNER JOIN channels ON messages.channelId = channels.channelId
INNER JOIN participate ON channels.channelId = participate.channelId
INNER JOIN users ON participate.userId = users.userId
WHERE users.userId = :userID");

// Bind the user ID parameter
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


function addMessage(string $content)
{
    require_once('dbConnect.php');

   // Préparez la requête
$insert = $database->prepare("INSERT INTO messages (content, created_at) VALUES (:content, :created_at)");

// Liez les paramètres
$content = "Hello , how are you , I hope you are doing well";
$created_at = "2023-01-01";

$insert->bindParam(':content', $content, PDO::PARAM_STR);
$insert->bindParam(':created_at', $created_at, PDO::PARAM_STR);

// Exécutez la requête
if ($insert->execute()) {
    echo "Insertion réussie !";
} else {
    echo "Erreur lors de l'insertion : " . $insert->errorInfo()[2];
}
}

function deleteMessage(int $id)
{
    require_once('dbConnect.php');
// Préparez la requête DELETE
$delete = $database->prepare("DELETE FROM messages WHERE id = :id");

// Liez le paramètre
$delete->bindParam(':id', $idToDelete, PDO::PARAM_INT);

// Exécutez la requête
if ($delete->execute()) {
    echo "Suppression réussie !";
} else {
    echo "Erreur lors de la suppression : " . $delete->errorInfo()[2];
}
}