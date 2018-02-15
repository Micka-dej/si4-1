<?php
require_once '../app/config/system.php';

$page = 'manage_students';
$title = 'Modifier un utilisateur';

require_once INCLUDES . '/admin/header.php';

require_once DIR_MODELS . '/admin/edit_student.php';
?>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2"><?= $title; ?></h1>
        </div>

        <?php
        if (!empty($_SESSION['advert'])) {
            $class = ($_SESSION['advert']['type'] == 'error') ? 'danger' : 'success';

            echo '<div class="alert alert-'.$class.'" role="alert">' . $_SESSION['advert']['message'] . '</div>';

            $_SESSION['advert'] = [];
        }
        ?>

        <form action="do/edit_student.php" method="post">
            <div class="form-group">
                <label for="name">Nom</label>
                <input type="text" disabled name="name" class="form-control" value="<?= $user['username']; ?>">
            </div>
            <div class="form-group">
                <label for="email">Adresse email</label>
                <input type="text" disabled name="email" class="form-control" value="<?= $user['email']; ?>">
            </div>
            <div class="form-group">
                <label for="promo">Choisissez une promotion</label>
                <select name="promo" id="promo" class="form-control">
                    <?php
                    foreach ($promos as $promo) {
                        echo '<option value="'.$promo['id'].'" ' . ($promo['id'] == $user['promoID'] ? 'selected' : '') . '>'.$promo['filiere'].' P'.$promo['year'].'</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="role">Rôle</label>
                <select name="role" id="role" class="form-control">
                    <option value="0" <?= ($user['role'] == 0) ? 'selected' : ''; ?>>Étudiant</option>
                    <option value="1" <?= ($user['role'] == 1) ? 'selected' : ''; ?>>Administrateur</option>
                </select>
            </div>
            <input type="hidden" name="id" value="<?= $user['id']; ?>">
            <input type="hidden" name="csrf" value="<?= $_SESSION['csrf']; ?>">
            <button type="submit" class="btn btn-success">Enregistrer</button>
        </form>
    </main>

<?php

require_once INCLUDES . '/admin/footer.php';

?>