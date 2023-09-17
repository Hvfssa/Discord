<?php
$pageContent = "Choisissez un salon pour les rejoindre vos amis";
$pageTitle = "Les salons";
var_dump($results);
?>

<h1 class="white">Salons disponnibles</h1>
<section>

</section>
<aside>
    <form method="get" action="index.php?controller=channel&action=showAddFormChannel">
        <button type="submit">Ajouter</button>
    </form>
    <a href="#"><!-- Redirection vers le salon -->
        <div class="positionChannel">
            <img class="imgChannel" src="../../../public/src/img/favicon.png" alt="image du salon">
            <span>Nom du salon</span>
        </div>
    </a>
</aside>