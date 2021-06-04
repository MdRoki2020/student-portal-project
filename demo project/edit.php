<?php
require_once("config.php");
if(isset($_REQUEST['id'])){
    $id=$_REQUEST['id'];
    $decId=base64_decode($id);
}
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        *{
            margin:0px;
            padding:0px;
        }
        h1 {
            font-family: cursive;
            text-align: center;
        }
        .signupBox {
            width: 224px;
        }
        .signupBox input {
            padding: 1px 22px;
            border-radius: 5px;
            border: 1px solid #ff5200;
        }
        .inputClass {
            background: #ddd;
        }
        .inputName {
            margin-bottom: 13px;
        }
        .inputEmail {
            margin-bottom: 13px;
        }
        .inputPassword {
            margin-bottom: 13px;
        }
        .inputCountry {
            margin-bottom: 13px;
        }
        .submitBtn {
            margin-top: 35px;
        }
        input.btn.btn-primary {
            width: 100%;
            font-family: cursive;
        }
        select.selectCountry {
            background: #ddd;
            width: 100%;
            border-radius: 5px;
            border: 1px solid #ff5200;
        }
        input.inputPhoto {
            width: 100%;
            background: #ddd;
        }
        .inputCity {
            margin-bottom: 13px;
        }
        .popupMsz {
            color: green;
            text-align: center;
            margin-top: 24px;
        }
        p.login {
            text-align: center;
            margin-top: 10px;
        }
        a {
            font-family: cursive;
        }
    </style>
    <title>update</title>
</head>
<body>
<section class="signupSection">
    <div class="container">
        <div class="signupBox">
            <h1>Update</h1>
            <div class="popupMsz">
                <?php
                if(isset($_REQUEST['right'])){
                    echo "Data Insert Successfull";
                }
                ?>

                <?php
                $matchQuery="SELECT * FROM `my_users` WHERE `id`='$decId'";
                $runQuery=mysqli_query($connect,$matchQuery);

                while($row=mysqli_fetch_assoc($runQuery)){?>

                    <form action="edit core.php" method="post" enctype="multipart/form-data">
                        <input class="inputClass" type="hidden" value="<?php echo $row['id']?>" name="id" />
                        <div class="inputName">
                            <label>Name: </label><br/>
                            <input class="inputClass" type="text" value="<?php echo $row['name']?>" name="name" /><br/>
                        </div>
                        <div class="inputEmail">
                            <label>Email: </label><br/>
                            <input class="inputClass" type="email" value="<?php echo $row['email']?>" name="email" /><br/>
                        </div>
                        <div class="inputCountry">
                            <label>Country: </label><br/>
                            <select class="selectCountry" name="country" ><br/>
                                <option>Select Country</option>
                                <option>Australia</option>
                                <option>Bangladesh</option>
                                <option>Canada</option>
                                <option>Denmark</option>
                                <option>Estonia</option>
                                <option>Finland</option>
                            </select>
                        </div>
                        <div class="inputCity">
                            <label>City: </label><br/>
                            <input class="inputClass" type="text" value="<?php echo $row['city']?>" name="city" /><br/>
                        </div>
                        <div class="inputPhoto">
                            <label>Photo: </label><br/>
                            <input class="inputPhoto" type="file" name="photo" /><br/>
                        </div>
                        <div class="submitBtn">
                            <input class="btn btn-primary" type="submit" value="Update"/>
                        </div>
                    </form>

                <?php
                }
                ?>

            </div>

            <p class="login">Have An Accound? <a href="login.php">Login</a></p>
        </div>
    </div>
</section>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
