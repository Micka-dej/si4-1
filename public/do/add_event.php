<?php

require_once '../../app/config/system.php';

require_once '../../includes/admin/auth.php';

if(!empty($_POST['name']) && !empty($_POST['description']) && !empty($_POST['csrf']) && $_POST['csrf'] == $_SESSION['csrf']) {
    if (!empty($_FILES['cover'])) {
        $errors= array();
        $file_name = $_FILES['cover']['name'];
        $file_size = $_FILES['cover']['size'];
        $file_tmp = $_FILES['cover']['tmp_name'];
        $file_type = $_FILES['cover']['type'];
        $test = explode('.',$_FILES['cover']['name']);
        $file_ext = strtolower(end($test));
        $target_dir = ROOT . "/assets/img/covers/";

        $extensions = [
            'jpeg',
            'jpg',
            'png'
        ];

        if(in_array($file_ext, $extensions) === false){
            $errors[] = "Extension interdite, utilisez du JPG ou du PNG";
        }

        if($file_size > 2097152){
            $errors[] = 'Le fichier ne doit pas dépasser 2Mo';
        }

        if(empty($errors) == true){
            $req = $bdd->prepare('INSERT INTO `events`(name, description, date, cover) VALUES (?,?,NOW(),?)');
            $req->execute([
                $_POST['name'],
                $_POST['description'],
                $file_ext
            ]);

            move_uploaded_file($file_tmp, $target_dir . $bdd->lastInsertId() . '.' . $file_ext);
        }else{
            $_SESSION['advert'] = [
                'type' => 'error',
                'message' => $errors[0]
            ];

            redirect(WEBROOT . '../add_event.php');
        }

        $_SESSION['advert'] = [
            'type' => 'success',
            'message' => 'L\'évènement a bien été ajoutée'
        ];

        redirect(WEBROOT . '../add_event.php');
    }else{
        $_SESSION['advert'] = [
            'type' => 'error',
            'message' => 'Veuillez ajouter une image'
        ];

        redirect(WEBROOT . '../add_event.php');
    }
}else{
    $_SESSION['advert'] = [
        'type' => 'error',
        'message' => 'Vous n\'avez pas rempli tous les champs'
    ];
    
    redirect(WEBROOT . '../add_event.php');
}
