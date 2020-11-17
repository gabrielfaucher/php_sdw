<?php 
$amount_of_dices = $_GET["amount"] ?? 3;
$throws = [];
$message = "";


// Throw dices
for ($i = 0; $i < $amount_of_dices ; $i++) {
  $throws[$i] = random_int(1, 6);
}

// Calculate throws sum & its rest
$throws_sum = array_sum($throws);
$rest = $throws_sum % 7;

// Message conditional base on rest
switch ($rest) {
  case 0:
    $message = "eet meer fruit"; 
    break;
  
  case 2:
    $message = "poets vaker je tanden"; 
    break;

  case 4:
    $message = "ga op tijd naar bed"; 
    break;

  case 6:
    $message = "doe altijd je huiswerk"; 
    break;
  default:
    $message = "no worries!"; 
    break;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action"" method="GET"> 
    <input type="number" placeholder="<?= $amount_of_dices ?>" name="amount"/>
    <button>Submit</button>
  </form>
  <?= "Je hebt met $amount_of_dices dobbelstenen gegooid. Het totaal was $throws_sum. Denk daarom om het volgende: $message" ?>
</body>
</html>
