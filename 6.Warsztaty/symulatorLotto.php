<?php



if($_SERVER['REQUEST_METHOD'] === 'POST'){          //walidacja metody i danych
    if(isset($_POST['number']) === TRUE) {
        if(count($_POST['number']) == 6){
        $draw = ($_POST['number']);
        
        var_dump($draw);                         //wyświetla typy i liczby wybrane
        
        $pool = [];                          //tablica z liczbami lotto
            for($n = 1; $n <= 49; $n++){
                $pool[] = $n;
            }
            
        shuffle($pool);                      //funkcja tasująca tablicę(indeksowanie elementów)
        
        $result = array_slice($pool, 0, 6);  // zmienna z wycinkiem tablicy (6 liczb)-losowanie 6 liczb z przetasowanej tablicy $allnumbers
        
            var_dump($result);
            
        $i = 0;
        
        echo "Wynik losowania to: ";
        foreach($result as $lottoResult){
            echo $lottoResult . " ";
        }
        
        
        echo ('<br>');
        
        foreach ($draw as $elements){           //funkcja pokazująca ilość trafień
            foreach($result as $lottoResult){
                if($elements == $lottoResult){
                   $i++;
                   
                }
            }
        }  echo "Ilosc trafien to: " . $i;
        }     else {
        echo "Prosze wskazac prawidlowa ilosc liczb";  
      
        
    } 
    
        
    

    }
}



?>


<form action="symulatorLotto.php"method="POST">  <!-- generujemy formularz metodą POST-->

<?php

for($i = 1; $i < 50; $i++){
    echo "<label>$i</label>";
    echo "<input type='checkbox' name='number[]' value=$i>";
}

?>

<input type="submit" value="Losuj" />
</form>


