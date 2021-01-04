<?php
$names = ['Dillie', 'Sanne', 'Niels T.', 'Tijn', 'Jasper', 'Luuk', 'Meko', 'Daan', 'Stefan', 'Richard', 'Mohammed', 'Shane', 'Tristan', 'Hilde', 'Jessy', 'Jeroen', 'Borre', 'Jo&euml;l', 'Niels V.', 'Leon', 'Djo&euml;l'];

function arrayAsUl($arr)
{
	$result = '<ul>';
	foreach ($arr as $item) {
		$result .= "<li>$item</li>";
	}
	return $result .= '</ul>';
}

function arrayFilterLengte($arr, $num)
{
	$result = [];
	foreach ($arr as $val) {
		strlen($val) == $num ? $result[] = $val : $result;
	}
	return $result;
}

function arrayOmgekeerd($arr)
{
	$len = count($arr);
	for ($i = 0; $i < $len / 2; $i++) {
		$temp = $arr[$i];
		$arr[$i] = $arr[$len - $i - 1];
		$arr[$len - $i - 1] = $temp;
	}
	return $arr;
}

function arrayFilterBegin($arr, $needle)
{
	$result = [];
	foreach ($arr as $val) {
		if ($val[0] == $needle) {
			$result[] = $val;
		}
	}
	return $result;
}

?>
<html>

<head>
	<title>Oefening 23</title>
</head>

<body>
	<h2>Alle namen</h2>
	<?= arrayAsUl($names) ?>

	<h2>De namen met 4 letters</h2>
	<?= arrayAsUl(arrayFilterLengte($names, 4)) ?>

	<h2>De namen in omgekeerde volgorde</h2>
	<?= arrayAsUl(arrayOmgekeerd($names)) ?>

	<h2>De namen die beginnen met een L</h2>
	<?= arrayAsUl(arrayFilterBegin($names, 'L')) ?>
</body>

</html>
