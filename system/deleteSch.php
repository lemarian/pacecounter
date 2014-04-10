<?php
include_once('config/db.php');

$sid=$_REQUEST['sid'];

$q="update schdule set hidden = 1 where sid = $sid";
mysql_query($q) or die(mysql_error());

header("Location:../");

mysql_close();
?>