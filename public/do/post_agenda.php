<?php

require_once '../../app/config/system.php';

require_once '../../includes/default/auth.php';

if ($_SESSION['auth']) {
    if (!empty($_POST['message'])) {
        $req = $bdd->prepare('INSERT INTO `posts`(`userID`, `promoID`, `content`, `date`, `dateLimite`, courseID) VALUES (?, ?, ?, NOW(), ?, ?)');
        $req->execute([
            $_SESSION['id'],
            $_SESSION['promoID'],
            $_POST['message'],
            $_POST['date'],
            $_POST['course']
        ]);

        $_SESSION['advert'] = [
            'type' => 'success',
            'message' => 'Post-it publié'
        ];

        header('Location:' . WEBROOT . '../agenda.php');
    } else {
        $_SESSION['advert'] = [
            'type' => 'error',
            'message' => 'Veuillez remplir tous les champs'
        ];

        header('Location:' . WEBROOT . '../agenda.php');
    }
}else{
    echo('Login error.');
}