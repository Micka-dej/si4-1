<?php

require_once '../../app/config/system.php';

require_once '../../includes/admin/auth.php';

if (!empty($_POST['year']) && !empty($_POST['id']) && !empty($_POST['filiere']) && !empty($_POST['csrf']) && $_POST['csrf'] == $_SESSION['csrf']) {
    $stmt = $bdd->prepare('SELECT count(*) FROM promos WHERE id = ?');
    $stmt->execute([$_POST['id']]);

    if ($stmt->fetch()[0] == 1) {
        $stmt = $bdd->prepare('UPDATE `promos` SET `year` = ?, filiereID = ? WHERE id = ?');
        $stmt->execute([
            $_POST['year'],
            $_POST['filiere'],
            $_POST['id']
        ]);

        $_SESSION['advert'] = [
            'type' => 'success',
            'message' => 'Promotion modifiée avec succès !'
        ];

        header('Location: '.WEBROOT.'../edit_promo.php?id='.$_POST['id']);
        exit();
    }else{
        $_SESSION['advert'] = [
            'type' => 'error',
            'message' => 'Cette promotion n\'existe pas'
        ];

        header('Location: '.WEBROOT.'../manage_promos.php');
        exit();
    }
}else{
    $_SESSION['advert'] = [
        'type' => 'error',
        'message' => 'Veuillez renseigner tous les champs'
    ];

    header('Location: '.WEBROOT.'../edit_promo.php?id='.$_POST['id']);
    exit();
}