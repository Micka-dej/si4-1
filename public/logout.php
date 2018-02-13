<?php

require_once '../app/config/system.php';

if ($_SESSION['auth'] && !empty($_GET['csrf']) && $_GET['csrf'] == $_SESSION['csrf']) {
    session_destroy();
    $_SESSION = [];
    
    $_SESSION['advert'] = [
        'type' => 'success',
        'message' => 'Aurevoir ! :)'
    ];
    
    header('Location: index.php');
}else{
    header('Location: 404.php');
}