<?php
$pageContent = "Inscrivez-vous pour acceder à toutes nos fonctions";
$pageTitle = "Formulaire d'inscription"; ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Projet de groupe sur discord">
    <link rel="stylesheet" href="../../../public/css/sass/style.css">

    <title>Discord</title>
</head>


<section class="body_form">
    <form class="form" method="POST" action="#">
        <!-- "#" A remplacer vers chemin du controller -->
        <h1>Inscription</h1>
        <span class="input-span">
            <label for="pseudo" class="label">Pseudo</label>
            <input type="text" name="pseudo"></span>
        <label for="mdp" class="label">Mot de passe</label>
        <input type="password" name="mdp" id="password">
        <label for="mdpVerify" class="label">Entrez de nouveau votre mot de passe</label>
        <input type="password" name="mdpVerify" id="password">
        </span>
        <input class="submit" type="submit" name="envoi" value="Inscription">
        <span class="span">Vous avez déjà un compte ?
            <a href="formLogin.php">Connectez-vous</a>
        </span>
        <a href="../accueil.php">Retour sur la page d'accueil</a>
    </form>
</section>
<?php
require_once('../footer.php');
?>