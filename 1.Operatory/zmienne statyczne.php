<?php

function dodawanie() {
    static $statyczna = 0;
    echo($statyczna);

    $statyczna = $statyczna + 1; //pobróbuj z podkreślnikiem i bez (daj sygnał czy zmienna jest lokalna czy nie)
    echo ('<br>');
}

dodawanie();
dodawanie();
dodawanie();
dodawanie();
