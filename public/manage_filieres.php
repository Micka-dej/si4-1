<?php
    require_once '../app/config/system.php';

    $page = 'manage_filieres';
    $title = 'Gérer les filières';

    require_once DIR_MODELS . '/admin/manage_filieres.php';

    require_once INCLUDES . '/admin/header.php';
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
                <a href="add_filiere.php" class="btn btn-sm btn-primary">Ajouter une filière</a>
            </div>

            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Nb. de promotions</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                        foreach ($filieres as $fil) {
                            echo '<tr>';
                            echo '<td><a href="edit_filiere.php?id='.$fil['id'].'">'.htmlentities($fil['name']).'</a></td>';
                            echo '<td>'.$fil['nb.promos'].'</td>';
                            echo '<td><a href="edit_filiere.php?id='.$fil['id'].'" class="btn btn-sm btn-primary">Modifier</a> <a href="do/delete_filiere.php?id='.$fil['id'].'&csrf='.$_SESSION['csrf'].'" class="btn btn-sm btn-danger">Supprimer</a></td>';
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