<?php

session_start();

if (isset($_SESSION['counter'])) {
    unset($_SESSION['counter']);
    echo "Zmienna została usunięta z sesji";
}

