<?php 
    $lengte = $_GET['lengte'];
    $breedte = $_GET['breedte'];
    $hoogte = $_GET['hoogte'];

    $oppervlakteMuur = $lengte * $breedte * $hoogte;
    $oppervlakteKamer = $oppervlakteMuur * 4;

    $prijsVerf = $_GET['verfprijs'];

    $prijsTotaal = $oppervlakteKamer * $prijsVerf;
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
        Oppervlakte muren: <?= $oppervlakteKamer ?> vierkante meter. <br />
        Prijs van de verf: <?= $prijsVerf ?> euro. <br />
        Kosten: <?= $prijsTotaal ?> euro. <br />
    </p>
</body>
</html>