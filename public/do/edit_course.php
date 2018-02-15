<?php

require_once '../../app/config/system.php';

require_once '../../includes/admin/auth.php';

if(!empty($_POST['id']) && !empty($_POST['name']) && !empty($_POST['filiere']) && !empty($_POST['csrf']) && $_POST['csrf'] == $_SESSION['csrf']) {
    $req = $bdd->prepare('UPDATE `courses` SET `name` = ?, `filiereID` = ? WHERE id = ?' );
    $req->execute([
        $_POST['name'],
        $_POST['filiere'],
        $_POST['id']
    ]);

    $_SESSION['advert'] = [
        'type' => 'sucess',
        'message' => 'La matière a bien été modifiée'
    ];

    header('Location: '. WEBROOT . '../manage_courses.php');
}else{
    $_SESSION['advert'] = [
        'type' => 'error',
        'message' => 'Veuillez renseigner un nom'
    ];

    header('Location: '. WEBROOT . '../manage_courses.php');
}