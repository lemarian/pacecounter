<?php
include_once('config/db.php');
?>

<?php

	
	// print_r($_REQUEST);
	 
	 $user=$_REQUEST['uname'];
	 //echo($user);
	 $email=$_REQUEST['uemail'];
	 $password=$_REQUEST['upass'];
	 $confirmPassword=$_REQUEST['confirm_password'];
	 //echo($user . " " . $email . " " .  $password . " " . $confirmPassword );
	 
	  echo('<link rel="stylesheet" type="text/css" href="../theme/css/style.css" />');
	
	 if(strcmp($password,$confirmPassword)!=0){
		 
		  echo('<div class="pc-msg error">Password Do not Match, Please <a class="pc-link" href="../login.php"> login again.</a></div>');
		  die();
	 }
	 
	 db_addUserToDatabase($user, $email, $password);
	  echo('<div class="pc-msg success">Signup Complete. Please <a class="pc-link" href="../login.php">Login</a></div>');
	  
	  
	  
	  
	 function db_addUserToDatabase($username, $email, $password)
	 {
		
		 
		 $q="INSERT INTO  `scheduler`.`user` (`uid` ,`uname` ,`upass` ,`uemail` ,`visible`)VALUES (NULL ,  '$username', '$password',  '$email' , 1);";


		mysql_query($q) or die(mysql_error());
		
		
		
		mysql_close();
		
		
		 
	 }
	 
?>