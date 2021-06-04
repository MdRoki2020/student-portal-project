<?php
require_once("config.php");
if(isset($_REQUEST['id'])){
    $id=$_REQUEST['id'];
    $decId=base64_decode($id);

    $deleteQuery="DELETE FROM `my_users` WHERE `id`= '$decId'";
    $runQuery=mysqli_query($connect,$deleteQuery);

    if($runQuery==true){
        header("location: index.php");
    }
}
?>
