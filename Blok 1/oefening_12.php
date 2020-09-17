<?php 
    $names = ['Bram', 'Colin', 'Collin', 'Damian', 'David', 'Dieter', 'Dimitri', 'Frial', 'Jaylani', 'Jesper', 'Jesse', 'Job', 'Jouke', 'Jouri', 'Koen', 'Kyra', 'Manon', 'Mathhew', 'Matthijs', 'Niels', 'Pascal', 'Sander', 'Tim', 'Jessy', 'Jorn', 'Justin'];
    $name_length = $_GET['naamlengte'];
    $show_names = [];

    if ($name_length == NULL) {
        $show_names = $names;
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
            if ($show_names == []) {
                echo 'No names found with that length';
            } else {
                foreach ($show_names as $value) {
                    $res = $value . '<br />';
                    echo $res;
                };
            }
        ?>
    </p>
</body>
</html>