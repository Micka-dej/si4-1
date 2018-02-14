<?php
    require_once '../app/config/system.php';

    $page = 'manage_promos';
    $title = 'Ajouter une promotion';

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

            <form action="do/add_promo.php" method="post">
              <div class="form-group">
                <label for="promo">Année de la promotion</label>
                <input type="number" name="year" class="form-control" min="<?= date('Y')-5; ?>" max="<?= date('Y')+5; ?>" value="<?= date('Y'); ?>">
              </div>
              <div class="form-group">
                <label for="promo">Choisissez une filière</label>
                <select name="filiere" id="filiere" class="form-control">
                    <option value="1">Bachelor web</option>
                </select>
              </div>
              <button type="submit" class="btn btn-success">Enregistrer</button>
            </form>
        </main>

<?php

require_once INCLUDES . '/admin/footer.php';

?>