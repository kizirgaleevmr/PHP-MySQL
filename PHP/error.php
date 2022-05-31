<?php 
error_reporting(E_ALL); //Вывод ошибок
//Вторая команда вывод ошибок
ini_set('display_errors', 'on');
mb_internal_encoding('UTF-8'); //Иногда описанные процедуры не помогают и тогда может помочь команда
//На вложенном интернет сайте вывод ошибок лучше отключать. Делается это так
error_reporting(0);
ini_set('display_errors', 'off');
 ?>