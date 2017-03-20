<?php

// tutaj umieść kod który będzie cenzurował napis
$my_string = 'Cholera znowu ten php';
$findme = "Cholera";

var_dump(strpos($my_string, $findme));

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ćwiczenie 6</title>
</head>
<body>

<?php

// tutaj umieść kod który będzie wyświetlał napis
$mystring = 'Cholera znowu ten php';
$findme = 'cholera';

var_dump(strpos($mystring, $findme) || strpos($my_string, $findme) == 0)
    //dodaj gwiazdki


?>


<form action="#" method="POST">
    <label>
        Twój tekst:
        <input type="text" name="userText">
    </label>
    <label>
        Jestem świadomy konsekwencji
        <input type="checkbox" name="userAgreement">
    </label>
    <input type="submit">
</form>

</body>
</html>
