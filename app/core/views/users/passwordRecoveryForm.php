<?php
$pageContent = "Verification pseudo";
$pageTitle = "Verification pseudo";
?>

<section class="body_form">
    <form class="form" method="POST" action="#">
        <!-- "#" A remplacer vers chemin du controller -->
        <h1>Verification pseudo</h1>
        <span class="input-span">
            <label for="pseudo" class="label">Pseudo</label>
            <input type="text" name="pseudo" id="pseudo"></span>
        <span class="input-span">
            <input class="submit" type="submit" name="envoi" value="Verifier"></span>
        <a href="../accueil.php">Retour sur la page d'accueil</a>
    </form>
</section>