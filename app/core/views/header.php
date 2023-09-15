<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Projet de groupe sur discord">
    <link rel="stylesheet" href="./app/public/css/style.css">

    <title>
        <?= $pageTitle; ?>
    </title>
</head>

<body class="AcceuilPages">
    <header>
        <nav>
            <p>#général</p>
            <ul>
                <li><a href="./users/formLogin.php">Se Connecter</a></li>
                <li><a href="./users/formRegister.php">S'inscrire</a></li>
                <!-- Config si on se connecte -->
                <li><a href="#">Se Deconnecter</a></li>
                <li><a href="#">Votre Profil</a></li>
                <li><a href="./salon.php">Salon</a></li>
            </ul>
        </nav>
    </header>