<?php 
    $grades = [5, 8, 7, 2, 9, 6, 9];
    sort($grades);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oefening 11</title>
</head>
<body>
    <p>
        Cijfers: 
        <?php
            // Output all grades in $grades
            foreach ($grades as $value) 
            {
               echo $value . ' ';
            };
        ?>
        <br />
        <?= 'Aantal cijfers: ' . count($grades) ?>
        <br /> 
        <?= 'Hoogste cijfer: ' . end($grades) ?>
        <br />
        <?= 'Laagste cijfer: ' . $grades[0] ?>
        <br />

        <?php 
            // Calculate & output average grade
            $average = array_sum($grades) / count($grades);
            echo 'Gemiddelde: ' . $average; 
        ?>
    </p>
</body>
</html>
