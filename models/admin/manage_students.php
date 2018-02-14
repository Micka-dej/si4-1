<?php

$req = $bdd->prepare('SELECT * FROM users');
$req->execute();
$students = $req->fetchAll();