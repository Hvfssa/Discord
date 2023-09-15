<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= $pageContent; ?>">
    <link rel="stylesheet" href="./app/public/css/sass/style.css">

    <title>
        <?= $pageTitle; ?>
    </title>
</head>

<body class="AcceuilPages">
    <header>
        <nav>
            <p>#général</p>
            <ul>
                <li><a href="index.php?controller=user&action=showLoginForm">Se Connecter</a></li>
                <li><a href="index.php?controller=user&action=showRegisterForm">S'inscrire</a></li>
                <!-- Config si on se connecte -->
                <li><a href="#">Se Deconnecter</a></li>
                <li><a href="#">Votre Profil</a></li>
                <li><a href="./salon.php">Salon</a></li>
            </ul>
        </nav>
    </header>