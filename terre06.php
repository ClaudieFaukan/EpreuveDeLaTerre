<?php

if (count($argv) != 3 || !is_numeric($argv[1]) || !is_numeric($argv[2]) || $argv[1] <= 0 || $argv[2] <= 0 || $argv[1] < $argv[2]) {
    echo "Veuillez saisir, deux valeur numerique, le chiffre a divise doit etre superieur a la division pour qu'il y est un reste\n";
    die();
}

$result = $argv[1] / $argv[2];
$reste = $argv[1] % $argv[2];

echo ("resultat : $result \n reste: $reste \n ");
