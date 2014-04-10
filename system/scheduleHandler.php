<?php
session_start();
include_once('config/db.php');

$schedule = $_REQUEST['newSchedule'];
createSchedule($schedule);


function createSchedule($sch)
{
	
	 
		$uid=$_SESSION['uid'];
		$currentTime=time();
		
		
$q="INSERT INTO `scheduler`.`schdule` (`sid`, `content`, `uid`, `hidden`, `timestamp`) VALUES (NULL, '$sch', '$uid', '0', '$currentTime');";
		
		mysql_query($q) or die(mysql_error());
		
		header("Location:../index.php");
		mysql_close();
		
}




?>