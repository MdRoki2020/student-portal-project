<?php
require_once("dbcon.php");

if(isset($_REQUEST["add-student"])){
	$name=$_REQUEST["name"];
	$roll=$_REQUEST["roll"];
	$city=$_REQUEST["city"];
	$pcontacts=$_REQUEST["pcontacts"];
	$class=$_REQUEST["class"];
	
	$picture=explode(".",$_FILES["picture"]["name"]);
    $picture=end($picture);
    $picture=$roll.".".$picture;
	
	
	$insertQuery="INSERT INTO `student_info` (`name`, `roll`, `class`, `city`, `pcontacts`, `photo`) VALUES ('$name','$roll','$class','$city','$pcontacts','$picture')";
	
	$runQuery=mysqli_query($connect,$insertQuery);

    if($runQuery){
	move_uploaded_file($_FILES['picture']['tmp_name'],'student_images/'.$picture);
    }

    if($runQuery==true){
    header("location:add-student.php?right");
	}
    else{
        echo "data do not insert";
    }
	
 }
?>