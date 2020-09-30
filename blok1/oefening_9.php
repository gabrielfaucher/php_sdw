<?php
    $aantal = $_GET["worpen"];
    $worpen = [];

    // Populate the array with $aantal random numbers
    for ($i=0; $i < $aantal; $i++) {
        $worpen[$i] = random_int(1, 6);
    }

    // Sum of elements in $worpen
    $total = array_sum($worpen);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Oefening 9</title>
    </head>
    <body>
        <p>
            <?php
                // Loop over $worpen and echo each throw
                for ($i=0; $i < count($worpen) ; $i++) {
                    // Calculate total throws
                    echo 'worp ' . ($i + 1) . ' = ' . $worpen[$i] . '<br />';
                }
                echo 'totaal: ' . $total;
            ?>
        </p>
    </body>
</html>
