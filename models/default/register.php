<?php

if ($_SESSION['auth']) {
    redirect('agenda.php');
}

$req = $bdd->prepare('SELECT * FROM promos ORDER BY id DESC');
$req->execute();
$promos = $req->fetchAll();

foreach ($promos as $key => $promo) {
    $req = $bdd->prepare('SELECT * FROM filieres WHERE id = ?');
    $req->execute([$promo['filiereID']]);
    $promos[$key]['filiere'] = $req->fetch()['name'];
}