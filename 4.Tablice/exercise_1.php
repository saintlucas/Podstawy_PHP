<?php

function printTable($array) {
    foreach ($array as $value) {
        echo $value;
    }
}

$array_1 = [1, 2, 3, 4, 5];
printTable($array_1);
