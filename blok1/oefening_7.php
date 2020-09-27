<?php
   // Get user input
   $tafel = $_GET['tafel'];
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Oefening 7</title>
   </head>
   <body>
      <p>
         <?php
         // Calculate table of input number and echo the output
         for ($i = 1; $i <= 10; $i = $i + 1) {
             $res = $i . 'x' . $tafel . ' = ' . ($tafel * $i) . '<br />' ;
             echo $res;
         }
         ?>
      </p>
   </body>
</html>
