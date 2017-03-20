<?php

function ShowNumber($num1, $num2) {
    return $num1 * $num2; // teraz funncja zwroci wynik - możan return zastapic echo
}

echo ShowNumber(2, 3); // tu podajemy 2 cyfry

function ShowNumber2($num) {
    echo $num;
}

$num = ShowNumber(2, 5);

ShowNumber2($num);

//
//referencje

$sum = 2;

function increaseSum(&$numb) { //funkcja zwiekszajaca podany paramtert numb o 1 i go zwraca, referencje powoduja ze zmienna numb funckjonuje pod dwoma nazwami
    $numb++; //zwiększamy ten paramter o 1;
    return $numb;
}

echo increaseSum($sum);
echo '<br>';
echo $sum;

