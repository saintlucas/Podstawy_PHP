<?php

if($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['width']) === true) {
        echo('Witaj na stronie 2. Metodą Get przesłałeś szerokość:' . $_GET['width']);
    } else {
        echo('Witaj na stronie 2. Metodą Get nie zostały przekazane dane pod kluczem name');
    }
}

// tutaj wczytaj zmienne z GET-a i przygotuj funkcję która wyświetli tabelkę
function loopMatrix($width, $hight) {
    for ($n = 0; $n <= $width; $n++) {
        for ($i = 0; $i <= $hight; $i++) {
            echo $i * $n;
            echo ' ';
        }
        echo '<br>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Ćwiczenie 5</title>
    </head>
    <body>
        <?php
        // tutaj użyj wcześniej przygotowanej funkcji
        loopMatrix(6, 11); // 6 to pierwszy argument
        ?>


    </body>
</html>
