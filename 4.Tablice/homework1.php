<?php

$array_to_search = [1, 22, 3, 4, 5];

function searchValue($value, $array, &$searchIndex) {
    foreach ($array as $key => $val) {
        if ($value == $val) {
            $searchIndex = $key;
            return; // niech wyjdzie z tablicy
        }
    }
    $searchIndex = null;
    return;
}

$index = -1;

searchValue($array_to_search, 45, $index);
var_dump(searchValue(5, $array_to_search, $index));
var_dump($index);
//searchValue(6, $array_to_search, $index);