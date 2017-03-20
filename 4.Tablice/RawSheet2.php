<?php

//$String = 'Piotr'.'CodersLab'.'Zajęcia';
//echo $String;
//echo '<br>';
//echo $String[4];

//$String.= "Dalej";
//echo $String;
//echo '<br>';
//echo '<br>';

//echo substr($String,6);

//$StringArray = (explode(',', $String));

//var_dump(implode(' ', $StringArray));

//var_dump(date('H:i:s'));

//$timestep = time() + 3600 * 2 + 24 * 3600 * 2;
//var_dump($timestep);
//var_dump(date('d M Y G:i:s', $timestep));


//$timeStep = strtotime('+2 day 2 hours');
//var_dump(date("G i s", $timeStep));

//var_dump(mktime(14,55,2,1,1,2016));
//var_dump(checkdate(12,30,2000));

$day_1 = time();
$day_2 = time() - 24 * 3600 * 2;
//var_dump($day_1, $day_2);

$date_long1 = '16.7.2016';
$date_long2 = '14.7.2016';

$date_long1_Array = explode('.', $date_long1);
$date_long1_timestep = mktime(0,0,0,$date_long1_Array[1],$date_long1_Array[0],$date_long1_Array[2]);
//var_dump($date_long1_timestep);

//$date_long1_Array2 = explode('.', $date_long2);
//$date_long1_timestep2 < $date_long2_timestep    

//tablice

$array_1 = array(2,4,5);
$array_2 = [2,4,5];
$array_2[3] = [1];


var_dump($array_2);

$array_1_asso = array(
        "pierwszy"  => 0,
        "drugi"     => 1,
        "trzeci"    => 2,
        );

//var_dump($array_1_asso);

$sumOfArray= 0;
for($n = 0; $n < count($array_1_asso); $n++){
    
    $sumOfArray += $array_2[$n];
    
}
//echo $sumOfArray;












