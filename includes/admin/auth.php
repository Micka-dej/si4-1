<?php

if (!$_SESSION['auth'] || $_SESSION['role'] != 1) {
  header('Location: '.WEBROOT.'404.php');
  exit;
}