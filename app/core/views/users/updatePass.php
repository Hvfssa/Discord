<?php
$pageContent = "Modifiez votre mot de passe";
$pageTitle = "Formulaire de modification mot de passe";
?>

<section class="body_form">
    <form class="form" method="POST" action="#">
        <!-- "#" A remplacer vers chemin du controller -->
        <h1>Modification mot de passe</h1>
        <span class="input-span">
            <label for="newMdp" class="label">Votre nouveau mot de passe</label>
            <input type="password" name="newMdp" id="password">
            <label for="newMdpConfirm" class="label">Votre nouveau mot de passe</label>
            <input type="password" name="newMdpConfirm" id="password">
        </span>
        <input class="submit" type="submit" name="envoi" value="Modifier">
        <span class="span">Vous vous souvenez de votre mot de passe ?
            <a href="login.php">Connectez-vous</a>
        </span>
        <a href="../accueil.php">Retour sur la page d'accueil</a>
    </form>
</section>