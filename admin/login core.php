<?php
     
	require_once("dbcon.php");

	$username=$_REQUEST["username"];
	$password=$_REQUEST["password"];
	$password=md5($password);
	
	
	$matchQuery="SELECT * FROM users WHERE username='$username' AND password='$password'";
	
	$runMatchQuery= mysqli_query($connect,$matchQuery);
	
	$chakeCount= mysqli_num_rows($runMatchQuery);
	
	if($runMatchQuery==true){
		if($chakeCount===1){
		setcookie("currentUser",$username,time()+(86400*7));
		header("location:index.php");
		
		
	}
	else{
		header("location:login.php");
	}
	}

?>