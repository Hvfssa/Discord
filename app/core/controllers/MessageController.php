<?php 

function all()
{
    require_once('./app/core/models/MessageModel.php');
    $messages = getAllMessages();
    require_once('./app/core/views/message/all.php');
}

function delete()
{
    if ($_POST && $_POST["deleteID"]) {
        require_once('./app/core/models/MessageModel.php');
        deleteMessage($_POST["deleteID"]);
    }
};

function add()
{
    require_once('./app/core/models/MessageModel.php');
    // Stockage des données issues du formulaire sous forme de variables individuelles 
    $content = $_POST['formAcceuil'];
    $userId = $_POST['userId'];
    $channelId = $_POST['channelId'];
    $dateTime = $_POST['dateTime'];

    addMessage($content, $userId, $channelId, $dateTime);
}