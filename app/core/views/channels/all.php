<?php
$pageContent = "Choisissez un salon pour rejoindre vos amis";
$pageTitle = "Les salons";
?>

<h1 class="white">Salons disponibles</h1>
<aside>
    <a href="index.php?controller=channel&action=showAddFormChannel" class="links">Ajouter un salon</a>
    <!-- <a href="#">
        <div class="positionChannel">
            <img class="imgChannel" src="../../../public/src/img/favicon.png" alt="image du salon">
            <span>Nom du salon</span>
        </div>
    </a> -->
    <?php 
        if(count($channels) > 0): 
            foreach($channels as $channel): ?>
                    <div class="positionChannel">
                        <form action="index.php?controller=channel&action=showUpdateFormChannel" method="post">
                            <input type="hidden" name="id" value="<?= $channel["channelId"] ?>">
                            <button type="submit" name="submit"><i class="fa-solid fa-pen-to-square"></i></button>
                        </form>
                        <form action="index.php?controller=channel&action=sendDeleteChannel" method="post">
                            <input type="hidden" name="id" value="<?= $channel["channelId"] ?>">
                            <button type="submit" name="submit"><i class="fa-solid fa-xmark"></i></button>
                        </form>
                        <img class="imgChannel" src="<?= $channel["picture"] ?>" alt="image de <?= $channel['name'] ?>">
                        <a href=""><?= $channel['name'] ?></a>
                        <p><?= $channel["description"] ?></p>
                    </div>
            <?php endforeach; ?>
        <?php endif; ?>
</aside>
<main>
    <section>
    
    </section>
</main>