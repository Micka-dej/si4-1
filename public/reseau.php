<?php
  require_once '../app/config/system.php';

  $page = 'reseau';
  $title = 'Reseau';

  require_once INCLUDES . '/default/auth.php';

  require_once INCLUDES . '/default/header.php';

  require_once DIR_MODELS . '/default/reseau.php';
?>

<?php
if (!empty($_SESSION['advert'])) {
    echo '<p class="msg '.$_SESSION['advert']['type'].'" style="margin:auto;">'.$_SESSION['advert']['message'].'</p>';
    $_SESSION['advert'] = [];
}
?>

<section class="container">

  <?php require_once INCLUDES . '/default/sidebar.php'; ?>

    <div class="container-content">

    <?php
        foreach ($messages as $message) {
            echo '<div class="RectangleCommentaire" style="padding:30px;">';
            echo '<img src="'.DIR_ASSETS.'/img/avatar.png" width="64" style="float:left;margin-right:10px;" alt="">';
            echo '<h2 class="Name">Par '.$message['user'].' le '.date('d/m/y à H:m', strtotime($message['date'])).'</h2>';
            echo '<p class="Commentaires1">'.htmlentities($message['content']).'</p>';
            echo '<a href="#"><img class="hearth" src="<?= DIR_ASSETS; ?>/img/coeur.svg" alt=""></a>';
            echo '</div>';
        }
    ?>

    <form action="<?= WEBROOT; ?>do/post_message.php" method="post" class="form-message">
        <label for="message" style="color: #535353;">Votre message :</label>
        <textarea name="message" id="message" cols="30" rows="10" placeholder="Pour une meilleure lisibilité, écrivez avec un français correcte."></textarea>
        <button type="submit" class="button" style="width:200px;">Publier</button>
    </form>
    </div>
</section>

<?php
    require_once INCLUDES . '/default/footer.php';
?>