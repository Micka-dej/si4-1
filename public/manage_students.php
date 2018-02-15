<?php
    require_once '../app/config/system.php';

    $page = 'manage_students';
    $title = 'Gérer les étudiants';

    require_once DIR_MODELS . '/admin/manage_students.php';

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
                    <?php
                        foreach ($students as $student) {
                            $req = $bdd->prepare('SELECT * FROM promos WHERE id = ?');
                            $req->execute([
                                $student['promoID']
                            ]);
                            $promo = $req->fetch();

                            $req = $bdd->prepare('SELECT * FROM filieres WHERE id = ?');
                            $req->execute([
                                $promo['filiereID']
                            ]);
                            $filiere = $req->fetch();

                            echo '<tr>';
                            echo '<td><a href="edit_student.php?id='.$student['id'].'">'.$student['username'].'</a></td>';
                            echo '<td>'.$student['email'].'</td>';
                            echo '<td>'.$filiere['name'].'</td>';
                            echo '<td>'.$promo['year'].'</td>';
                            echo '<td><a href="edit_student.php?id='.$student['id'].'" class="btn btn-sm btn-primary">Modifier</a></td>';
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