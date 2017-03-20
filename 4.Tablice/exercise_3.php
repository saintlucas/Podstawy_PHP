<?php

$array1 = [1, 2, 3, 4, 5, 6, 7, 8, 9];

function topNumber($array2) {
    foreach ($array2 as $value) {
        echo $value;
        echo "<br>";
    }
}

topNumber($array1);
echo "<br>";
echo "Największy element tablicy to" . " " . max($array1);
