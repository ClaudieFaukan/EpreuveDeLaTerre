<?php

$alphabet = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];

$argument = $argv[1];

$index_de_argument = array_keys($alphabet, strtolower($argument));

for ($i = $index_de_argument[0]; $i < count($alphabet); $i++) {
    echo ($alphabet[$i]);
}
