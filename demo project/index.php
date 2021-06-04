<?php
require_once("config.php");
if(!isset($_COOKIE['currentUser'])){
    header("location:login.php");
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
        h1.heading {
            text-align: center;
            margin-bottom: 20px;
            font-family: cursive;
        }
        .editbtn {
            padding: 6px 21px;
        }
        a.profile {
            letter-spacing: 0.8px;
        }
    </style>
    <title>index</title>
</head>
<body>
<section class="tableSection">
    <div class="container">
        <h1 class="heading">All Register Students</h1>
        <a class="profile float-right mb-2" href="profile.php">PROFILE</a>
        <table class="table table-bordered table-striped">
            <thead>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Country</th>
            <th>City</th>
            <th>Photo</th>
            <th>Action</th>
            </thead>
            <?php
            $runQuery=mysqli_query($connect,"SELECT * FROM `my_users`");
            while($row=mysqli_fetch_assoc($runQuery)){?>

                <tbody>
                <td><?php echo $row['id']?></td>
                <td><?php echo ucwords($row['name']);?></td>
                <td><?php echo $row['email']?></td>
                <td><?php echo $row['country']?></td>
                <td><?php echo ucwords($row['city']);?></td>
                <td><img width="100px" src="user_image/<?php echo $row['photo']?>"/></td>
                <td><a class="btn btn-info editbtn" href="edit.php?id=<?php echo base64_encode($row['id'])?>">Edit</a> <br/><br/> <a class="btn btn-danger" href="delete core.php?id=<?php echo base64_encode($row['id'])?>">Delete</a></td>
                </tbody>

                <?php
            }
            ?>
        </table>
    </div>
</section>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>



