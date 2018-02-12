<?php

if (!isset($_SESSION['auth']) || $_SESSION['auth'] != true) {
  header('Location: 404.php');
  exit;
}

?>

<!-- header ici -->
