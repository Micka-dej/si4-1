<?php

if (!empty($_GET['id'])) {
    $stmt = $bdd->prepare('SELECT * FROM filieres WHERE id = ?');
    $stmt->execute([$_GET['id']]);
    $filiere = $stmt->fetch();
    
    if (!$filiere) {
        //error
    }
}else{
    //error
}