<?php
include_once('config/db.php');
?>

<?php

	
	// print_r($_REQUEST);
	 
	 $user=$_REQUEST['username'];
	 //echo($user);
	 $email=$_REQUEST['email'];
	 $password=$_REQUEST['password'];
	 $confirmPassword=$_REQUEST['confirm_password'];
	 //echo($user . " " . $email . " " .  $password . " " . $confirmPassword );
	 
	 
	
	 if(strcmp($password,$confirmPassword)!=0){
		  echo('Password Do not Match, Please <a href="../login.php"> login again.</a>');
		  die();
	 }
	 
	 db_addUserToDatabase($user, $email, $password);
	  echo('Signup Complete. Please <a href="../login.php">Login</a>');
	  
	  
	  
	  
	 function db_addUserToDatabase($username, $email, $password)
	 {
		
		 
		 $q="INSERT INTO  `scheduler`.`user` (`uid` ,`uname` ,`upass` ,`uemail` ,`visible`)VALUES (NULL ,  '$username', '$password',  '$email' , 1);";


		mysql_query($q) or die(mysql_error());
		
		
		
		mysql_close();
		
		
		 
	 }
	 
?>