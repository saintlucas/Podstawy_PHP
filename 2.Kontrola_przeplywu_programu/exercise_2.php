<?php

$godzina = 16;

switch ($godzina) {
    case 8: case 9: case 10: case 11:
        echo 'wykłady';
        break;
    case 12: case 13:
        echo 'dyskusje';
        break;
    case 14:
        echo'obiad';
        break;
    case 15: case 16: case 17: case 18:
        echo'prelekcje';
        break;
    case 19:
        echo'kolacja';
        break;
    default:
        echo 'czas wolny';
        break;
}