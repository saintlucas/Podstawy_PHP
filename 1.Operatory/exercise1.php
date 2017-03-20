<?php

//zmienne równe długością boków
$a = 3;
$b = 5;
$c = 7;

//a+b>c, a+c>b, b+c>a
function isTriangle($x, $y, $z) {
    if (($x + $y > $z) AND ( $x + $z > $y) AND ( $z + $y > $x)) {
        return TRUE;
    } else {
        return FALSE;
    }
}

var_dump(isTriangle($a, $b, $c));

function whatTriangle($x, $y, $z) {
    if ($x == $y AND $y == $z) {
        echo "Trójkąt równoboczny";
    } elseif ($x == $y || $y == $z || $z == $x) {
        echo "Trójkąt równoramienny";
    } else {
        echo "Trójkąt równoboczny";
    }
}

whatTriangle(2, 2, 5); //zwróć funkcję dla 2,2,5
