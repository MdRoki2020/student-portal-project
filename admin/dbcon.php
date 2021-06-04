<?php

    $host="localhost";
	$dbUser="user_students";
	$dbPwd="AaBbCc2580!!@@";
	$dbName="mini_project";
			
	$connect=mysqli_connect($host,$dbUser,$dbPwd,$dbName);
			
	if($connect==false){
	echo "<font color='red'>Error Established Database Connection</font>";
	}

?>