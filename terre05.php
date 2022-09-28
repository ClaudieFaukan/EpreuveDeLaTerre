<?php

//verifie si argument passer ou non, etablie par defaut une valeur null
if (count($argv) <= 1 || is_numeric($argv[1]) || !is_string($argv[1])) {
    echo "Veuillez saisir, une entree valide de type 'string' exemple: \"Coucou les amis\" \n";
    die();
}

$argument = "";

if (count($argv) >= 2) {

    for ($i = 1; $i < count($argv); $i++) {

        $argument .= " " . strval($argv[$i]);
    }
} else {

    $argument = $argv[1];
}
echo strrev($argument);
