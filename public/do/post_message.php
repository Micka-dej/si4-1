<?php

require_once '../../app/config/system.php';

if ($_SESSION['auth']) {
    if (!empty($_POST['message'])) {
        $req = $bdd->prepare('INSERT INTO `messages`(`userID`, `promoID`, `content`, `date`) VALUES (?, ?, ?, NOW())');
        $req->execute([
            $_SESSION['id'],
            $_SESSION['promoID'],
            $_POST['message']
        ]);

        $_SESSION['advert'] = [
            'type' => 'success',
            'message' => 'Message publié'
        ];

        header('Location:' . WEBROOT . '../reseau.php');
    } else {
        $_SESSION['advert'] = [
            'type' => 'error',
            'message' => 'Veuillez remplir tous les champs'
        ];

        header('Location:' . WEBROOT . '../reseau.php');
    }
}else{
    echo('Login error.');
}