<?php
    if ($_SESSION['auth']) {
        header('Location: feed.php');
    }
?>