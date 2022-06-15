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
	<link rel="stylesheet" href="./css/styl2.css">
	<title>PHP_Повторение</title>
</head>

<body>
	<main>
		<table>
			<caption>Таблица № 1</caption>
			<tr>
				<th>Company</th>
				<th>Q1</th>
				<th>Q2</th>
				<th>Q3</th>
				<th>Q4</th>
			</tr>
			<tr>
				<td>Company</td>
				<td>Q1</td>
				<td>Q2</td>
				<td>Q3</td>
				<td>Q4</td>
			</tr>
		</table>
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
			$day = 4;
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
			echo $v . '<br>';
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
					echo 'Сегодня: ' . '<b>' . $val . '</b>' . date('Y d M H:i:s') . '<br>';
				}
			}
			$id = $_GET['id'];
			$conten = scandir('Z:\Контракт_126-1П_2021 склад 2022\Акты Филиалы/');
			//$file = file_get_contents($conten . $id);
			foreach ($conten as $val) {
				if ($val != '.' & $val != '..') {
					echo "<a href=\"index.php?id=$val\">" . $val . '</a>' . '<br>';
				}
			}
			echo '<hr>';
			?>
			<p>Выод папок:</p>
			<?php
			$op = scandir("Z:\Контракт_126-1П_2021 склад 2022\Акты Филиалы/$id ");

			foreach ($op as $val2) {
				$ex[] = explode('№', $val2);
			}
			echo '<table class="tb">';

			for ($i = 0; $i < count($ex); $i++) {
				echo '<tr>';
				if ($ex[$i][1] != '') {
					echo '<td>' . $ex[$i][1] . '</td>';
				}
				echo '</tr>';
			}
			echo '</table>';
			/*foreach ($ex as $key => $mas) {
				echo $key . $mas;
			}*/
			echo '<hr>';
			$mas = ['10', '20', '30', '50', '235', '3000'];
			foreach ($mas as $val) {
				if ($val[0] == 2 || $val[0] == 5) {
					# code...
					echo $val . '<br>';
				}
			}

			echo '<hr>';

			?>
			<select name="country" id="country">
				<option value="bra" selected>Бразилия</option>
				<option value="rus">Россия</option>
				<option value="ind">Индия</option>
				<option value="chn">Китай</option>
				<option value="zaf">ЮАР</option>
			</select>
			<select name="city" id="city">
			</select>



			<script>
				var cities = {
					bra: ["Сан-Паулу", "Рио-де-Жанейро"],
					rus: ["Москва", "Санкт-Петербург", "Уфа"],
					ind: ["Мумбаи", "Дели"],
					chn: ["Шанхай", "Пекин"],
					zaf: ["Йоханнесбург", "Кейптаун"]
				};
				var country = document.getElementById("country");
				var city = document.querySelector("#city");
				window.onload = selectCountry;
				country.onchange = selectCountry;

				function selectCountry(ev) {
					city.innerHTML = "";
					var c = this.value || "bra",
						o;
					for (let i = 0; i < cities[c].length; i++) {
						o = new Option(cities[c][i], i, false, false);
						city.add(o);
					};
				}
			</script>
			<?php
			echo  '<hr>';
			$mas2 = [2, 665, 85, 84, 6, 8, 48, 8, 15, 4];
			echo  '<hr>';
			$result = 0;
			foreach ($mas2 as $value) {
				$result += 1;
				if ($value == 15) {
					echo $value . ' номер позиции= ' . $result;
				}
			}
			?>
			<!--<script>
				//prompt("введите X: ", "");
				//x = prompt("введите X: ", "");
				x = '';
				if ((x !== null) && (x !== '')) {
					alert("Ваше значение х = " + x)
				} else {
					alert("Вваше значение null")
				}
			</script>-->
		</div>
	</main>
</body>

</html>