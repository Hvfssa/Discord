<?php
$pageContent = "Connectez-vous pour acceder à toutes nos fonctions";
$pageTitle = "Formulaire de connexion";

?>

<section class="body_form">
    <form class="form" method="POST" action="#">
        <!-- "#" A remplacer vers chemin du controller -->
        <h1>Connexion</h1>
        <span class="input-span">
            <label for="pseudo" class="label">Pseudo</label>
            <input type="text" name="pseudo" id="pseudo"></span>
        <span class="input-span">
            <label for="mdp" class="label">Mot de passe</label>
            <input type="password" name="mdp" id="password"></span>
        <input class="submit" type="submit" name="envoi" value="Connexion"></span>
        <span class="span">Vous n'avez pas de compte ? <a
                href="index.php?controller=user&action=showRegisterForm">Inscrivez vous</a></span>
        <span class="span">Mot de passe oublié ? <a href="updatePass.php">Modifier votre mot de passe</a></span>
        <a href="../accueil.php">Retour sur la page d'accueil</a>
    </form>
</section>