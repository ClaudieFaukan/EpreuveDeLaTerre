<?php


//verifie si argument passer ou non, etablie par defaut une valeur null
if (count($argv) <= 1 || !is_numeric($argv[1]) || is_string($argv[1])) {
    echo "Tu ne me la mettras pas à l’envers.";
    die();
}
$argument = floatval($argv[1]);
$result = "";

//check si pair
if ($argument % 2 == 0) {
    $result = "pair";
} else {
    $result = "impair";
}


echo $result;
