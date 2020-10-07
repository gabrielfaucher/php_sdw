<?php
// Define $grades & sort
$grades = [5, 8, 7, 2, 9, 6, 9];


$max = 0;
$min = $grades[0];

// Calculate min & max w/ foreach
foreach ($grades as $value) {
    if ($value > $max) {
        $max = $value;
    } elseif ($value < $min) {
        $min = $value;
    }
}

// Calculate average
$average = array_sum($grades) / count($grades);
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
    echo implode(', ', $grades);
    ?>
    <br />
    <?= 'Aantal cijfers: ' . count($grades) ?>
    <br />
    <?= 'Hoogste cijfer: ' . $max ?>
    <br />
    <?= 'Laagste cijfer: ' . $min ?>
    <br />

    <?php
    echo 'Gemiddelde: ' . $average;
    ?>
  </p>
</body>

</html>
