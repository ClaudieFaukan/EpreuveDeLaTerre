<?php

$alphabet = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];

//check si argument passer et si c'est un string
if (count($argv) <= 1 || !is_string($argv[1]) || is_numeric($argv[1]) || strlen($argv[1]) > 1) {
    echo ("Argument non valide , Saisir une lettre \n");
    die();
}

$argument = strval($argument);
$argument = strtolower($argument);

$index_de_argument = array_keys($alphabet, $argument);

for ($i = $index_de_argument[0]; $i < count($alphabet); $i++) {
    echo ($alphabet[$i]);
}
