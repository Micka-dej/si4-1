<?php
    require_once '../app/config/system.php';

    $page = 'manage_courses';
    $title = 'Gérer les matières';

    require_once DIR_MODELS . '/admin/manage_courses.php';
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
                <a href="add_course.php" class="btn btn-sm btn-primary">Ajouter une matière</a>
            </div>

            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Filière</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach($courses as $course){
                        $req = $bdd->prepare('SELECT * FROM filieres WHERE id = ?');
                        $req->execute([$course['filiereID']]);

                        $filiere = $req->fetch();



                        echo '<tr>';
                        echo '<td><a href="edit_course.php?id='.$course['id'].'">'.htmlentities($course['name']).'</a></td>';
                        echo '<td>'.htmlentities($filiere['name']).'</td>';
                        echo '<td><a href="edit_course.php?id='.$course['id'].'" class="btn btn-sm btn-primary">Modifier</a> <a href="do/delete_course.php?id='.$course['id'].'&csrf='.$_SESSION['csrf'].'" class="btn btn-sm btn-danger">Supprimer</a></td>';
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