
<?php
$req = $bdd->prepare('SELECT * FROM courses');
$req->execute();

$courses = $req->fetchAll();

