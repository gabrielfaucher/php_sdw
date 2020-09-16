<?php 
    $names = ['Bram', 'Colin', 'Collin', 'Damian', 'David', 'Dieter', 'Dimitri', 'Frial', 'Jaylani', 'Jesper', 'Jesse', 'Job', 'Jouke', 'Jouri', 'Koen', 'Kyra', 'Manon', 'Mathhew', 'Matthijs', 'Niels', 'Pascal', 'Sander', 'Tim', 'Jessy', 'Jorn', 'Justin'];
    $name_length = $_GET['naamlengte'];
    $show_names = [];

    if ($name_length == NULL) {
        $show_names = $names;
    } else {
        foreach ($names as $value) {
            // if (strlen($value) == $name_length) {
            //     array_push($show_names, $value);
            //     break;
            // } 
            // if (strlen($value) == $name_length) {
            //     $show_names = ['No names found with that length!'];
            // }
            switch (strlen($value) == $name_length) {
                case 'true':    
                    array_push($show_names, $value);
                    break;
                case 'false':
                    $show_names = [];
                    break;
            }
        }         
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
            foreach ($show_names as $value) {
                $res = $value . '<br />';
                echo $res;
            };
        ?>
    </p>
</body>
</html>