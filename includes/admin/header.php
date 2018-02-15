<?php

require_once 'auth.php';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="img/png" href="<?= DIR_ASSETS; ?>/img/favicon.png" />

    <title><?= (!empty($title)) ? APP_NAME . ' - ' . $title : APP_NAME; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?= DIR_ASSETS; ?>/admin/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?= DIR_ASSETS; ?>/admin/css/dashboard.css" rel="stylesheet">
</head>

<body>
<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="<?= WEBROOT; ?>admin.php"><img src="<?= DIR_ASSETS; ?>/img/icon1.svg" width="24" alt=""> <?= APP_NAME; ?></a>
    <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
            <a class="nav-link" href="<?= WEBROOT; ?>logout.php?csrf=<?= $_SESSION['csrf']; ?>">Deconnexion</a>
        </li>
    </ul>
</nav>

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link <?= ($page == 'dashboard') ? 'active' : ''; ?>" href="<?= WEBROOT; ?>admin.php">
                            <span data-feather="home"></span>
                            Dashboard
                        </a>
                    </li>
                    <!--<li class="nav-item">
                        <a class="nav-link <?= ($page == 'configuration') ? 'active' : ''; ?>" href="<?= WEBROOT; ?>configuration.php">
                            <span data-feather="file"></span>
                            Configuration
                        </a>
                    </li>-->
                    <li class="nav-item">
                        <a class="nav-link" href="<?= WEBROOT; ?>" target="_blank">
                            <span data-feather="arrow-up-right"></span>
                            Consulter le site
                        </a>
                    </li>
                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Gestion de contenu</span>
                    </h6>
                    <li class="nav-item">
                        <a class="nav-link <?= ($page == 'manage_filieres') ? 'active' : ''; ?>" href="<?= WEBROOT; ?>manage_filieres.php">
                            <span data-feather="git-branch"></span>
                            Filières
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= ($page == 'manage_courses') ? 'active' : ''; ?>" href="<?= WEBROOT; ?>manage_courses.php">
                            <span data-feather="folder"></span>
                            Matières
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= ($page == 'manage_promos') ? 'active' : ''; ?>" href="<?= WEBROOT; ?>manage_promos.php">
                            <span data-feather="hash"></span>
                            Promotions
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= ($page == 'manage_students') ? 'active' : ''; ?>" href="<?= WEBROOT; ?>manage_students.php">
                            <span data-feather="users"></span>
                            Etudiants
                        </a>
                    </li>
                </ul>
            </div>
        </nav>