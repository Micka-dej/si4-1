<?php
    require_once '../app/config/system.php';

    $page = 'manage_events';
    $title = 'Gérer les évènements';

    require_once INCLUDES . '/admin/header.php';
    
    require_once DIR_MODELS . '/admin/manage_events.php';
?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                <h1 class="h2"><?= $title; ?></h1>
            </div>

            <?php
            if (!empty($_SESSION['advert'])) {
                $class = ($_SESSION['advert']['type'] == 'error') ? 'danger' : 'success';

                echo '<div class="alert alert-'.$class.'" role="alert">' . htmlentities($_SESSION['advert']['message']) . '</div>';

                $_SESSION['advert'] = [];
            }
            ?>

            <div style="margin-bottom:20px;">
                <a href="add_events.php" class="btn btn-sm btn-primary">Ajouter un évenement</a>
            </div>

            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                        foreach ($events as $event) {
                            echo '<tr>';
                            echo '<td><a href="edit_events.php?id='.$event['id'].'">'.htmlentities($event['name']).'</a></td>';
                            echo '<td><a href="edit_events.php?id='.$event['id'].'">'.htmlentities($event['description']).'</a></td>';
                            echo '</tr>';
                        }
                    ?>
                    </tbody>
                </table>
            </div>
        </main>

<?php
require_once INCLUDES . '/admin/footer.php';
?>
