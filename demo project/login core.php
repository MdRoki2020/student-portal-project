<?php

require_once("config.php");

$email=$_REQUEST["email"];
$password=$_REQUEST["password"];
$AuthPass=md5(sha1($password));


$matchQuery="SELECT * FROM my_users WHERE email='$email' AND password='$AuthPass'";

$runMatchQuery= mysqli_query($connect,$matchQuery);

$chakeCount= mysqli_num_rows($runMatchQuery);

if($runMatchQuery==true){
    if($chakeCount===1){
        setcookie("currentUser",$email,time()+(86400*7));
        header("location:profile.php");


    }
    else{
        header("location:login.php");
    }
}

?>