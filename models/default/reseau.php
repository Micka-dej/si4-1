<?php

$req = $bdd->prepare('SELECT * FROM messages WHERE promoID = :id ORDER BY id DESC');
$req->execute([
    ':id' => $_SESSION['promoID']
]);
$messages = $req->fetchAll();

foreach ($messages as $key => $message) {
    $req = $bdd->prepare('SELECT * FROM users WHERE id = :id');
    $req->execute([
        ':id' => $message['userID']
    ]);
    $messages[$key]['user'] = $req->fetch()['username'];
}