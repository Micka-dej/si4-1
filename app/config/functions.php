<?php

// fichier inutile juste pour montrer qu'on sait faire des fonctions
// cc yAnN
function redirect (string $url) {
    header('Location: ' . $url);
    exit();
}