<!DOCTYPE html>
<html lang="ru">

<head>
	<!--Проблема с кодировкой -->
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./css/bootstrap.css">
	<link rel="stylesheet" href="./css/bootstrap.min.css">
	<link rel="stylesheet" href="./css/style.css">
	<title>PHP_Повторение</title>
</head>

<body>
	<main>
		<div class="container">
			<h4>Повторение PHP</h4>
			<?php
			include 'error.php';
			$var = 'abcdes';
			echo $var[3]; //Вывести 4 элемнт
			echo '<br>';
			$num = '123456526485885';

			for ($i = 0; $i < strlen($num); $i++) {
				$res +=  $num[$i];
			}
			echo $res . '<br>';
			var_dump($num);

			$kv = 10;
			$s = 2;
			$r = $kv ** $s;
			echo $r;
			echo '<br>';
			$text = 'Я';
			$text .= ' знать';
			echo $text;
			echo '<hr>';
			$day = 15;
			//переключатель
			switch ($day) {
				case 1:
					$v = 'зима';
					break;
				case 2:
					$v = 'весна';
					break;
				case 3:
					$v = 'лето';
					break;
				case 4:
					$v = 'осень';
					break;
			}
			if ($day < 10) {
				echo 'первая';
			} elseif ($day < 20) {
				echo 'вторая';
			} else {
				echo 'третья';
			}
			echo "<hr>";
			$year = 1600;
			echo $year % 100;
			echo "<hr>";
			if (($year % 4) == 0 and ($year % 100) !== 0 or ($year % 400) == 0) {
				echo 'высокостный';
			} else {
				echo 'no';
			}
			echo '<hr>';
			$str = '12345';
			if (isset($str)) {
				# code...
				for ($i = 0; $i < strlen($str); $i++) {
					$sum += $str[$i];
				}
			}
			echo $sum;
			echo '<br>';
			$arr = ['green' => 'зеленый', 'red' => 'красный', 'blue' => 'голубой'];
			foreach ($arr as $el => $key) :
				echo $el . '-' . $key . '<br>';
			endforeach;
			$arr2 = ['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];
			foreach ($arr2 as $val) {
				if ($val != 'сб' & $val != 'вс') {
					echo $val . '<br>';
				} else {
					echo '<b>' . $val . '</b>' . '<br>';
				}
			}
			echo '<hr>';
			$today = getdate();
			$wday =  $today['weekday'];
			echo $data;
			$day = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
			foreach ($day as $val) {
				if ($wday != $val) {
					echo  $val  . '<br>';
				} else {
					echo '<i>' . $val . '<i>' . '<br>';
				}
			}
			?>
		</div>
	</main>
</body>

</html>