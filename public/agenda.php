<?php
  require_once '../app/config/system.php';
  require_once '../app/config/sidebar.php'
  require_once INCLUDES . '/default/header.php';
?>
<body>
  <section class ='mainContent'>
  <div class="container">

    <div class="weeks">

    </div>
    <div class="containerAgenda">

        <div class="RectangleCommentaire">
            <img class="Picture" src="" alt="">
            <h2 class="Name">Antoine Beaudoire</h2>
            <p class="Devoirs1">Pour demain , n'oubliez pas le devoir d'HTML sur les fonts-faces.</p>
            <img class="hearth" src="<?= DIR_ASSETS; ?>/img/coeur.svg" alt="">
        </div>

        <div class="RectangleCommentaire">
            <img class="Picture2" src="" alt="">
            <h2 class="Name">Raphael Cerveaux</h2>
            <p class="Devoirs2">Le 23/03 un crud en php doit être fait.</p>
            <img class="hearth" src="<?= DIR_ASSETS; ?>/img/coeur.svg" alt="">
        </div>



        <div class="RectangleCommentaire">
            <img class="Picture3" src="img/C.png" alt="">
            <h2 class="Name">Christophe Charlebois</h2>
            <p class="Devoirs3">La semaine prochaine un carrousel en JS est à présenter.</p>
            <img class="hearth" src="<?= DIR_ASSETS; ?>/img/coeur.svg" alt="">
        </div>
    </div>
  </section>
</body>

</body>
