<?php require_once('./header.php'); ?>

<section class="salonPage">
    <p class="messageSalon">Veuillez saisir un message dans #general</p>
    <form class="formMess" action="#" method="POST">
        <div class="champ">
            <textarea name="mess" id="formAcceuil" maxlength="255" placeholder="Envoyer un message"></textarea>
            <input class="chatPost" type="submit" value=">">
        </div>
    </form>
</section>