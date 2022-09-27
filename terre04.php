<?php

use function PHPSTORM_META\type;

//verifie si argument passer ou non, etablie par defaut une valeur null
if (count($argv) <= 1) {
    $argv[1] = null;
}

$argument = $argv[1];
$result = "";

//check si nemurique
if (!is_numeric($argument)) {
    $result = "Tu ne me la mettras pas à l’envers.";
}

//check si pair
if ($argument % 2 == 0) {
    $result = "pair";
} else {
    $result = "impair";
}


echo $result;
