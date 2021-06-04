<?php
require_once("config.php");
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$password=$_REQUEST['password'];
$country=$_REQUEST['country'];
$city=$_REQUEST['city'];
$photo=$_REQUEST['photo'];

$authPass=md5(sha1($password));

$photo=explode(".",$_FILES["photo"]["name"]);
$photo=end($photo);
$photo_name=rand().".".$photo;

$insertQuery="INSERT INTO `my_users`(`name`, `email`, `password`, `country`, `city`, `photo`) VALUES ('$name','$email','$authPass','$country','$city','$photo_name')";
$runQuery= mysqli_query($connect,$insertQuery);

if($runQuery){
    move_uploaded_file($_FILES['photo']['tmp_name'],'user_image/'.$photo_name);
}

if($runQuery==true){
    header("location: signup.php?right");
}

?>