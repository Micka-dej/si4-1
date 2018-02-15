<?php

require_once '../../app/config/system.php';

require_once '../../includes/admin/auth.php';

if(!empty($_POST['year']) && !empty($_POST['filiere'])) {
    $req = $bdd->prepare('INSERT INTO `promos`(year, filiereID) VALUES (?,?)');
    $req->execute([
        $_POST['year'],
        $_POST['filiere']
    ]);

    $_SESSION['advert'] = [
        'type' => 'success',
        'message' => 'La promotion a bien été ajoutée'
    ];

    header('Location: '. WEBROOT . '../manage_promos.php');
}else{
    $_SESSION['advert'] = [
        'type' => 'error',
        'message' => 'Veuillez renseigner une année'
    ];

    header('Location: '. WEBROOT . '../add_promo.php');
}