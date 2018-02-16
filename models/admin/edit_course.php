<?php

if (!empty($_GET['id'])) {
    $stmt = $bdd->prepare('SELECT * FROM courses WHERE id = :id');
    $stmt->execute([
        ':id' => $_GET['id']
    ]);
    $course = $stmt->fetch();

    if ($course) {
        $stmt = $bdd->prepare('SELECT * FROM filieres');
        $stmt->execute();
        $filieres = $stmt->fetchAll();
    }
}else{
    $_SESSION['advert'] = [
        'type' => 'error',
        'message' => 'Bad id parameter'
    ];

    header('Location: 404.php');
}