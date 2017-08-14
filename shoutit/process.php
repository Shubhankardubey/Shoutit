<?php

include ('database.php');

if(isset($_POST['submit'])){
	$user = $_POST['user'];
	
	$message = $_POST['message'];
	
	date_default_timezone_set('America/New_York');
	$time = date('h:i:s:a', time());
	
	
		$query = "INSERT INTO shouts (user, message, time) VALUES ('$user', '$message', '$time')";
		
		if ($conn->query($query)=== TRUE)
		   {
			  header("location: index.php");
		   }
		   else
		   {
			   echo "ERROR: ".$query."<br>".$conn->error;
		   }
		
}

?>