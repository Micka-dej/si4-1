<?php

require_once '../../app/config/system.php';

require_once '../../includes/admin/auth.php';

if (!empty($_POST['name']) && strlen($_POST['name']) >= 3) {
    $stmt = $bdd->prepare('SELECT count(*) FROM filieres WHERE name = ?');
    $stmt->execute([$_POST['name']]);
    
    if ($stmt->fetch()[0] == 0) {
        $stmt = $bdd->prepare('INSERT INTO `filieres`(`name`) VALUES (?)');
        $stmt->execute([$_POST['name']]);

        $_SESSION['advert'] = [
            'type' => 'success',
            'message' => 'Filière ajoutée avec succès !'
        ];

        header('Location: '.WEBROOT.'../manage_filieres.php');
        exit();
    }else{
        $_SESSION['advert'] = [
            'type' => 'error',
            'message' => 'Cette filière existe déjà.'
        ];

        header('Location: '.WEBROOT.'../add_filiere.php');
        exit();
    }
}else{
    $_SESSION['advert'] = [
        'type' => 'error',
        'message' => 'Veuillez renseigner un nom de 3 caractères minimum.'
    ];
    
    header('Location: '.WEBROOT.'../add_filiere.php');
    exit();
}