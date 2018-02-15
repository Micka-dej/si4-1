<?php

$stmt = $bdd->prepare('SELECT * FROM filieres ORDER BY id DESC');
$stmt->execute();
$filieres = $stmt->fetchAll();

foreach ($filieres as $key => $fil) {
    $stmt = $bdd->prepare('SELECT count(*) FROM promos WHERE filiereID = ?');
    $stmt->execute([$fil['id']]);
    $filieres[$key]['nb.promos'] = $stmt->fetch()[0];
}