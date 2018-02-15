<?php

require_once '../../app/config/system.php';

require_once '../../includes/admin/auth.php';

if(!empty($_POST['name'])) {
  $req = $bdd->prepare('INSERT INTO `courses`(`name`, filiereID) VALUES (?,?)');
  $req->execute([
    $_POST['name'],
    $_POST['filiere']
  ]);

  $_SESSION['advert'] = [
      'type' => 'success',
      'message' => 'La matière a bien été ajoutée'
  ];

  header('Location: '. WEBROOT . '../manage_courses.php');
}else{
    $_SESSION['advert'] = [
        'type' => 'error',
        'message' => 'Veuillez renseigner un nom'
    ];

    header('Location: '. WEBROOT . '../add_course.php');
}