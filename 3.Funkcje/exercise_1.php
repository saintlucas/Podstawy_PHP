<?php

function rentCost($days) { //jako argument funkcja przyjmuje liczbę dni
    $cost;        //cost to parametr - funkcja przyjmuje 1 parametr (liczba dni)
    if ($days == 1) {
        $cost = 200; //porównajmy z progami okreslajacyi cenę, użyć if lub switch
    }
    if ($days == 2 || $days == 3) {  // to wtedy...
        $cost = 180;
    }
    if ($days >= 4 && $days <= 7) {  // to wtedy
        $cost = 160;
    }
    if ($days >= 8) {
        $cost = 150;
    }

    $reductionCost = floor($days / 7) * 50;

    return $days * $cost - $reductionCost;     //funkcja zwraca a nie wyświetla
}

echo rentCost(3);     //używamy echo, żeby wyświetlić liczbę dni, np dla 1 dnia
