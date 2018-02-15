<?php
    if ($_SESSION['auth']) {
        header('Location: agenda.php');
    }
?>