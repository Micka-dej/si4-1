<?php
    $req = $bdd->prepare('SELECT * FROM (`filieres`)');
    $req->execute();
    $filieres = $req->fetchAll();