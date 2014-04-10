<?php



//Database

$hostname='localhost';
$dbuser='root';
$dbpass='';
$db='scheduler';
mysql_connect($hostname,$dbuser,$dbpass) or die(mysql_error());
mysql_select_db($db); 



?>