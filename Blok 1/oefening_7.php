<?php 
   $tafel = $_GET['tafel'];

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
   for ($i = 1; $i <= 10; $i = $i + 1) { 
    $res = $i . 'x' . $tafel . ' = ' . ($tafel * $i) . '<br />' ;
    echo $res;
}
?>

    <!-- 1 x <?= $tafel ?>= <?php echo $tafel * 1; ?> <br />
    2 x <?= $tafel ?><?php echo $tafel * 2; ?><br />
    3 x <?= $tafel ?><?php echo $tafel * 3; ?><br />
    4 x <?= $tafel ?><?php echo $tafel * 4; ?><br />
    5 x <?= $tafel ?><?php echo $tafel * 5; ?><br />
    6 x <?= $tafel ?><?php echo $tafel * 6; ?><br />
    7 x <?= $tafel ?><?php echo $tafel * 7; ?><br />
    8 x <?= $tafel ?><?php echo $tafel * 8; ?><br />
    9 x <?= $tafel ?><?php echo $tafel * 9; ?><br />
    10 x <?= $tafel ?><?php echo $tafel * 10; ?><br /> -->
    </p>
</body>
</html>