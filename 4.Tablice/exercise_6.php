<?php

function createMultiTable($n) {

    $array2D = [];

    for ($i = 1; $i <= $n; $i++) {

        $subArray = [];
        for ($k = 1; $k <= $n; $k++) {
            $subArray[$k] = $k;
        }
        $array2D[$i] = $subArray;
    }
    return $array2D;
}
var_dump(createMultiTable(4));
