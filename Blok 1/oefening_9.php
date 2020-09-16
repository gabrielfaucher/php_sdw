<?php 
    $aantal = $_GET["worpen"];
    $worpen = [];
    for ($i=0; $i < $aantal; $i++) { 
        $worpen[] = random_int(1, 6);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oefening 2</title>
</head>
<body>
    <p>
        <?php
            for ($i=0; $i < count($worpen) ; $i++) { 
                $amount = $i + 1;
                $message = 
                $res = 'worp ' . $amount . ' = ' . $worpen[$i] . '<br />';
                echo $res;
            }
        ?>
    </p>
</body>
</html>