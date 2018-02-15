<?php

require_once '../../app/config/system.php';

require_once '../../includes/admin/auth.php';

if (!empty($_POST['id']) && !empty($_POST['name']) && !empty($_POST['description']) && !empty($_POST['csrf']) && $_POST['csrf'] == $_SESSION['csrf']) {
    $stmt = $bdd->prepare('SELECT count(*) FROM events WHERE id = ?');
    $stmt->execute([$_POST['id']]);
    if ($stmt->fetch()[0] == 1) {

        $stmt = $bdd->prepare('UPDATE `events` SET `name` = ?, `description` = ? WHERE id = ?');
        $stmt->execute([
            $_POST['name'],
            $_POST['description'],
            $_POST['id']
        ]);
        $_SESSION['advert'] = [
            'type' => 'success',
            'message' => 'Evènement modifié avec succès !'
        ];
        header('Location: '.WEBROOT.'../edit_event.php?id='.$_POST['id']);
        exit();
    }else{
        $_SESSION['advert'] = [
            'type' => 'error',
            'message' => 'Cette évènement n\'existe pas'
        ];
        header('Location: '.WEBROOT.'../manage_events.php');
        exit();
    }
}else{
    $_SESSION['advert'] = [
        'type' => 'error',
        'message' => 'Veuillez renseigner tous les champs'
    ];
    header('Location: '.WEBROOT.'../edit_event.php?id='.$_POST['id']);
    exit();
}
