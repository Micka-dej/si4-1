<?php

$req = $bdd->prepare('SELECT * FROM events ORDER BY id DESC');
$req->execute();
$events = $req->fetchAll();