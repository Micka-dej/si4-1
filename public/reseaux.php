<?php
  require_once '../app/config/system.php';

  require_once INCLUDES . '/default/header.php';
?>

<section class="container">

  <?php require_once INCLUDES . '/default/sidebar.php'; ?>

  <div class="RectangleCommentaire">
    <img class="Picture" src="" alt="">
    <h2 class="Name">Antoine Beaudoire</h2>
    <p class="Commentaires1">J’ai appris de nouveaux tours de magie !</p>
    <img class="hearth" src="<?= DIR_ASSETS; ?>/img/coeur.svg" alt="">
  </div>

  <div class="RectangleCommentaire">
    <img class="Picture2" src="" alt="">
    <h2 class="Name">Raphael Cerveaux</h2>
    <p class="Commentaires2">J'aime le php.</p>
    <img class="hearth" src="<?= DIR_ASSETS; ?>/img/coeur.svg" alt="">
  </div>



  <div class="RectangleCommentaire">
    <img class="Picture3" src="img/C.png" alt="">
    <h2 class="Name">Christophe Charlebois</h2>
    <p class="Commentaires3">Le monstre.</p>
<img class="hearth" src="<?= DIR_ASSETS; ?>/img/coeur.svg" alt="">
  </div>
</section>

<?php
    require_once INCLUDES . '/default/footer.php';
?>