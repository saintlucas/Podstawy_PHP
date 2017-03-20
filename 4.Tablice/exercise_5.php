<?php

$variable = 2;
$array2 = [1, 2, 3, 4, 5];

function inArray($variable2, $array2a) {

    foreach ($array2a as $variable2) {
        echo TRUE;
    }
    echo FALSE;
}

//var_dump(inArray($variable, $array2));
inArray($variable, $array2);
