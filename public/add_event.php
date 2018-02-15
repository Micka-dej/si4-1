<?php
    require_once '../app/config/system.php';

    $page = 'manage_events';
    $title = 'Ajouter un évènements';

    require_once INCLUDES . '/admin/header.php';
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

            <form action="do/add_event.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="cover">Image de couverture</label>
                    <input type="file" class="form-control" id="cover" name="cover">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nom de l'évenement">
                </div>
              <div class="form-group">
                <textarea name="description" class="form-control" rows="8" cols="80" placeholder="Description de l'événement"></textarea>
              </div>
              <input type="hidden" name="csrf" value="<?= $_SESSION['csrf']; ?>">
              <button type="submit" class="btn btn-success">Enregistrer</button>
            </form>
        </main>

<?php
    require_once INCLUDES . '/admin/footer.php';
?>
