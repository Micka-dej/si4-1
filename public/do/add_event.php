<?php
require_once '../../app/config/system.php';
require_once '../../includes/admin/auth.php';

if(!empty($_POST['name']) && !empty($_POST['description']) && !empty($_POST['csrf']) && $_POST['csrf'] == $_SESSION['csrf']) {
    $req = $bdd->prepare('INSERT INTO `events`('name', 'description') VALUES (?,?)');
    $req->execute([
        $_POST['name'],
        $_POST['description']
    ]);

    $_SESSION['advert'] = [
        'type' => 'success',
        'message' => 'L\'évènement a bien été ajoutée'
    ];

    header('Location: '. WEBROOT . '../manage_events.php');
}else{
    $_SESSION['advert'] = [
        'type' => 'error',
        'message' => 'Veuillez ajouter un évènement'
    ];
    
    header('Location: '. WEBROOT . '../add_events.php');
}
