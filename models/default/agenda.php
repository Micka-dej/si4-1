<?php

$req = $bdd->prepare('SELECT * FROM posts WHERE promoID = ? ORDER BY id DESC');
$req->execute([$_SESSION['promoID']]);
$messages = $req->fetchAll();

foreach ($messages as $key => $message) {
    $req = $bdd->prepare('SELECT * FROM users WHERE id = ?');
    $req->execute([$message['userID']]);
    $messages[$key]['user'] = $req->fetch()['username'];

    $req = $bdd->prepare('SELECT * FROM courses WHERE id = ?');
    $req->execute([$message['courseID']]);
    $messages[$key]['course'] = $req->fetch()['name'];
}

$req = $bdd->prepare('SELECT courses.id, courses.name FROM courses JOIN promos ON courses.filiereID = promos.filiereID WHERE promos.id = ? ORDER BY courses.id DESC');
$req->execute([$_SESSION['promoID']]);
$courses = $req->fetchAll();