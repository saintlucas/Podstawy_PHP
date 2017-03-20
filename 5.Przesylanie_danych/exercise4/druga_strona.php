<?php

if (isset($_COOKIE['user'])) {
    var_dump($_COOKIE['user']);
} else {
    echo "Nie ma takiego ciasteczka";
}