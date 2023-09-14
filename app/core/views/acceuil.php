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
            <p>#général</p>
            <ul>
                <li><a href="#">Se Connecter</a></li>
                <li><a href="#">S'inscrire</a></li>
                <li><a href="#">Se Deconnecter</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="discordPicuture">
            <img src="../../../app/public/src/img/discord.svg" alt="Image du logo de discord dans le main">
        </div>
        <p class="welcomeDiscord">Bienvenue sur discord ! Ecrivez votre premier message</p>
        <form class="formMess" action="#" method="POST">
            <div class="champ">
                <textarea name="mess" id="formAcceuil" maxlength="255" placeholder="Envoyer un message"></textarea>
                <input class="chatPost" type="submit" value=">">
            </div>
        </form>
    </main>
    <footer>

    </footer>
</body>

</html>