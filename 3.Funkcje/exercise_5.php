<?php

function rockPaperScissors($player1, $player2) {



    if (!isProper($player1) && !isProper($player2)) {  // ! odwraca znaczenie na przeciwne
        echo "Błędne informacje";
        return;
    }

    if ($player1 == $player2) {
        echo "Remis";
        return;
    }

    if ($player1 == "kamień" && $player2 == "nożyce") {
        echo "Wygrał Gracz 1";
        return;
    }

    if ($player1 == "kamień" && $player2 == "papier") {
        echo " Wygrał Gracz 2";
        return;
    }

    if ($player1 == "papier" && $player2 == "kamień") {
        echo "Wygrał Gracz 1";
        return;
    }

    if ($player == "papier" && $player2 == "nożyce") {
        echo "Wygrał Gracz 2";
        return;
    }

    if ($player == "nożyce" && $player2 == "kamień") {
        echo "Wygrał Gracz 2";
        return;
    }
    if ($player == "nożyce" && $player2 == "papier") { //
        echo "Wygrał Gracz 1";
        return;
    }
}

function isProper($string) {
    if ($string == "kamień" || $string == "papier" || $string == "nożyce") {
        return TRUE;
    }

    return FALSE;
}

function isProperShort($string) {
    return $string == 'kamień' || $string == 'papier' || $string == 'nożyce';
}

rockPaperScissors("kamień", "papier");
