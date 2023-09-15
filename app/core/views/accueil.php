<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Projet de groupe sur discord">
    <link rel="stylesheet" href="../../../app/public/css/sass/style.css">

    <title>Discord</title>
</head>

<body class="AcceuilPages">
    <header>
        <nav>
            <img src="../../public/src/img/favicon.png" alt="Logo de discord sur le header">
            <ul>
                <li><a href="./users/formLogin.php">Se Connecter</a></li>
                <li><a href="./users/formRegister.php">S'inscrire</a></li>
                <!-- Config si on se connecte -->
                <li><a href="#">Se Deconnecter</a></li>
                <li><a href="#">Votre Profil</a></li>
                <li><a href="./salon/createJoinSalon.php">Salon</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="discordPicuture">
            <img src="../../../app/public/src/img/discord.svg" alt="Image du logo de discord dans le main">
        </div>
        <p class="welcomeDiscord">Bienvenue sur discord ! Connectez vous pour accéder au <a href="./users/formLogin.php"> salon</a></p>
        <div class="paragInsc">
            <p class="welcomeDiscord">Vous n'avez pas de compte ? Vous pouvez vous inscrire <a href="./users/formRegister.php"> Maitnenant</a></p>
        </div>  
       
    </main>
    <footer>

    </footer>
</body>

</html>