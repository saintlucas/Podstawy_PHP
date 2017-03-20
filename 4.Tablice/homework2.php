<?php

$array_to_sort = [2,1,6,5];


function bublesort($array){
    
    while (loop(&$arrayMain)){
        var_dump($arrayMain);
    }
     
}

function loop(&$arrayMain){
    foreach ($array as $key => $value) {
        if(isset($array[$key + 1])){
            if($value < $array[$key + 1]){
                $tmp = $array[$key + 1]; // bierzemy do tempa wartosc
                $array[$key + 1] = $value; //do tej wartosci bierzemy kolejna wartosc
                $value = $tmp; // przypisujemy tempa do value
                return TRUE;
            }   
        
        }
    }
    return FALSE;
}
bublesort($array_to_sort);
var_dump($array_to_sort);
