<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<h2>Ваш первый скрипт</h2>
	<p>Сегодняшняя дата (согласно данному веб-серверу):</p>
	<?php echo date('l, F js Y.'); ?>
	<input type="text">
	<input type="radio">
	<input type="checkbox">
	<input type="button" value="knopka">
	<select name="list" id="#">
		<option value="list">as</option>
		<option value="list">ad</option>
	</select>
	<?php
	echo sprintf("%05d", 1230); ?>
</body>

</html>