<?php
require_once '../app/config/system.php';

$page = 'agenda';
$title = 'Agenda';

require_once INCLUDES . '/default/auth.php';

require_once INCLUDES . '/default/header.php';

require_once DIR_MODELS . '/default/agenda.php';
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

            <form action="<?= WEBROOT; ?>do/post_agenda.php" method="post" class="form-message">
                <label for="message" style="color: #535353;">Contenu du post-it :</label>
                <textarea name="message" id="message" cols="30" rows="5" placeholder="Pour une meilleure lisibilité, écrivez avec un français correct."></textarea>
                <div>
                    <select name="course" style="width: 95%;border: none;padding: 10px;margin: 10px 0;">
                        <?php
                            foreach ($courses as $course) {
                                echo '<option value="'.$course['id'].'">'.htmlentities($course['name']).'</option>';
                            }
                        ?>
                    </select>
                </div>
                <div style="margin-bottom:20px;">
                    <label for="date" style="color: #535353;">Date d'échéance :</label>
                    <input type="date" name="date" style="width:auto;padding:8px;">
                </div>
                <button type="submit" class="button" style="width:200px;">Publier</button>
            </form>

            <hr>

            <?php
            foreach ($messages as $message) {
                echo '<div class="RectangleCommentaire" style="padding:30px;">';
                echo '<img src="'.DIR_ASSETS.'/img/avatar.png" width="64" style="float:left;margin-right:10px;" alt="">';
                echo '<h2 class="Name">'.$message['user'].' - '.date('d/m/y à H:m', strtotime($message['date'])).'</h2>';
                echo '<p class="Commentaires1"><i>Pour le '.date('d/m/y', strtotime($message['dateLimite'])).' en '.htmlentities($message['course']).'</i></p>';
                echo '<br>';
                echo '<p class="Commentaires1">'.nl2br(htmlentities($message['content'])).'</p>';
                echo '</div>';
            }
            ?>
        </div>
    </section>

<?php
require_once INCLUDES . '/default/footer.php';
?>
