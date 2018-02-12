<?php

session_start();

// Permet d'activer temporairement les erreurs PHP
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

/* 
 * define() permet de définir une constante
 * TOUJOURS en majuscules le nom des constantes
 */
define('APP_NAME', 'Orgatic');

define('ROOT', str_replace('/public/index.php', '', $_SERVER['SCRIPT_FILENAME']));
define('WEBROOT', str_replace('/index.php', '', $_SERVER['SCRIPT_FILENAME']));
define('DIR_ASSETS', WEBROOT . '/assets');
define('DIR_APP', ROOT . '/app');
define('DIR_CONFIG', DIR_APP . '/config');
define('DIR_MODELS', ROOT . '/models');

$private_key = "1e23c8ed7e08abeb4fe3e5a3def219fc4d43ef3a130fe975be50f9a246711d97a4f91b90822b50f68fed0dc6a3ada3b8fc9fc6254ce01da0ad438ffa50d903ea";

// On inclus les infos de la BDD
require ('db.php');

// connexion à la bdd
$dsn = "mysql:host=".$db['host'].";dbname=".$db['dbname'].';charset=utf8;';
$options = array(
    PDO::ATTR_PERSISTENT    => true,
    PDO::ATTR_ERRMODE       => PDO::ERRMODE_EXCEPTION
);

try{
    $bdd = new PDO($dsn, $db['user'], $db['password'], $options);
}
// catch any errors
catch (PDOException $e){
    $error = $e->getMessage();
}

// Session init
if (isset($_SESSION['auth'])) {
    //
}