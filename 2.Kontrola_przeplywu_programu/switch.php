<?php

$a = 'poniedziałek';
$b = 5;
$c = FALSE;

switch ($c) {
    case 'poniedziałek':
        echo 'Jest to poniedziałek';
        break;
    case 5:
        echo 'Jest to cyfra pięć';
        break;
    case FALSE;
        echo'Jest to wartość logiczna FALSE';
        break;
    default:
        echo 'brak wartości w switch';
        break;
}

