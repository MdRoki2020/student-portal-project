<?php
$host="localhost";
$dbUser="test_project_users";
$dbPass="AaBbCc2580!!@@";
$dbName="test_project";

$connect=mysqli_connect($host,$dbUser,$dbPass,$dbName);

if($connect==true){

}
else{
    echo 'Error Database Connection';
}
?>
