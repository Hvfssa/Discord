<?php
function RedirectToURL($url, $waitmsg = 1)
{
    header("Refresh:$waitmsg; URL=$url");
    exit;
}

function Validator($array)
{

    //  protection XSS 
    foreach ($array as $element => $valeur) {
        $array[$element] = htmlspecialchars($valeur);
    }

    //  validations côté serveur

    //  initialisation de la variable qui va afficher les messages d'erreurs
    $msgError = [];
    if ($_FILES) {
        $tempPath = $_FILES["image"]["tmp_name"];
        if (exif_imagetype($tempPath) < 1 || exif_imagetype($tempPath) > 18) {
            $msgError[] = "Votre fichier n'est pas une image valide";
        }
    }
    return $msgError;
}
