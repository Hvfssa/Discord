<?php
$pageContent = "Creez votre salon";
$pageTitle = "Formulaire creation de salon";
?>

<section class="body_form">
    <form class="form" method="POST" action="index.php?controller=channel&action=sendAddChannel" enctype="multipart/form-data">
        <h1>Creation de votre salon</h1>
        <span class="input-span">
            <label for="nom" class="label">Nom de votre serveur</label>
            <input type="text" name="nom"></span>
            <label for="desc">Description</label>
            <textarea name="description" id="desc" cols="30" rows="10"></textarea>
        <span class="input-span">
            <label for="image" class="label">Lien de votre image</label>
            <input type="file" name="image"></span>
        <input class="submit" type="submit" name="submit" value="Créer"></span>
        <a href="index.php?controller=main&action=homepage">Retour sur la page d'accueil</a>
    </form>
</section>