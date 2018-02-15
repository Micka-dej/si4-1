<?php

$req = $bdd->prepare('SELECT * FROM filieres ORDER BY id DESC');
$req->execute();
$filieres = $req->fetchAll();