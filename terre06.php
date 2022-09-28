<?php

if (count($argv) != 2 || is_numeric($argv[1]) || !is_string($argv[1])) {
    echo "Erreur.\n";
    die();
} else {
    $argument = strval($argv[1]);
}

echo strlen($argument);
