<?php
$pageContent = "Connectez-vous pour acceder à toutes nos fonctions";
$pageTitle = "Formulaire de connexion";

?>

<section class="body_form">
    <form class="form" method="POST" action="index.php?controller=user&action=login">
        <h1>Connexion</h1>
        <span class="input-span">
            <label for="pseudo" class="label">Pseudo</label>
            <input type="text" name="pseudo" id="pseudo"></span>
        <span class="input-span">
            <label for="mdp" class="label">Mot de passe</label>
            <input type="password" name="mdp" id="password"></span>
        <input class="submit" type="submit" name="envoi" value="Connexion"></span>
        <span class="span">Vous n'avez pas de compte ? <a href="index.php?controller=user&action=showRegisterForm">Inscrivez vous</a></span>
        <span class="span">Mot de passe oublié ? <a href="index.php?controller=user&action=showPasswordRecoveryForm">Modifier votre mot de passe</a></span>
        <a href="index.php?controller=main&action=homepage">Retour sur la page d'accueil</a>
    </form>
</section>