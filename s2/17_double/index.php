<?php
$max = $_GET['max'] ?? NULL;

// Initialize variables
$getal = 1;
$times = 0;

// Count multiplications
while ($getal <= $max) {
  $getal = $getal * 2; 
  $times++;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Oefening 17</title>
</head>

<body>
    <?php
    if (!$max) {
      echo "Je hebt geen parameters meegegeven! Gebruik het formulier hieronder of voor de waarde direct in de querystring in.";
    } else {
      echo "Je moet het basisgetal (1) $times keer verdubbelen tot dat het basisgetal (1) groter is dan $max.";
    }
    ?>

    <form>
        <input type='number' name='max'></input>
        <button>Submit</button>
    </form>

</body>

</html>
