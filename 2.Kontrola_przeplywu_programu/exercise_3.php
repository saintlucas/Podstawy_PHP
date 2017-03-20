<?php

$liczba = 5;
$suma = 0;

if (is_int($liczba) && $liczba > 0) {
    //jest całkowita oraz dodatnią
    echo ("całkowita dodatnia");
} else {
    //nie jest lcizba dodatnia lubi nie jest liczba calkowita
    echo("Nie jest całkowita albo nie dodatnia");
}
echo "<br>";

for ($i = 0; $i <= $liczba; $i ++) {
    if ($i % 2 > 0) {
        $suma = $suma + $i;
        echo "$suma";
    }
}
?>




