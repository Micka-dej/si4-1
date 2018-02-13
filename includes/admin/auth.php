<?php

if (!$_SESSION['auth'] || $_SESSION['role'] != 1) {
  header('Location: 404.php');
  exit;
}