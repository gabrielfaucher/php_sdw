<?php
// Get amount of numbers to generate from querystring
$amount = $_GET['amount'];

$results = [];


// Function to check if a number is perfect 
function isPerfectNumber($number)
{
    // To store the sum 
    $sum = 0;

    // Traversing through each number 
    // In the range [1,N) 
    for ($i = 1; $i < $number; $i++) {
        if ($number % $i == 0) {
            $sum = $sum + $i;
        }
    }

    // returns True is sum is equal 
    // to the original number. 
    return $sum == $number;
}

for ($i = 1; $i < $amount; $i++) {
    $res = isPerfectNumber($i);
    if ($res == true) {
        array_push($results, $i);
    }
}

// Driver's code 

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
