<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo ('Witaj!');
}
?>
<form action="cwiczenie2.php" method="Post">
    <label for="name">Imię</label>
    <input type="text" name="name">
    <label for="surname">Nazwisko</label>
    <input type="text" name="surname">
    <input type="submit" value="wyślij">
