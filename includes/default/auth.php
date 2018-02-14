<?php

if (!$_SESSION['auth']) {
    header('Location: '.WEBROOT);
    exit;
}