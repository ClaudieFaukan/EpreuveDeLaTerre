<?php

if (count($argv) != 3 || !is_numeric($argv[1]) || !is_numeric($argv[2]) || $argv[1] < 0 || $argv[2] < 0) {
    echo "Erreur. veuillez saisir un nombre et un exposant non negatif exemple \" 4 2 \" .\n";
    die();
} else {
    $valeur = abs(floatval($argv[1]));
    $exposant = abs(floatval($argv[1]));
}

echo (pow($valeur, $exposant));
