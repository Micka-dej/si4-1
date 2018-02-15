<?php

require_once '../../app/config/system.php';

require_once '../../includes/admin/auth.php';

if(!empty($_GET['id']) && !empty($_GET['csrf']) && $_GET['csrf'] == $_SESSION['csrf']) {
    $req = $bdd->prepare('DELETE FROM `promos` WHERE id = ?');
    $req->execute([
        $_GET['id']
    ]);

    $_SESSION['advert'] = [
        'type' => 'success',
        'message' => 'La promotion a bien été supprimée'
    ];

    header('Location: '. WEBROOT . '../manage_promos.php');
}else{
    $_SESSION['advert'] = [
        'type' => 'error',
        'message' => 'La promotion n\'existe pas'
    ];

    header('Location: '. WEBROOT . '../manage_promos.php');
}


