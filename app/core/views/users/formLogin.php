<?php
$pageContent = "Connectez-vous pour acceder à toutes nos fonctions";
$pageTitle = "Formulaire de connexion";

?>
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
        <h1>Connexion</h1>
        <span class="input-span">
            <label for="pseudo" class="label">Pseudo</label>
            <input type="text" name="pseudo" id="pseudo"></span>
        <span class="input-span">
            <label for="mdp" class="label">Mot de passe</label>
            <input type="password" name="mdp" id="password"></span>
        <input class="submit" type="submit" name="envoi" value="Connexion"></span>
        <span class="span">Vous n'avez pas de compte ? <a href="formRegister.php">Inscrivez vous</a></span>
        <span class="span">Mot de passe oublié ? <a href="formUpdatePass.php">Modifier votre mot de passe</a></span>
        <a href="../accueil.php">Retour sur la page d'accueil</a>
    </form>
</section>
<?php
require_once('../footer.php');
?>