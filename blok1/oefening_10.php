<?php
    $aantal = $_GET["worpen"];
    $worpen = [];

    // Populate $worpen with $aantal random ints
    for ($i=0; $i < $aantal; $i++) {
        $worpen[] = random_int(1, 6);
    }
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
                $sixes = count(array_keys($worpen, 6));
                
                echo 'Aantal worpen: ' . count($worpen) . '<br />';

                echo 'Worpen: ';
                foreach ($worpen as $value) {
                    echo $value . ', ';
                }
                echo '<br />';

                echo 'Aantal zessen = ' . $sixes;
            ?>
        </p>
    </body>
</html>
