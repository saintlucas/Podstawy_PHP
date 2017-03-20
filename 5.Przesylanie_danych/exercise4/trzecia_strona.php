<?php


if(isset($_COOKIE['user'])) {
setcookie('user', 'Łukasz', time() - 3600);
echo('Ciasteczko user usunięte<br>');
}