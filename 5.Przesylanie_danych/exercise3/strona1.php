<?php

session_start(); //zawsze w pliku startujemy sesje

$_SESSION['counter'] = 0;  //licznik sesji (licznik odswiezen strony)

var_dump($_SESSION);




//### Ćwiczenie 3
//W zadaniu stwórz 3 strony. Strony mają mieć nastepującą funkcjonalność:
//* Pierwsza strona ma nastawiać informacje w sesji pod kluczem ```counter``` na 0,
//* Druga strona ma wyświetlać zawartość sesji pod kluczem ```counter``` i zwiększać ją o 1. Jeżeli nie ma takich danych w sesji to powinna wyświetlić odpowiednie informacje.
//* Trzecia strona powinna kasować dane z sesji (tylko te trzymane pod kluczem ```counter```).