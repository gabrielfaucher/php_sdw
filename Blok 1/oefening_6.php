<?php 
    // Get user input
    $lengte = $_GET['lengte'];
    $breedte = $_GET['breedte'];
    $hoogte = $_GET['hoogte'];
    $prijsVerf = $_GET['verfprijs'];
    $invalid = false;

    // Only calculate results if all the input values are larger than 0
    if ($lengte > 0 && $breedte > 0 && $hoogte > 0 && $prijsVerf > 0) 
    {
        // Calculate surface area
        $oppervlakteMuur = $lengte * $breedte * $hoogte;
        $oppervlakteKamer = $oppervlakteMuur * 4;
        
        // Calculate total price
        $prijsTotaal = $oppervlakteKamer * $prijsVerf;
    } else 
    {
        $invalid = true;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oefening 6</title>
</head>
<body>
    <p>
        <?php 
            // Only print results if $invalid is false
            if ($invalid) 
            {
               echo 'There was something wrong with your input.' .  '<br />' . ' Please make sure all the values were larger than 0!'; 
            } else 
            {
                echo 'Oppervlakte muren: ' . $oppervlakteKamer .  ' vierkante meter' . '<br />';
                echo 'Prijs van de verf: ' . $prijsVerf . ' euro' . '<br />';
                echo 'Kosten: '. $prijsTotaal . ' euro' . '<br />';
            }

        ?>
    </p>
</body>
</html>
