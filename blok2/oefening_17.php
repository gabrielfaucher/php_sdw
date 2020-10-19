<?php
// If $max is set with form, use that
// Otherwise, use the querystring
if ($_POST['max']) {
    $max = $_POST['max'];
} else {
    $max = $_GET['max'];
}

// Initialize variables
$getal = 1;
$times = 0;

// Count multiplications
for ($getal; $getal <= $max; $getal++) {
    $getal = $getal * 2;
    $times++;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Oefening 17</title>
</head>

<body>
    
    <?php
    if ($max) {
        echo $times;
    } else {
        echo 'you fucked up';
    }
    ?>
    <form method='POST'>
        <input type='number' name='max'></input>
        <button type="submit"></button>
    </form>
</body>

</html>
