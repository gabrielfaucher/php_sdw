<?php

$products = ['apples', 'blueberries', 'apricots', 'cardamom', 'coconut oil', 'carrots', 'cofee beans', 'corn', 'cucumbers'];
$stocks = [];

const CRITICAL_STOCK = 7;

foreach ($products as $value) {
    $stocks[$value] = random_int(0, 20);
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
   .blue {
      background-color: lightblue;
   }
</style>

<body>
<table>
   <tr>
      <th>Product</th>
      <th>Voorraad</th>
      <th>Bestellen</th>
   </tr>
   <?php
   foreach ($stocks as $key => $value) {
       $blue;
       if ($value <= CRITICAL_STOCK) {
           $order = "ja";
           $blue = " ";
       } else {
           $order = "nee";
           $blue = "blue";
       }
       echo "<tr class=$blue>";
       echo "<td>$key</td>";
       echo "<td>$value</td>";
       echo "<td>$order</td>";
       echo '</tr>';
   }

   ?>
</body>

</html>
