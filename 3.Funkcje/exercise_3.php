<?php

function change(&$sum, $nomin) {    //funkcja ma zwrocić ile pełnych nominałów mieści sie w sumie
    $change = floor($sum / $nomin); // ile razy podzieli sie (1)
    $sum = $sum - $change * $nomin; // oblicza resztę po odjęciu 180 od 188 (2)
    return $change;
}

//echo change(188,10); rozmienia na 10 zł (1)

function changeSum() {
    $sumMain = 188;

    echo change($sumMain, 10);
    echo '<br>';
    echo change($sumMain, 5);
    echo '<br>';
    echo change($sumMain, 2);
    echo '<br>';
    echo change($sumMain, 1);
}

changeSum();
