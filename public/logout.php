<?php

if (!empty($_SESSION['auth'])) {
    //
}else{
    header('Location: 404.php');
}