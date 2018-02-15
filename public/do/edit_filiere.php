<?php

require_once '../../app/config/system.php';

require_once '../../includes/admin/auth.php';

if (!empty($_POST['name']) && !empty($_POST['id']) && !empty($_POST['csrf']) && strlen($_POST['name']) >= 3 && $_POST['csrf'] == $_SESSION['csrf']) {
    $stmt = $bdd->prepare('SELECT count(*) FROM filieres WHERE id = ?');
    $stmt->execute([$_POST['id']]);

    if ($stmt->fetch()[0] == 1) {
        $stmt = $bdd->prepare('UPDATE `filieres` SET `name` = ? WHERE id = ?');
        $stmt->execute([
            $_POST['name'],
            $_POST['id']
        ]);

        $_SESSION['advert'] = [
            'type' => 'success',
            'message' => 'Filière modifiée avec succès !'
        ];

        header('Location: '.WEBROOT.'../edit_filiere.php?id='.$_POST['id']);
        exit();
    }else{
        $_SESSION['advert'] = [
            'type' => 'error',
            'message' => 'Cette filière n\'existe pas'
        ];

        header('Location: '.WEBROOT.'../manage_filieres.php');
        exit();
    }
}else{
    $_SESSION['advert'] = [
        'type' => 'error',
        'message' => 'Veuillez renseigner un nom de 3 caractères minimum'
    ];

    header('Location: '.WEBROOT.'../edit_filiere.php?id='.$_POST['id']);
    exit();
}