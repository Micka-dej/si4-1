<?php
    require_once '../../app/config/system.php';

    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        $stmt = $bdd->prepare('SELECT * FROM users WHERE email = :login');
        $stmt->bindValue('login', $_POST['email']);
        $stmt->execute();

        $user = $stmt->fetch();

        if ($user) {
            if(password_verify($_POST['password'], $user['password'])){
                $_SESSION = [
                    'auth' => true,
                    'username' => $user['username'],
                    'email' => $user['email'],
                    'role' => $user['promo.id'],
                    'role' => $user['role'],
                    'csrf' => md5(uniqid(rand(), TRUE))
                ];

                header('Location: '. WEBROOT .'../feed.php');
            }else{
                $_SESSION['advert'] = ['type' => 'error', 'message' => 'Identifiant ou mot de passe incorrects'];
                header('Location: '. WEBROOT .'../index.php');
            }

        }else{
            $_SESSION['advert'] = ['type' => 'error', 'message' => 'Identifiant ou mot de passe incorrects'];
            header('Location: '. WEBROOT .'../index.php');
        }
    }else{
        $_SESSION['advert'] = ['type' => 'error', 'message' => 'Identifiant ou mot de passe incorrects'];
        header('Location: '. WEBROOT .'../index.php');
    }
?>
