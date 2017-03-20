<?php

// to pierwsza część zadania, znalezienie dzielników
//niech funkcja zwraca tablicę z dzielnikami lub pustę tablicę jeśli false, $numb jest argumentem funcj divs
function divs($numb) {
    for ($i = 1; $i < $numb; $i++) {    // $i to licznik pętli, ++ inkrementacja
        if ($numb % $i == 0) {
            $divs[] = $i;
        }
    }
    return $divs; // zwraca tablicę z dzielnikami (jeśli liczba dzieli sie przez dany dzielnik to ją zwraca)
}

function perfectNumber($numbPerf) {

    $sum = 0;

    $divsPerfect = divs($numbPerf);

// w pętli for dodajemy wszystkie dzielniki do siebie i zwracamy true albp false
    for ($n = 0; $n < count($divsPerfect); $n++) {
        $sum += $divsPerfect[$n];
    }

    return $sum == $numbPerf;
}

var_dump(perfectNumber(6)); //sprawdzamy
