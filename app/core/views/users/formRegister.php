<?php
$pageContent = "Inscrivez-vous pour acceder à toutes nos fonctions";
$pageTitle = "Formulaire d'inscription";
require_once('./../header.php');
?>

<section class="body_form">
    <form class="form" method="POST" action="#">
        // "#" A remplacer vers chemin du controller
        <h1>Inscription</h1>
        <span class="input-span">
            <label for="pseudo" class="label">Pseudo</label>
            <input type="text" name="pseudo"></span>
        <label for="mdp" class="label">Mot de passe</label>
        <input type="password" name="mdp" id="password">
        </span>
        <input class="submit" type="submit" name="envoi" value="Inscription">
        <span class="span">Vous avez déjà un compte ?
            <a href="formLogin.php">Connectez-vous</a>
        </span>
        <a href="#">Retour sur la page d'accueil</a>
        //Remplacer "#" par chemin vers accueil
    </form>
</section>
<?php
require_once('../footer.php');
?>