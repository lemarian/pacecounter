<?php
include_once('config/db.php');

$sid=$_REQUEST['sid'];

$q="update schdule set count = count + 1 where sid = $sid";
mysql_query($q) or die(mysql_error());
mysql_close();

header("Location:../");

?>