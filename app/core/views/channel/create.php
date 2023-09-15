<?php
$pageContent = "Creez votre salon";
$pageTitle = "Formulaire creation de salon";
?>

<section class="body_form">
    <form class="form" method="POST" action="#">
        <!-- "#" A remplacer vers chemin du controller -->
        <h1>Creation de votre salon</h1>
        <span class="input-span">
            <label for="nom" class="label">Nom de votre serveur</label>
            <input type="text" name="nom"></span>
        <span class="input-span">
            <label for="image" class="label">Lien de votre image</label>
            <input type="file" name="image"></span>
        <!-- Voir pour afficher l'image si temps libre-->
        <input class="submit" type="submit" name="envoi" value="Créer"></span>
        <a href="../accueil.php">Retour sur la page d'accueil</a>
    </form>
</section>