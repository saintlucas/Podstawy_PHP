<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    var_dump($_POST);
    if (isset($_POST['name2'])) {
        echo $_POST['name2'];
    }
}
?>

<form action="formPost.php" method="POST">

    <label for="name">Imię</label>
    <input name="name" type="text">
    <br>
    <label for="surname">Nazwisko</label>    
    <input name="surname" type="text">
    <br>
    <input type="submit" value= "Wyśij">
    <br>
    <label for="sex"> Płeć: 
        <br>
        <input name="sex[]" type="checkbox" value="K">Kobieta
        <br>
        <input name="sex[]" type="checkbox" value="M">Mężczyzna
    </label>

    <label for="age">
        <select name="age">
            <option value="25">25</option>
            <option value="26">26</option>
            <option value="27">27</option>
            <option value="26">26</option>
        </select>
    </label>        


    <input type="submit" value="Wyslij!">

</form>
<form action="formPost.php" method="POST">

    <input type="text" name="name2">
    <input type="submit" value="Wyślij">



</form>
