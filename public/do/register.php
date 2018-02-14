<?php

require_once '../../app/config/system.php';

$allowed = ['hetic.net'];

if (!empty($_POST['name']) && !empty($_POST['firstname']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['repeatpassword'])) {
    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $explodedEmail = explode('@', $_POST['email']);
        $domain = array_pop($explodedEmail);

        if (in_array($domain, $allowed)) {
            if ($_POST['password'] == $_POST['repeatpassword']) {
                $req = $bdd->prepare('INSERT INTO `users`(`email`, `username`, `password`, `promoID`, `role`) VALUES (?, ?, ?, ?, ?)');
                $req->execute([
                    $_POST['email'],
                    $_POST['name'].' '.$_POST['firstname'],
                    $pass,
                    $promo,
                    0
                ]);
            }else{
                $_SESSION['advert'] = [
                    'type' => 'error',
                    'message' => 'Les mots de passe ne sont pas indentiques'
                ];

                header('Location: ' . WEBROOT . '../inscription.php');
            }
        } else {
            $_SESSION['advert'] = [
                'type' => 'error',
                'message' => 'Vous devez avoir une adresse hetic.net'
            ];

            header('Location: ' . WEBROOT . '../inscription.php');
        }
    }else{
        $_SESSION['advert'] = [
            'type' => 'error',
            'message' => 'Veuillez indiquer une adresse email valide'
        ];

        header('Location: ' . WEBROOT . '../inscription.php');
    }
}else{
    $_SESSION['advert'] = [
        'type' => 'error',
        'message' => 'Vous n\'avez pas rempli tous les champs'
    ];

    header('Location: ' . WEBROOT . '../inscription.php');
}