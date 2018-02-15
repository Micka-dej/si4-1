<?php
    require_once '../app/config/system.php';

    $page = 'dashboard';
    $title = 'Dashboard';

    require_once DIR_MODELS . '/admin/admin.php';

    require_once INCLUDES . '/admin/header.php';
?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                <h1 class="h2"><?= $title; ?></h1>
            </div>

            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">Bienvenue, <?= $_SESSION['username']; ?> !</h4>
                <p>Dans cet espace d'administration, vous pourrez gérer le contenu de l'agenda collaboratif y compris le profil des étudiant(s), les publication(s) ou encore les filière(s).</p>
                <hr>
                <p class="mb-0">Il y a actuellement : <strong><?= $nb['students']; ?> étudiants</strong> dans <strong><?= $nb['filieres']; ?> filières</strong> pour <strong><?= $nb['promos']; ?> promotions</strong>.</p>
            </div>

            <a href="<?= WEBROOT; ?>manage_filieres.php" class="btn btn-default">Gérer les filières</a>
            <a href="<?= WEBROOT; ?>manage_courses.php" class="btn btn-default">Gérer les matières</a>
            <a href="<?= WEBROOT; ?>manage_promos.php" class="btn btn-default">Gérer les promotions</a>
            <a href="<?= WEBROOT; ?>manage_students.php" class="btn btn-default">Gérer les étudiants</a>
        </main>
        
<?php

require_once INCLUDES . '/admin/footer.php';

?>