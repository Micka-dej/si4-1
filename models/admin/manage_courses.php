
<?php
$req = $bdd->prepare('SELECT * FROM courses ORDER BY id DESC');
$req->execute();

$courses = $req->fetchAll();