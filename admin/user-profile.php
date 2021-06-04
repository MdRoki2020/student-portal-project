<?php
require_once("dbcon.php");

if(!isset($_COOKIE["currentUser"])){
	header("location:login.php");
}

if(isset($_COOKIE['currentUser'])){
	$cookie=$_COOKIE['currentUser'];
}
?>

 <!DOCTYPE html>
<html lang="en">
<head>
  <title>Ms</title>
  <style>
    .count.text-warning {
    margin-left: 180px;
    font-weight: 700;
    }
    .students.text-warning {
    margin-left: 151px;
    }
	span.icon {
    margin-left: 237px;
    }
	a.info {
    color: #ffb400;
    }
	footer.footerAria.bg-primary {
    color: #ffb400;
    text-align: center;
    padding: 16px 0px 1px 0px;
    }
	footer.footerAria.bg-primary a{
	color:#ffb400;
	}
	.contant{
	min-height:620px;
	}
  </style>
    <!-- start font awesome cdn -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
	<!-- end font awesome cdn -->
	<!-- bootstap cdn -->
	<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
	


    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- bootstap cdn -->
	
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
	<script type="text/javascript" src="../js/script.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">SMS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#"><i class="fa fa-user"></i> Welcome- <?php echo $cookie?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa fa-user-plus"></i> Add User</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="user-profile.php"><i class="fa fa-user"></i>  Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout core.php"><i class="fa fa-power-off"></i> Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container-fluid">
    <div class="row">
	    <div class="col-sm-3">
		    <div class="list-group">
              <a href="index.php" class="list-group-item list-group-item-action active" aria-current="true"><i class="fas fa-tachometer-alt"></i>  Dashboard</a>
			  <a href="add-student.php" class="list-group-item list-group-item-action"><i class="fa fa-user-plus"></i> Add Student</a>
			  <a href="all-student.php" class="list-group-item list-group-item-action"><i class="fa fa-user"></i> All Students</a>
			  <a href="all-users.php" class="list-group-item list-group-item-action"><i class="fa fa-user"></i> All Users</a>
            </div>
		</div>
		<div class="col-sm-9">
		    <div class="contant">
			    <h1 class="text-primary"><i class="fa fa-user"></i> User Profile <small>My Profile</small></h1>
				<nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <a href="index.php"><li class="breadcrumb-item active" aria-current="page">Dashboard</li></a>&nbsp;&nbsp;
                        <li class="breadcrumb-item" aria-current="page">Profile</li>
                    </ol>
					<?php
					    if(isset($_COOKIE['currentUser'])){
						$crntusr=$_COOKIE['currentUser'];
							
					    $usr_data=mysqli_query($connect,"SELECT * FROM `users` WHERE `username`='$crntusr'");
						$usr_row=mysqli_fetch_assoc($usr_data);
                        
				       }
					?>
					
					<hr>
					<div class="row">
					    <div class="col-sm-6">
						    <table class="table table-bordered">
							    <tr>
								    <td>user Id</td>
								    <td><?php echo $usr_row['id']; ?></td>
								</tr>
								<tr>
								    <td>Name</td>
								    <td><?php echo ucwords($usr_row['name']); ?></td>
								</tr>
								<tr>
								    <td>User Name</td>
								    <td><?php echo $usr_row['username']; ?></td>
								</tr>
								<tr>
								    <td>Email</td>
								    <td><?php echo $usr_row['email']; ?></td>
								</tr>
								<tr>
								    <td>Status</td>
								    <td><?php echo $usr_row['status']; ?></td>
								</tr>
								<tr>
								    <td>Signup Date</td>
								    <td><?php echo $usr_row['submit_time']; ?></td>
								</tr>
							</table>
							<a href="#" class="btn btn-primary">Edit Profile</a>
						</div>
						<div class="col-sm-6">
						    <div class="col-sm-4">
							    <a href="#">
						        <img class="img-fluid max-width:100% img-thumbnail" src="images/<?php echo $usr_row['photo']?>"/>
						        </a>
								<br/>
								<br/>
								<?php
								
								if(isset($_POST["upload"])){
									$photo=explode(".",$_FILES["photo"]["name"]);
                                    $photo=end($photo);
                                    $photo_name=$crntusr.".".$photo;
									$upload=mysqli_query($connect,"UPDATE `users` SET `photo`='$photo_name' WHERE `username`='$crntusr'");
									
									if($upload==true){
	                                move_uploaded_file($_FILES['photo']['tmp_name'],'images/'.$photo_name);
                                    }

								}
								
								?>
								
								<form action="" enctype="multipart/form-data" Method="POST">
								<label class="text-center" for="photo">Profile Picture</label>
								<input type="file" name="photo" id="photo" required/>
								<br/>
								<br/>
								<input class="btn btn-primary" type="submit" value="upload" name="upload"/>
								</form>
							</div>
						    <div class="col-sm-2">
							
							</div>
						</div>
					</div>		
                </nav>
			</div>
		</div>
	</div>
</div>
<footer class="footerAria bg-primary">
<p>&copy; <a href="http//:rsroki.info">Copyright Rs Roki Website</a></p>
</footer>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>
</html>