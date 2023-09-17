<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="X-UA-Compatible" content="IE=7">
    <meta name="description" content="Projet de groupe sur discord">
    <link rel="stylesheet" href="./app/public/css/style.css">
    <script src="https://kit.fontawesome.com/b94fcc4ff9.js" crossorigin="anonymous"></script>

    <title>
        <?= $pageTitle; ?>
    </title>
</head>

<body>
    <header>
        <nav>
            <p>#général</p>
            <ul>
                <li><a href="index.php?controller=user&action=showLoginForm">Se Connecter</a></li>
                <li><a href="index.php?controller=user&action=showRegisterForm">S'inscrire</a></li>
                <!-- Config si on se connecte -->
                <li><a href="index.php?controller=user&action=signOut">Se Deconnecter</a></li>
                <li><a href="index.php?controller=user&action=showProfil">Votre Profil</a></li>
                <li><a href="index.php?controller=channel&action=showAllChannels">Salons</a></li>
            </ul>
        </nav>
    </header>