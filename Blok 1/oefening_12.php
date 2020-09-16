<?php 
    $names = ['Bram', 'Colin', 'Collin', 'Damian', 'David', 'Dieter', 'Dimitri', 'Frial', 'Jaylani', 'Jesper', 'Jesse', 'Job', 'Jouke', 'Jouri', 'Koen', 'Kyra', 'Manon', 'Mathhew', 'Matthijs', 'Niels', 'Pascal', 'Sander', 'Tim', 'Jessy', 'Jorn', 'Justin'];
    $name_length = $_GET=['lengte'];
    $show_names = [];
    
    foreach ($names as $value) {
            if (strlen($value) == $name_length) {
                array_push($show_names, $value); 
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