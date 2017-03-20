<?php

function max2($num1, $num2) {

    if ($num1 > $num2) {
        return $num1;
    } else {
        return $num2;
    }
}

function max3($numMax1, $numMax2, $numMax3) {

    $num1_2 = max2($numMax1, $numMax2);
    return max2($num1_2, $numMax3);
}

echo max3(51, 12, 18);
