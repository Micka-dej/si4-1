<?php

$nb = [
    'students' => 0,
    'filieres' => 0,
    'promos' => 0
];

$stmt = $bdd->prepare('SELECT count(*) FROM users WHERE role = :role');
$stmt->execute([
    ':role' => 0
]);
$nb['students'] = $stmt->fetch()[0];

$stmt = $bdd->prepare('SELECT count(*) FROM filieres');
$stmt->execute();
$nb['filieres'] = $stmt->fetch()[0];

$stmt = $bdd->prepare('SELECT count(*) FROM promos');
$stmt->execute();
$nb['promos'] = $stmt->fetch()[0];