<?php

session_start();

if (isset($_SESSION['counter'])) {
    echo $_SESSION['counter'];
    $_SESSION['counter'] += 1;
} else {
    echo "Brak zmiennej w sesji";
}

