<?php
include_once('config/db.php');

$sid=mysql_real_escape_string($_REQUEST['sid']);
if(is_numeric($sid)) {
$q="update schdule set count = count + 1 where sid = $sid";
mysql_query($q) or die(mysql_error());

header("Location:../");
mysql_close();
}
?>