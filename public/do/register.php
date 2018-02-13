<?php

$allowed = ['hetic.net'];

if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $explodedEmail = explode('@', $email);
    $domain = array_pop($explodedEmail);

    if (in_array($domain, $allowed)) {
        //
    } else {
        // Not allowed
    }
}