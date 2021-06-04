<?php
require_once("dbcon.php");
?>
<?php
$name=$_REQUEST["name"];
$email=$_REQUEST["email"];
$username=$_REQUEST["username"];
$password=$_REQUEST["password"];
$c_password=$_REQUEST["c_password"];
$password=md5($password);
$photo=explode(".",$_FILES["photo"]["name"]);
$photo=end($photo);
$photo_name=$username.".".$photo;


$insertQuery="INSERT INTO `users`(`name`, `email`, `username`, `password`, `photo`, `status`) VALUES ('$name','$email','$username','$password','$photo_name','inactive')";
	
$runQuery=mysqli_query($connect,$insertQuery);

if($runQuery){
	move_uploaded_file($_FILES['photo']['tmp_name'],'images/'.$photo_name);
}

if($runQuery==true){
header("location:resistration.php?right");
	}
    else{
        echo "data do not insert";
    }
?>