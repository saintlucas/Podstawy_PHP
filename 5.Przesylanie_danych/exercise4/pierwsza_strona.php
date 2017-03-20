<?php

if (!isset($_COOKIE['user'])) {
    setcookie('user', 'Łukasz', time() + 3600 * 24);
}
var_dump($_COOKIE['user']);
