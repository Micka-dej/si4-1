<?php

require_once '../app/config/system.php';

$page = 'events';
$title = 'Événements';

require_once INCLUDES . '/default/auth.php';

require_once INCLUDES . '/default/header.php';

require_once DIR_MODELS . '/default/events.php';

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
                foreach ($events as $event) {
                    echo '<div class="RectangleCommentaire" style="padding:30px;">';
                    echo '<h2>'.htmlentities($event['name']).'</h2>';
                    echo '<i>Le '.date('d/m/y', strtotime($event['date'])).'</i>';
                    echo '<img src="'.DIR_ASSETS.'/img/covers/'.$event['id'].'.'.htmlentities($event['cover']).'" alt="" style="margin-top: 20px;max-width: 600px;display: block;" />';
                    echo '<p>'.nl2br(htmlentities($event['description'])).'</p>';
                    echo '</div>';
                }
            ?>
        </div>
    </section>

<?php
require_once INCLUDES . '/default/footer.php';
?>