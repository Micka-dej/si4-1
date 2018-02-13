<?php

$nb = [
    'students' => 0,
    'filieres' => 0,
    'promos' => 0
];

$stmt = $bdd->prepare('SELECT count(*) FROM users WHERE role = ?');
$stmt->execute([0]);
$nb['students'] = $stmt->fetch()[0];

$stmt = $bdd->prepare('SELECT count(*) FROM filieres');
$stmt->execute([0]);
$nb['filieres'] = $stmt->fetch()[0];

$stmt = $bdd->prepare('SELECT count(*) FROM promos');
$stmt->execute([0]);
$nb['promos'] = $stmt->fetch()[0];