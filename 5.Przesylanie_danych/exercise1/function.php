<?php

//sprawdzamy, jaką metodą są przesyłane dane
if ($_SERVER['REQUEST_METHOD'] === 'GET') {        //jesli dane zostały przesłane metodą GET
    if (isset($_GET['start']) && isset($_GET['end'])) {
        for ($i = $_GET['start']; $i <= $_GET['end']; $i++) {
            echo $i;
        }
    } else {
        echo 'Nie zostały przekazane zmienne START i END';
    }
}
