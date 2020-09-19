<?php 
    // Get user input & variable declarations
    $getal1 = $_GET['g1'];
    $getal2 = $_GET['g2'];

    // Only calculate $rest & $quotient if $getal2 isn't 0 
    if ($getal2 == 0) 
    {
        $quotient = 'Je kunt niet delen door 0!';
        $rest = 'Je kunt ook geen rest berekenen van een deling door 0!';
    } else 
    {
        $quotient = $getal1 / $getal2;
        $rest = $getal1 % $getal2;
    }

    // Remaining operations
    $som = $getal1 + $getal2;
    $verschil = $getal1 - $getal2;
    $product = $getal1 * $getal2;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oefening 5</title>
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
        Rest = <?php echo $rest; ?>
    </p>
</body>
</html>
