<?php

if (!empty($_GET['id'])) {
    $stmt = $bdd->prepare('SELECT * FROM events WHERE id = ?');
    $stmt->execute([$_GET['id']]);
    $event = $stmt->fetch();

    if ($event) {
        //
    }
}else{
    $_SESSION['advert'] = [
        'type' => 'error',
        'message' => 'Bad id parameter'
    ];

    header('Location: 404.php');
}