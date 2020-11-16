<?php
// Get amount of numbers to generate from querystring
$amount = $_GET['amount'];

$results = [];


// Function to check if a number is a perfect number
function isPerfectNumber($number)
{
    $sum = 0;
    for ($i = 1; $i < $number; $i++) {
        if ($number % $i == 0) {
            $sum = $sum + $i;
        }
    }

    return $sum == $number;
}

// If a number is perfect, add it to $results
for ($i = 1; $i < $amount; $i++) {
    $res = isPerfectNumber($i);
    if ($res == true) {
        array_push($results, $i);
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <title>Oefening 19</title>
</head>

<body>
    <?= implode(', ', $results) ?>
</body>

</html>
