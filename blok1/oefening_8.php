<?php
   // Declare dice and populate with random numbers
   $my_dice = random_int(1, 6);
   $other_dice = random_int(1, 6);

   $comparison;

   if ($my_dice > $other_dice) {
       $comparison = 'hoger';
   } elseif ($my_dice < $other_dice) {
       $comparison = 'lager';
   } elseif ($my_dice == $other_dice) {
       $comparison = 'even hoog';
   };
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Oefening 8</title>
   </head>
   <body>
      <p>
         Ik heb <?= $my_dice ?> gegooid. <br />
         De ander heeft <?= $other_dice ?> gegooid. <br />
         Dus ik heb <?= $comparison ?> gegooid.
      </p>
   </body>
</html>
