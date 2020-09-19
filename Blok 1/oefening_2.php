<?php 
    $getal1 = 3;
    $getal2 = 8;

    // Operations
    $som = $getal1 + $getal2;
    $verschil = $getal1 - $getal2;
    $product = $getal1 * $getal2;
    $quotient = $getal1 / $getal2;
    $rest = $getal1 % $getal2;
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
        Getal 1 = <?php echo $getal1; ?> <br />
        Getal 2 = <?php echo $getal2; ?>
    </p>
    <p>
        Som = <?php echo $som; ?> <br />
        Verschil = <?php echo $verschil; ?> <br />
        Product = <?php echo $product; ?> <br />
        Quotient = <?php echo $quotient; ?> <br />
        Rest = <?php echo $quotient; ?>
    </p>
</body>
</html>
