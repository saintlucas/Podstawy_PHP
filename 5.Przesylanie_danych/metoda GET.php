<?php

var_dump($_GET);

// kilka linków które przekazują dane metodą GET

$array_link = array(
    'name' => 'Łukasz',        // jako index podajemy nazwe, wartosc np Łukasz,Nowakowski
    'surname' => 'Nowakowski'
);

//przekazanie wartości klucz=wartość metodą GET
foreach ($array_link as $key => $value) {
    
    echo '<a href="metoda_get.php?';      //tworzymy link, znak ? mowi, ze rozpoczynamy tworzyc metoda GET
    echo $key. '=' .$value;               //. kropka to łaczenie stringa - konkartanacja
    echo '">';
    echo $value;
    echo '</a><br>';
    
}
var_dump($_GET);


