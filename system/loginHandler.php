<?php
session_start();

require('config/db.php');
	// Login Handler


	// print_r($_REQUEST);
	 
	 $user=$_REQUEST['username'];
	 $password=$_REQUEST['password'];

	 //echo($user . " " .  $password  );
	 
	 

	 
	 db_checkUser($user,$password);
	 
	 
	 // echo('Signup Complete. Please <a href="login.php">Login</a>');
	  
	  
	  
	  
	 function db_checkUser($username, $password)
	 {
		
		
		
		
		
	
		
				$sql = "Select * from user where uname='$username' and upass='$password'";
				$rs = mysql_query($sql)or die(mysql_error());
				if($rs)
				{
					$result = mysql_fetch_array($rs);
					
					if($result)
					{
						$_SESSION['user'] = $result["uname"];
						$_SESSION['uid'] = $result["uid"];
					
						header("Location:../index.php");
						exit;
					}else
					{
						header("Location:../login.php?error=yes");
						exit;
					}
				}
		
		
		
		mysql_close();
		
		
		 
	 }
	 
?>