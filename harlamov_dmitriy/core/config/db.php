<?php
$connection = mysql_connect('localhost','root',''); /*Подключаемся к базе данных, с параметрами входа*/
$db = mysql_select_db('torg_set'); /*Выбираем базу данных*/
mysql_set_charset('utf8'); /*Выбираем кодировку*/
if (!$connection || !$db) /*Проверяем подключение к базе данных*/
{
	exit(mysql_error()); 
	echo Error;
}
else
{
	echo "Подключение выполнено успешно.";
}
?>