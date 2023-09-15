<?php

require_once './app/core/models/ChannelModel.php';
require "vendor/wixel/gump/gump.class.php";

function showAllChannels() {
    require_once './app/core/views/channels/all.php';
}
function showAddFormChannel() {
    require_once './app/core/views/channels/add.php';
    
}
function sendAddChannel() {
    if($_POST && $_POST["submit"]) {

        


        $verif = new GUMP('fr');

        $verif->set_field_names([
            'name' => $_POST['nom'],
            'description' => $_POST['description'],
            'picture' => $_POST['image'],
        ]);

        $verif->validation_rules([
            'name' => 'required|alpha_numeric|max_len,50',
            'description' => 'alpha_numeric|max_len,255',
            'picture' => 'extension,png;jpg;gif|max_len,255',
        ]);

        $verif->set_error_messages([
            'name' => [
                'required' => 'le nom ne peut pas être vide',
                'alpha_numeric' => 'le nom ne peut contenir que des lettres et des chiffres',
                'max_len' => 'le nom ne doit pas dépasser 50 caractères',
            ],
            'description' => [
                'alpha_numeric' => 'le nom ne peut contenir que des lettres et des chiffres',
                'max_len' => 'le nom ne doit pas dépasser 255 caractères',
            ],
            'picture' => [
                'extension' => 'Les extensions acceptées son : .png, .jpg et .gif',
                'max_len' => 'le chemin de l\'image ne doit pas dépasser 255 caractères',
            ]
            ]);

            $verif->filter_rules([
                'name' => 'trim|htmlencode|sanitize_string',
                'description' => 'trim|htmlencode|sanitize_string',
                // voir si le sanitize_string pose pas problème ?
                'picture' => 'trim|htmlencode|sanitize_string',
            ]);

            $is_valid = $verif->run($_POST);
            
            if ($is_valid === true) {
                $name = $_POST['nom'];
                $desc = $_POST['description'];
                $pic = $_POST['image'];
                addChannel($name, $desc, $pic);
                header('Location: ./app/core/views/channels/all.php');
            } else {
                echo $verif->get_readable_errors(); // ['Field <span class="gump-field">Somefield</span> is required.']
            }

    } else {
        header('Location: ./app/core/views/main/error.php');
    }


    
}
function showUpdateFormChannel() {
    require_once './app/core/views/channels/update.php';
    
}
function sendUpdateChannel() {
    header('Location: ./app/core/views/channels/all.php');
    
}
function sendDeleteChannel() {
    header('Location: ./app/core/views/channels/all.php');
    
}
function searchChannel() {

}