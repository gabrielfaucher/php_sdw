<?php
$aantal = $_GET["worpen"];
$worpen = [];

// Populate $worpen with $aantal random ints
for ($i = 0; $i < $aantal; $i++) {
    $worpen[] = random_int(1, 6);
}

// Cacluclate amount of sixes
$sixes = count(array_keys($worpen, 6));
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oefening 10</title>
</head>

<body>
    <p>
        <?php

        // Output amount of throws
        echo 'Aantal worpen: ' . $aantal . '<br />';

        // Output comma-seprated list of all numbers in $worpen
        echo 'Worpen: ';
        echo implode(',', $worpen);
        echo '<br />';

        // Output amount of sixes in $worpen
        echo 'Aantal zessen = ' . $sixes;
        ?>
    </p>
</body>

</html>
