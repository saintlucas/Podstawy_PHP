<?php

$bokA = 10;
$bokB = 4;

function obwodpole($bokA, $bokB) {

    $obwod = $bokA * 2 + $bokB * 2;
    echo "$obwod";
    echo "<br>";
    $pole = $bokA * $bokB;
    echo "$pole";
}

obwodpole($bokA, $bokB);
