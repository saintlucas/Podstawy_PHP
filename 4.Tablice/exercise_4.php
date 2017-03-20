<?php

$array1 = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$sum = array_sum($array1);
$count = count($array1);

//$arithmeticAverage = array_sum($array1); //sumuje elementy w tablicy

function lessThanArithmeticAverage($array2) {
    foreach ($array2 as $value) {
        $average = array_sum($array2) / count($array2);
        if ($value < $average) {
            echo $value;
        }
    }
}

echo "Suma liczb w tablicy to" . " " . $sum;
echo "<br>";
echo "Liczba elemntów w tablicy to" . " " . $count;
echo"<br>";
lessThanArithmeticAverage($array1);
