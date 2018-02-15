<?php

if (!empty($_GET['id'])) {
    $req = $bdd->prepare('SELECT * FROM filieres WHERE id = ?');
    $req->execute([$_GET['id']]);
    $filiere = $req->fetch();

    if ($filiere) {
        //
    }
}