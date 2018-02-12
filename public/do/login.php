<?php
    require_once '../../app/config/system.php';

    if (!empty($_POST['username']) && !empty($_POST['password'])) {
        $stmt = $bdd->prepare('SELECT * FROM users WHERE username = :login || email = :login && password = :pass');
        $stmt->bindValue('login', $_POST['username']);
        $stmt->bindValue('pass', $_POST['pass']);
        $stmt->execute();

        $user = $stmt->fetch();

        if ($user) {

        }else{
            $_SESSION['advert'] = ['type' => 'error', 'message' => 'Identifiant ou mot de passe incorrects'];
            header('Location: index.php');
            exit;
        }

        header('Location: feed.php');
    }else{
        $_SESSION['advert'] = ['type' => 'error', 'message' => 'Identifiant ou mot de passe incorrects'];
        header('Location: index.php');
        exit;
    }
?>