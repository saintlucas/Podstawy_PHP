<?php

if($_SERVER['REQUEST_METHOD'] === 'GET'){
    if(isset($_COOKIE['YourlastVisit'])){
    setcookie('YourLastVisit', '', time() -1);
    echo 'Ciastko zostalo skasowane';
    }
}
?>