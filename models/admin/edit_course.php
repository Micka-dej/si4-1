<?php

if (!empty($_GET['id'])) {
    $stmt = $bdd->prepare('SELECT * FROM courses WHERE id = ?');
    $stmt->execute([$_GET['id']]);
    $course = $stmt->fetch();

    if (!$course) {
        //error
    }
}else{
    //error
}