<?php
$pageContent = "Creez votre salon";
$pageTitle = "Formulaire creation de salon";
var_dump($channel);
?>

<section class="body_form">
    <form class="form" method="POST" action="index.php?controller=channel&action=sendUpdateChannel" enctype="multipart/form-data">
        <h1>Creation de votre salon</h1>
        <input type="hidden" name="id" value="<?= $channel['0']['channelId'] ?>">
        <span class="input-span">
            <label for="nom" class="label">Nom de votre serveur</label>
            <input type="text" name="nom" value="<?= $channel['0']['name'] ?>"></span>
            <label for="desc">Description</label>
            <textarea name="description" id="desc" cols="30" rows="10" value="<?= $channel['0']['description'] ?>"></textarea>
        <span class="input-span">
            <label for="image" class="label">Lien de votre image</label>
            <input type="image" src="<?= $channel['0']['picture'] ?>" alt="image de <?= $channel['0']['name'] ?>">
            <input type="file" name="image"></span>
        <input class="submit" type="submit" name="submit" value="Modifier"></span>
        <a href="index.php?controller=main&action=homepage">Retour sur la page d'accueil</a>
    </form>
</section>