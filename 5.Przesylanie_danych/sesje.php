<?php

session_start();// poprzez nadanie tej funkcji rozpoczyna sie sesja uzytkownika
$id_user = $_SERVER['REMOTE_ADDR'];
$_SESSION['adres_uzytkownika'] = $id_user; //do zmiennej iduser pobieramy ze zmiennej supergloablnej adres uzytkownika
$_SESSION['do_usuniecia'] = null;


//usuwamy zmienna zapisana w sesji
unset($_SESSION['do_usuniecia']);


var_dump($_SESSION); //zmienna superglobalna session

?>