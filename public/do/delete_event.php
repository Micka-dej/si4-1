<?php

require_once '../../app/config/system.php';

require_once '../../includes/admin/auth.php';

if(!empty($_GET['id']) && !empty($_GET['csrf']) && $_GET['csrf'] == $_SESSION['csrf']) {
    $req = $bdd->prepare('DELETE FROM `events` WHERE id = ?');
    $req->execute([
        $_GET['id']
    ]);

    //supprimer la cover

    $_SESSION['advert'] = [
        'type' => 'success',
        'message' => 'L\'évènement a bien été supprimée'
    ];

    header('Location: '. WEBROOT . '../manage_events.php');
}else{
    $_SESSION['advert'] = [
        'type' => 'error',
        'message' => 'L\'évènement n\'existe pas'
    ];
    header('Location: '. WEBROOT . '../manage_events.php');
}
