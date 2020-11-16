<?php
$names = [
    'Dimitri', 'Frial', 'Jaylani', 'Jesper', 'Jesse', 'Job', 'Jouke', 'Jouri',
    'Bram', 'Colin', 'Collin', 'Damian', 'David', 'Dieter',
    'Sander', 'Tim', 'Jessy', 'Jorn', 'Justin',
    'Koen', 'Kyra', 'Manon', 'Mathhew', 'Matthijs', 'Niels', 'Pascal',
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oefening 12</title>
</head>

<body>
    <p>
        <?php
        // Output all elements in $names
        foreach ($names as $value) {
            echo $value . '<br />';
        };
        ?>
    </p>
</body>

</html>
