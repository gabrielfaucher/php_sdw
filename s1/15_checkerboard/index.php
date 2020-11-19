<?php
// Delers
$delers = [2, 3, 5, 7];

// Assosciative array met elke getal en zijn delers
$delers_per_getal = [];

// Array met delers waar het getal deelbaar door is
$delers_getal = [];


for ($i = 1; $i <= 100; $i++) {
   $delers_getal = [];
   foreach ($delers as $value) {
      if ($i % $value == 0) {
        $delers_getal[] = $value;
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
