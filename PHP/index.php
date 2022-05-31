<!DOCTYPE html>
<html lang="en">

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
			<?php
			include 'error.php';
			$num = 3;
			$arr = array(2, 6, 5, 8, 9);
			$sum = $arr[2] + $arr[3];
			$text = 'text';
			echo $text . $num . 'Сумма массива:' . $sum;
			$text2 = 'helloWorld';
			$text3 = 'абвг';
			echo  strlen($text2); //Длина строки
			echo mb_strlen($text3); // для вывода киррилицы
			for ($i = 0; $i <= 9; $i++) {
				$arr2[] = $i;
				echo $i . '<br>';
			}
			var_dump($arr2);
			echo '<br>';
			$href = 'index.php';
			$text4 = 'ссылка';
			echo '<a href="' . $href . '">' . $text4 . '</a>';
			echo '<img src="img/photo.jpg" alt="фото">';
			echo '<input type="text">';
			echo '<textarea name="comment" cols="20" rows="6" placeholder="tee"> </textarea>';

			?>

		</div>
	</main>
</body>

</html>