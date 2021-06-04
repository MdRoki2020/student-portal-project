<?php
require_once("config.php");

$id=$_REQUEST['id'];
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$country=$_REQUEST['country'];
$city=$_REQUEST['city'];
$photo=$_REQUEST['photo'];

$photo=explode(".",$_FILES["photo"]["name"]);
$photo=end($photo);
$photo_name=rand().".".$photo;

$updateQuery="UPDATE `my_users` SET `name`='$name',`email`='$email',`country`='$country',`city`='$city',`photo`='$photo_name' WHERE `id`='$id'";
$runQuery=mysqli_query($connect,$updateQuery);

if($updateQuery==true){
    move_uploaded_file($_FILES['photo']['tmp_name'],'user_image/'.$photo_name);
}

if($runQuery==true){
    header("location: index.php");
}

?>
