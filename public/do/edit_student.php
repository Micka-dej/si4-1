<?php

require_once '../../app/config/system.php';

require_once '../../includes/admin/auth.php';

if (!empty($_POST['id']) && !empty($_POST['promo']) && !empty($_POST['csrf']) && $_POST['csrf'] == $_SESSION['csrf']) {
    $stmt = $bdd->prepare('SELECT count(*) FROM users WHERE id = ?');
    $stmt->execute([$_POST['id']]);

    if ($stmt->fetch()[0] == 1) {
        $stmt = $bdd->prepare('UPDATE users SET `promoID` = ?, role = ? WHERE id = ?');
        $stmt->execute([
            $_POST['promo'],
            $_POST['role'],
            $_POST['id']
        ]);

        $_SESSION['advert'] = [
            'type' => 'success',
            'message' => 'Utilisateur modifiée avec succès !'
        ];

        header('Location: '.WEBROOT.'../edit_student.php?id='.$_POST['id']);
        exit();
    }else{
        $_SESSION['advert'] = [
            'type' => 'error',
            'message' => 'Cette utilisateur n\'existe pas'
        ];

        header('Location: '.WEBROOT.'../manage_students.php');
        exit();
    }
}else{
    $_SESSION['advert'] = [
        'type' => 'error',
        'message' => 'Veuillez renseigner tous les champs'
    ];

    header('Location: '.WEBROOT.'../edit_student.php?id='.$_POST['id']);
    exit();
}