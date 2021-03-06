<?php

ini_set('session.gc_maxlifetime', '3600');
date_default_timezone_set('Europe/Paris');
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

define('ROOT', dirname(dirname($_SERVER['SCRIPT_FILENAME'])));

if (dirname($_SERVER['SCRIPT_NAME']) != '/') {
    define('WEBROOT', dirname($_SERVER['SCRIPT_NAME']).'/');
}else{
    define('WEBROOT', dirname($_SERVER['SCRIPT_NAME']));
}

define('DIR_ASSETS', WEBROOT . 'assets');
define('DIR_APP', ROOT . '/app');
define('DIR_CONFIG', DIR_APP . 'config');
define('DIR_MODELS', ROOT . '/models');
define('INCLUDES', ROOT . '/includes');

// On inclus les infos de la BDD
require ('db.php');

// connexion à la bdd
$dsn = "mysql:host=".$db['host'].";dbname=".$db['dbname'].';charset=utf8;';
$options = array(
    PDO::ATTR_PERSISTENT    => true,
    PDO::ATTR_ERRMODE       => PDO::ERRMODE_EXCEPTION
);


try {
    $bdd = new PDO($dsn, $db['user'], $db['password'], $options);
}
// catch any errors
catch (PDOException $e) {
    $error = $e->getMessage();
}

// Session init
if (isset($_SESSION['auth']) && $_SESSION['auth'] === true) {
    //
}else{
    $_SESSION['auth'] = false;
}

$page = (!empty($page)) ? $page : '';
$title = (!empty($title)) ? $title : '';

require_once 'functions.php';