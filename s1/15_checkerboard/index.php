<?php
// Delers

$delers = [2, 3, 5, 7];

// Assosciative array met elke getal en zijn delers
$delers_per_getal = [];

// Array met delers waar het getal deelbaar door is
$delers_getal = [];

//Je moet gebruik maken van een associatieve array waarmee je het verband legt tussen een getal (de key) en het aantal verschillende delers dat dat getal heeft (de value). Een goede naam voor die array is $delers_per_getal. Je gebruikt de backend om die array te maken. Dat is een kwestie van loopen ($getal = 1 tot en met $getal = 100), en in de loop bepalen hoeveel delers (uit het lijstje 2, 3, 5 en 7) het getal heeft. Aan het eind moet bijvoorbeeld gelden: $delers_per_getal[6] == 2, want 6 is deelbaar door 2 en 3 (2 stuks dus) en niet door 5 en 7.

for ($i = 1; $i <= 100; $i++) {
   $delers_getal = [];
   foreach ($delers as $value) {
      if ($i % $value == 0) {
         array_push($delers_getal, $value);
      }
   }
   $delers_per_getal[$i] = count($delers_getal);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Oefening 15</title>
</head>

<style>
   table,
   td {
      border: 1px solid #333;
   }

   thead,
   tfoot {
      background-color: #333;
      color: #fff;
   }

   .deelbaar_door_1 {
      background-color: yellow;
   }

   .deelbaar_door_2 {
      background-color: orange;
   }

   .deelbaar_door_3 {
      background-color: red;
   }
</style>

<body>
   <p>
      <?php
      echo '<table>';
      for ($row = 0; $row < 10; $row++) {
         echo '<tr>';
         for ($col = 1; $col <= 10; $col++) {
            $nummer = (10 * $row) + $col;
            echo "<td class='deelbaar_door_$delers_per_getal[$nummer]'>$nummer</td>";
         }
         echo '</tr>';
      }
      echo '</table>';

      ?>
   </p>
</body>

</html>
