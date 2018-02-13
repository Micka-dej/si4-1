<?php
    require_once '../app/config/system.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?= DIR_ASSETS; ?>/img/favicon.png">

    <title><?= APP_NAME; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?= DIR_ASSETS; ?>/admin/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?= DIR_ASSETS; ?>/admin/css/dashboard.css" rel="stylesheet">
</head>

<body>
<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#"><img src="<?= DIR_ASSETS; ?>/img/icon1.svg" width="24" alt=""> <?= APP_NAME; ?></a>
    <!--<input class="form-control form-control-dark w-100" type="text" placeholder="Rechercher" aria-label="Rechercher">-->
    <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
            <a class="nav-link" href="/logout.php?csrf=123">Deconnexion</a>
        </li>
    </ul>
</nav>

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="/admin.php">
                            <span data-feather="home"></span>
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/configuration.php">
                            <span data-feather="file"></span>
                            Configuration
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/" target="_blank">
                            <span data-feather="arrow-up-right"></span>
                            Consulter le site
                        </a>
                    </li>
                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Gestion de contenu</span>
                    </h6>
                    <li class="nav-item">
                        <a class="nav-link" href="manage_filieres.php">
                            <span data-feather="git-branch"></span>
                            Filières
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="manage_matieres.php">
                            <span data-feather="folder"></span>
                            Matières
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="manage_promos.php">
                            <span data-feather="hash"></span>
                            Promotions
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="manage_students.php">
                            <span data-feather="users"></span>
                            Etudiants
                        </a>
                    </li>
                </ul>

                <!--<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span>Saved reports</span>
                    <a class="d-flex align-items-center text-muted" href="#">
                        <span data-feather="plus-circle"></span>
                    </a>
                </h6>
                <ul class="nav flex-column mb-2">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="file-text"></span>
                            Current month
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="file-text"></span>
                            Last quarter
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="file-text"></span>
                            Social engagement
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="file-text"></span>
                            Year-end sale
                        </a>
                    </li>
                </ul>-->
            </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                <h1 class="h2">Dashboard</h1>
            </div>

            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">Bienvenue, {user} !</h4>
                <p>Dans cet espace d'administration, vous pourrez gérer le contenu de l'agenda collaboratif y compris le profil des étudiants, les publications ou encore les filières.</p>
                <hr>
                <p class="mb-0">Il y a actuellement : <strong>142 étudiants</strong> dans <strong>5 filières</strong> pour <strong>6 promotions</strong>.</p>
            </div>

            <a href="#" class="btn btn-default">Gérer les filières</a>
            <a href="#" class="btn btn-default">Gérer les matières</a>
            <a href="#" class="btn btn-default">Gérer les promotions</a>
            <a href="#" class="btn btn-default">Gérer les étudiants</a>
            <!--<div class="table-responsive">
                <table class="table table-striped table-sm">
                    <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Adresse email</th>
                        <th>Filière</th>
                        <th>Promo</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Raphael Cerveaux</td>
                        <td>raphael.cerveaux@hetic.net</td>
                        <td>Bachelor web</td>
                        <td>2020</td>
                    </tr>
                    <tr>
                        <td>amet</td>
                        <td>consectetur</td>
                        <td>adipiscing</td>
                        <td>elit</td>
                    </tr>
                    <tr>
                        <td>Integer</td>
                        <td>nec</td>
                        <td>odio</td>
                        <td>Praesent</td>
                    </tr>
                    </tbody>
                </table>
            </div>-->
        </main>
    </div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="<?= DIR_ASSETS; ?>/admin/js/bootstrap.min.js"></script>

<!-- Icons -->
<script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
<script>
    feather.replace()
</script>
</body>
</html>
