<?php

//Stwórz stronę, która wita gości i mówi im kiedy ostatnio byli na naszej stronie. 
//Daj też możliwość usunięcia ciasteczka (poprzez guzik).

    
 
    
if(!isset($_COOKIE['YourLastVisit'])) {
    $lastVisit = (date('H-i-s, j-m-y'));
    setcookie('YourLastVisit', $lastVisit, time() + 3600 * 2);
    echo'Witaj jestes pierwszy raz na tej stronie';
}else {
    $lastVisit = (date('h-i-s, j-m-y'));
    setcookie('YourLastVisit', $lastVisit, time() + 3600 * 2); 
    echo "Witaj, Twoja ostatnia wizyta na tej stronie miala miejsce". " ". $_COOKIE['YourLastVisit'];
}

echo "<br>";

?>

<form action="Zadanie3EreaseCookies.php" method=GET">
<input type="submit" value="Usun date ostatnich odwiedzin"/>