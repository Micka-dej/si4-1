<?php

if (!empty($_GET['id'])) {
    $req = $bdd->prepare('SELECT * FROM users WHERE id = ?');
    $req->execute([$_GET['id']]);
    $user = $req->fetch();

    $req = $bdd->prepare('SELECT * FROM promos ORDER BY id DESC');
    $req->execute();
    $promos = $req->fetchAll();

    foreach ($promos as $key => $promo) {
        $req = $bdd->prepare('SELECT * FROM filieres WHERE id = ?');
        $req->execute([$promo['filiereID']]);
        $promos[$key]['filiere'] = $req->fetch()['name'];
    }
}else{
    //error
}