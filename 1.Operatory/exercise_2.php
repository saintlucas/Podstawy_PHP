<?php

$a = 2;
$b = 3;
$c = 3;

function ifPit() {
    global $a, $b, $c;
    if ($a * $a + $b * $b = $c * $c || $b * $b + $c * $c = $a * $a || $a * $a + $c * $c = $b * $b) {
        echo "Liczba trójki pitagorejskiej";
    } else {
        echo("Liczba nie należy do trójki pitagorejskiej");
    }
}

ifPit();
