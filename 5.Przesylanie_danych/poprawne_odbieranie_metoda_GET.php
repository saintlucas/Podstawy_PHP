<?php

//sprawdzmy czy uzyta metoda jest metoda GET

if($_SERVER['REQUEST_METHOD'] === 'GET'){
    if(isset($_GET['name'])){ //zmienna superglobalna o indeksie 'name'
        echo "Witaj" .$_GET['name'];   //to wyświetl
    } else {                           // jezeli nie jest to wyswietlamy co innego
        echo "Witaj nieznajomy";
    }
}
