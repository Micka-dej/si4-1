<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= DIR_ASSETS; ?>/css/reset.css">
    <link rel="stylesheet" href="<?= DIR_ASSETS; ?>/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300" rel="stylesheet">
    <title><?= (!empty($title)) ? APP_NAME . ' ' . $title : APP_NAME ?></title>
    <link rel="icon" type="img/png" href="<?= DIR_ASSETS; ?>/img/favicon.png" />
</head>
<body>
<header class="containerHeader">
    <div class="logoNav">
        <img class="<?= DIR_ASSETS; ?>/img/logo.svg" src="" alt="">
    </div>

    <div>
        <ul class="menu">
            <li><a href='#' class='menuLI'>Web</a></li>
            <li><a href='#' class='menuLI'>Grande Ecole</a></li>
            <li><a href='#' class='menuLI'>Marketing</a></li>
            <li><a href='#' class='menuLI'>Master</a></li>
        </ul>
    </div>
    <div class="account">
        <img src="<?= DIR_ASSETS; ?>/img/avatar.png" alt="">
        <a href="#">Mon Compte</a>
    </div>
</header>