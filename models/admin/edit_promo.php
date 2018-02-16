<?php


if (!empty($_GET['id'])) {
    $stmt = $bdd->prepare('SELECT * FROM promos WHERE id = :id');
    $stmt->execute([':id' => $_GET['id']]);
    $promo = $stmt->fetch();

    if ($promo) {
        $req = $bdd->prepare('SELECT * FROM filieres ORDER BY id DESC');
        $req->execute();
        $filieres = $req->fetchAll();
    }
}else{
    //error
}