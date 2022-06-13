<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./css/styl2.css">
	<title>Document</title>
</head>

<body>
	<?php
	for ($i = 0; $i < 7; $i++) {
		$arr2[] = mt_rand(1, 350);
	}
	var_dump($arr2);
	echo '<hr>';

	echo '<table>';
	echo '<tr>';
	echo '<th>' . '1' . '</th>';
	echo '<th>' . '2' . '</th>';
	echo '<th>' . '3' . '</th>';
	echo '<th>' . '4' . '</th>';
	echo '<th>' . '5' . '</th>';
	echo '<th>' . '6' . '</th>';
	echo '<th>' . '7' . '</th>';
	echo '</tr>';
	echo '<tr>';
	foreach ($arr2 as $val) {
		echo '<td>';
		if ($val < 150) {
			echo   $val;
		}
		echo '</td>';
	}
	echo '</tr>';
	echo '</table>';
	echo '<hr>';

	$num = 30;

	for ($i = 1; $i <= 30; $i++) {
		if ($num % $i == 0) {
			$arr[] = $i;
		}
	}
	var_dump($arr);
	echo '<hr>';

	?>
</body>

</html>