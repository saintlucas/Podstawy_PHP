<?php

$globalna = 10;

function dodawanie() {
    global $globalna;
    $lokalna = 10;
    return $lokalna + $globalna; //zwróćmy sumą tych wartości zmiennych
}

echo ("suma zmiennych wynosi" . dodawanie());


