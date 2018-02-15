<?php

$req = $bdd->prepare('SELECT * FROM users ORDER BY id DESC');
$req->execute();
$students = $req->fetchAll();