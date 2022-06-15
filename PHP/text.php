<!DOCTYPE html>
<html lang="ru">

<head>
	<!--Проблема с кодировкой -->
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./css/bootstrap.css">
	<link rel="stylesheet" href="./css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/styl2.css">
	<title>PHP_Повторение</title>
</head>

<body>
	<?php
	
$id = $_GET['val'];
$file = "new/$id";
$fop = fopen($file,'r');
$text = fread($fop,filesize($file));
fclose($fop);


$dir = 'new';
$files1 = scandir($dir);
 
 foreach($files1 as $val){
	 echo "<a href=\"text.php?val=$val\">".$val.'</a>'. '<br>';
 }
	//href=\"index.php?id=$val\"
	
	echo '<hr>';
	?>
	<div class="content">
	<?php
	echo $text;
	?>
</div>
	
</body>
</html>
	