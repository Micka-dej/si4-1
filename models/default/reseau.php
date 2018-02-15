<?php

$req = $bdd->prepare('SELECT * FROM messages WHERE promoID = ? ORDER BY id DESC');
$req->execute([$_SESSION['promoID']]);
$messages = $req->fetchAll();

foreach ($messages as $key => $message) {
    $req = $bdd->prepare('SELECT * FROM users WHERE id = ?');
    $req->execute([$message['userID']]);
    $messages[$key]['user'] = $req->fetch()['username'];
}