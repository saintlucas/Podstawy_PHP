<?php

$array = [];

$arraySub1 = [1, 1, 1];
$arraySub2 = [2, 2, 2];
$arraySub3 = [3, 3, 3];

$array = [$arraySub1, $arraySub2, $arraySub3];

function print2DTable($arrayToView) {

    foreach ($arrayToView as $subarray) {

        foreach ($subarray as $value) {
            echo $value . ' ';
            echo ' ';
        }
        echo "<br>";
    }
}

print2DTable($array);

echo "<br>";

function getMatrixTrace($arrayToCalc) {
    $subMatrix = 0;
    foreach ($arrayToCalc as $row => $subarray) {
        foreach ($subarray as $col => $value) {
            if ($row == $col) {
                $subMatrix += $value;
            }
        }
    }
    return $subMatrix;
}

echo getMatrixTrace($array);
