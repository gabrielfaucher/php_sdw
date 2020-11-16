<?php
// Get user input
$min = $_GET['min'];
$max = $_GET['max'];
$deler = $_GET['deler'];

// Variable declarations
$geldig;
$getallen = [];

// Set $getldig depending on $deler
if ($deler == 0) {
    $geldig = false;
} elseif ($min > $max) {
    $geldig = false;
} else {
    $geldig = true;
}

// Add values in range between $min en $max that are divisible by $deler
if ($geldig == true) {
    $range = range($min, $max);
    foreach ($range as $value) {
        if ($value % $deler == 0) {
            array_push($getallen, $value);
        }
    }
}
// Count all elements in array
$aantal = count($getallen);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Oefening 13</title>
    </head>

    <body>
        <p>
<?php
// Handle exclusions
// Handle exclusions
?>if ($geldig == false) {
    echo 'Deler mag niet 0 zijn en min mag niet groter zijn dan max! Probeer het opnieuw.';
} elseif ($aantal == 0) {
    echo 'Er zijn geen getallen tussen ' .
        $min .
        ' en ' .
        $max .
        ' die deelbaar zijn door ' .
        $deler .
        '!';
} else {
    // De volgende ... [aantal] getallen tussen ... [min] en ... [max] zijn deelbaar door ... [deler]: ... [de getallen, gescheiden door komma's]
    echo 'De volgende ' .
        $aantal .
        ' getallen tussen ' .
        $min .
        ' en ' .
        $max .
        ' zijn deelbaar door ' .
        $deler .
        ' :' .
        '<br />';
    foreach ($getallen as $key => $value) {
        if ($value == end($getallen)) {
            echo $value;
        } else {
            echo $value . ', ';
        }
    }
} ?>
        </p>
    </body

</html>
