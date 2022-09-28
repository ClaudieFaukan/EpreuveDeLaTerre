<?php

if (count($argv) != 2 || !is_numeric($argv[1]) || $argv[1] < 0 || !is_float($argv[1])) {
    echo "Erreur. saisir un nombre entier uniqument\n";
    die();
} else {
    $argument = floatval($argv[1]);
}

echo (sqrt($argument));
