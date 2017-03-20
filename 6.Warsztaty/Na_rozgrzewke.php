<?php

    if ($_SERVER['REQUEST_METHOD'] === 'GET'){
    if(isset($_GET['name'])){
        echo 'Czesc' . " ". ($_GET['name']);
    }
}

?>

<form action="Na_rozgrzewke.php" method="GET">
    <p>
      <label for="name">Your Name:</label>
    </p>
    <p>
      <input type="text" name="name" placeholder="Your Name">
    </p>
    <p>
      <input type="submit" value="Wyślij">
    </p>
  </form>

?>