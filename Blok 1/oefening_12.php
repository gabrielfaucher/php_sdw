<?php 
    $names = ['Bram', 'Colin', 'Collin', 'Damian', 'David', 'Dieter', 'Dimitri',
    'Frial', 'Jaylani', 'Jesper', 'Jesse', 'Job', 'Jouke', 'Jouri', 'Koen',
    'Kyra', 'Manon', 'Mathhew', 'Matthijs', 'Niels', 'Pascal', 'Sander', 'Tim',
    'Jessy', 'Jorn', 'Justin'];
    $name_length = $_GET['naamlengte'];
    $show_names = [];

    // If $name_length is null, display all values in $names with their respective length.
    // Otherwise, display the names with the selected strlen without their respective length
    if ($name_length == NULL) {
        foreach ($names as $key => $value) {
            array_push($show_names, 'Naamlengte = ' . strlen($value) . ' ' . $value) ;
        }
        sort($show_names);
    } else {
        foreach ($names as $value) {
            if (strlen($value) == $name_length) {
                array_push($show_names, $value);
            }         
        }         
        sort($show_names);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oefening 12</title>

<body>
    <p>
        <?php
            // If $show_names is empty, display message. Otherwise, loop and display values in $show_names
            if ($show_names == []) 
            {
                echo 'No names found with that length';
            } else 
            {
                foreach ($show_names as $value) 
                {
                    echo $value . '<br />';
                }
            }
        ?>
    </p>
</body>
</html>
