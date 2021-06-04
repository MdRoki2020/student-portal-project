<?php
require_once('config.php');

if(!isset($_COOKIE['currentUser'])){
    header("location:login.php");
}
?>
<!doctype html>
<html lang="en">
<head>
    <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">

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
        .hading h2 {
            font-weight: bold;
            color:white;
            margin-bottom: 30px;
        }
        body{
            background:#34495E;
            color:white;
        }
        header {
            background: beige;
            font-weight: bold;
        }
        header h1{
            font-weight:bold;
            color:black;
        }
        .paragraph {
            line-height: 30px;
        }
        footer {
            background: black;
            color: white;
        }
        footer {
            padding: 15px 10px;
        }
        .proPhoto {
            width: 160px;
            margin: auto;
            margin-top: 25px;
        }
        .proPhoto img {
            width: 100%;
            border: 1px solid white;
        }
        .photoName {
            margin-top: 10px;
            font-size: 22px;
            margin-bottom: 30px;
            text-align: center;
        }
        .photoName h2 {
            font-weight: 600;
            margin-bottom: 40px;
        }
        .post2 {
            margin-top: 65px;
            margin-bottom: 45px;
        }
        .comment a {
            color: white;
        }

        .comment {
            margin-top: 10px;
        }

        .share a {
            color: white;
        }

        .share {
            margin-top: 10px;
        }
        textarea.comment {
            margin-left: 15px;
            border: 2px solid #ff5200;
            border-radius: 5px;
            background: #ddd;
            transition:.4s;
        }
        textarea.comment:hover {
            transform: scale(1.1);
        }
        .navbarLastLi {
            margin-top: 7px;
            margin-left: 5px;
        }
        .navbarLastLi a {
            color: #00000078;
        }
        li.nav-item.logout {
            margin-top: 8px;
            margin-left: 5px;
        }
        li.nav-item.logout a {
            color: #8f8888;
        }
        li.nav-item.logout a:hover {
            text-decoration: none;
            color: darkolivegreen;
        }
    </style>
    <title>Profile</title>
</head>
<body>

<header class="header text-center">

    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light top-fixed">
            <a class="navbar-brand" href="#"><img  src=""/>PROFILE</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Registered</a>
                    </li>
                    <li class="nav-item logout">
                        <?php
                        if(isset($_COOKIE['currentUser'])){
                            echo "<a href='logout core.php'>Logout</a>";
                        }
                        ?>
                    </li>
            </div>
        </nav>
    </div>

</header>

<section>
    <?php
    if(isset($_COOKIE['currentUser'])){
        $crntUsr=$_COOKIE['currentUser'];

        $matchquery="SELECT * FROM `my_users` WHERE `email`='$crntUsr'";
        $runQuery=mysqli_query($connect,$matchquery);

        $row=mysqli_fetch_assoc($runQuery);
    }
    ?>

    <div class="proPhoto">

        <img class="img-fluid " src="user_image/<?php echo $row['photo']?>"/>
        <div class="photoName">
            <h1><?php echo ucwords($row['name']);?></h1>
        </div>
    </div>

    <div class="row post1">
        <div class="col-lg-4">

        </div>
        <div class="col-lg-4">

            <p>I Love Orange With Me !!</p>
            <img class="img-fluid" src="https://static.toiimg.com/photo/77220951.cms"/>
            <div class="row">

                <div class="col-lg-4 comment"><label id="like"><i class="far fa-thumbs-up"></i> Like</label></div>
                <div class="col-lg-4 comment"><a href="#"><i class="far fa-comments"></i> Comment</a></div>
                <div class="col-lg-4 share"><a href="#"><i class="fas fa-share"></i> Share</a></div>
                <textarea class="comment" name="comment" placeholder="Enter Your Comment" rows="1" cols="30"></textarea>

            </div>
        </div>
        <div class="col-lg-4">



        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">

        </div>
        <div class="col-lg-4 post2">

            <p>Orange Car. I Like This One !!</p>
            <img class="img-fluid" src="https://acuraconnected.com/wp-content/uploads/2019/10/acura_1280_2019_10_02_01.jpg"/>
            <div class="row">

                <div class="col-lg-4 comment"><label onclick="like()" id="like"><i class="far fa-thumbs-up"></i> Like</label> <span>1</span></div>
                <div class="col-lg-4 comment"><a href="#"><i class="far fa-comments"></i> Comment<a/></div>
                <div class="col-lg-4 share"><a href="#"><i class="fas fa-share"></i> Share</a></div>
                <textarea class="comment" name="comment" placeholder="Enter Your Comment" rows="1" cols="30"></textarea>
            </div>
        </div>

        <div class="col-lg-4">



        </div>
    </div>
</section>

<footer>
    <div class="container">&copy; <i>copyright roki 2021</i></div>
</footer>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>



