<?php 
session_start();



//check if logged
if (isset($_SESSION['user']))
{
//Isha Do your work here


//1. Create New Form
//2. List Events
//3. Create popup additions  



?>

<?php 
mysql_connect("localhost","root","") or die(mysql_error());
		mysql_select_db("scheduler"); 
		$uid = $_SESSION['uid'];
		$q="select * from schdule where uid=$uid and hidden=0 order by sid desc";
		$res=mysql_query($q) or die(mysql_error());
		
		mysql_close();


?>

<html>
<head>
<title>
Welcome - Pace Counter
</title>

<link rel="stylesheet" type="text/css" href="theme/css/style.css" />

<head>
<body>
	<div class='container indexPage'>



		 <div class='logo-wrapper'>
        <div class="logo-icon">P</div>
        <div class='logo-text'>Pace <strong>Counter</strong></div>

    </div>


    <div class='user-info'>

    	<h2 class='welcome'>Welcome <strong><?php echo $_SESSION['user'] ?></strong></h2> <a class='pc-link' href='logout.php'>Logout</a>
    </div>
<div class='create-schedule'>
<form method="post" action="system/scheduleHandler.php">
<input type="text" name='newSchedule'class='new-schedule' placeholder='create new milestone'/>
<input type="submit" class='btn red' value='Create' />
</form>

</div>

<ul class='schedule-list'>
<?php
//print_r( mysql_fetch_row($res); die();


while($data=mysql_fetch_assoc($res))
{
//print_r($data);
//print_r(mysql_fetch_assoc($res));
//$data = mysql_fetch_assoc($res);
$content = $data['content'];
?>

	<li class='pc-box'>
		<?php// print_r (getdate(time())); ?>
		<?php//  echo $data['timestamp']?>
	<span class='schedule-list'></span>
	<h2><?php echo $content ?> </h2>
<div class='list-btn'>	
	<form class='addCount' methzod='post' action='system/addEventCount.php' >
		<input type='hidden' name='sid' value='<?php echo $data["sid"]?>'>
		<input type='submit' class='btn' value = '<?php echo ($data["count"])?$data["count"]:"0"?>'>
	</form>

	<form class='deleteIt' method='post' action='system/deleteSch.php' >
		<input type='hidden' name='sid' value='<?php echo $data["sid"]?>'>
		<input type='submit' class='btn' value = 'x'>
	</form>

</div>
	</li>

	
<?php

}
?>

</ul>
</div>

</body>



</html>







<?php





















}else header("Location:login.php");
 
 
 
 ?>
 
 