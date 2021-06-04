<?php
require_once("dbcon.php");

if(isset($_REQUEST["update"])){
 $name=$_REQUEST["name"];
 $roll=$_REQUEST["roll"];
 $city=$_REQUEST["city"];
 $pcontacts=$_REQUEST["pcontacts"];
 $class=$_REQUEST["class"];
 $id=$_REQUEST["id"];

$updateQuery="UPDATE `student_info` SET `name`='$name',`roll`='$roll',`class`='$class',`city`='$city',`pcontacts`='$pcontacts' WHERE `id`='$id'";
	
$runQuery=mysqli_query($connect,$updateQuery);
	
if($runQuery==true){
header("location:all-student.php");
}
	
}	
?>