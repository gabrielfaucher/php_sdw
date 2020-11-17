<?php
$numbers = [1, 1];
$length = $_GET['lengte'] ?? 100;

// Create fibonacci sequence
function fibonacci($array, $length)
{
    for ($i = 1; $i < $length; $i++) {
        $val1 = $array[$i - 1];
        $val2 = $array[$i];
        $newval = $val1 + $val2;
        array_push($array, $newval);
    }
    return $array;
}

$numbers = fibonacci($numbers, $length);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oefening 13</title>
</head>

<body>
    <style>
        td {
            text-align: center;
            vertical-align: middle;
        }
    </style>
    <table width="100%">
        <tr>
            <th>Key</th>
            <th>Value</th>
            <th>Division</th>
        </tr>
        <tr>
            <?php foreach ($numbers as $key => $value) {
                if ($key == 0 || $key <= 0) {
                    $division = 'n.v.t';
                } else {
                    $division = $value / $numbers[$key - 1];
                }
                echo '<tr>' .
                    '<td>' .
                    $key .
                    '</td>' .
                    '<td>' .
                    $value .
                    '</td>' .
                    '<td>' .
                    $division .
                    '</td>' .
                    '</tr>';
            } ?>
        </tr>
    </table>
</body>

</html>
