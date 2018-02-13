<?php
    require_once '../../app/config/system.php';

    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        $pass = password_hash($_POST['password'], PASSWORD_BCRYPT, [
            'cost' => 12
        ]);

        $stmt = $bdd->prepare('SELECT * FROM users WHERE email = :login');
        $stmt->bindValue('login', $_POST['email']);
        $stmt->execute();

        $user = $stmt->fetch();

        if ($user) {
            var_dump(password_verify($pass, $user['password']));
            if(password_verify($pass, $user['password'])){
                $_SESSION = [
                    'username' => $user['username'],
                    'email' => $user['email'],
                    'csrf' => 'test'
                ];

                //header('Location: '. WEBROOT .'../feed.php');
            }else{
                $_SESSION['advert'] = ['type' => 'error', 'message' => 'Identifiant ou mot de passe incorrects'];
                //header('Location: '. WEBROOT .'../index.php');
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
