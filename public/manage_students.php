<?php
    require_once '../app/config/system.php';

    $page = 'manage_students';
    $title = 'Gérer les étudiants';

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

            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Adresse email</th>
                        <th>Filière</th>
                        <th>Promotion</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><a href="edit_student.php?id=1">Raphael Cerveaux</a></td>
                        <td>raphael.cerveaux@hetic.net</td>
                        <td>Bachelor web</td>
                        <td>2020</td>
                        <td><a href="#" class="btn btn-sm btn-primary">Modifier</a></td>
                    </tr>
                    <tr>
                        <td><a href="edit_student.php?id=1">Raphael Cerveaux</a></td>
                        <td>raphael.cerveaux@hetic.net</td>
                        <td>Bachelor web</td>
                        <td>2020</td>
                        <td><a href="edit_student.php?id=1" class="btn btn-sm btn-primary">Modifier</a></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </main>

<?php

require_once INCLUDES . '/admin/footer.php';

?>