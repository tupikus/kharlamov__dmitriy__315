<?php
$connection = mysql_connect('localhost','root',''); /*������������ � ���� ������, � ����������� �����*/
$db = mysql_select_db('torg_set'); /*�������� ���� ������*/
mysql_set_charset('utf8'); /*�������� ���������*/
if (!$connection || !$db) /*��������� ����������� � ���� ������*/
{
	exit(mysql_error()); 
	echo Error;
}
else
{
	echo "����������� ��������� �������.";
}
?>