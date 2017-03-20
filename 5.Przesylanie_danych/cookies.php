<?php
$value = "Polski";  // tworzymy ciasteczko
$time_to_expired = time() + 360*24*2;

setcookie('Język', $value, $time_to_expired);  // 1 argument to nazwa ciasteczka - Jezyk, potem wartosc value,poteam wartosc time_to_expired
var_dump($_COOKIE);


setcookie('login', 'testlogin');
setcookie($value);

//usuwanie ciasteczka
//setcookie('login', 'testlogin', time() - 1);

//tablica w ciasteczku
$array = [1,2,3];
setcookie('tablica', $array, serialize($array));

if(isset($_COOKIE['tablica'])){
    var_dump( unserialize($_COOKIE['tablica']));
    
}


//usuwanie wszystkich ciasteczek

foreach ($_COOKIE as $name => $value){
    setcookie($name, '', time() - 1); //wartosc pusta, wsteczny czas/data
    
}
?>

