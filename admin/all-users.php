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
              <a href="index.php" class="list-group-item list-group-item-action " aria-current="true"><i class="fas fa-tachometer-alt"></i>  Dashboard</a>
			  <a href="add-student.php" class="list-group-item list-group-item-action"><i class="fa fa-user-plus"></i> Add Student</a>
			  <a href="all-student.php" class="list-group-item list-group-item-action "><i class="fa fa-user"></i> All Students</a>
			  <a href="all-users.php" class="list-group-item list-group-item-action active"><i class="fa fa-user"></i> All Users</a>
</div>
		</div>
		<div class="col-sm-9">
		    <div class="contant">
			<h1 class="text-primary"><i class="fa fa-user"></i> All Users <small>Users Overview</small></h1>
				<nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">All Users</li>
                    </ol>
					<div class="table-responsive">
					    <table id="data" class="table table-hover table-bordered table-striped" style="width:100%">
					    <thead>
						    <tr>
							    <th>Name</th>
							    <th>Email</th>
							    <th>User Name</th>
							    <th>Photo</th>
							    <th>Action</th>
							</tr>
						</thead>
						<tbody>
						<?php
						$showDataQuery=mysqli_query($connect,"SELECT * FROM `users`");
						while($row = mysqli_fetch_assoc($showDataQuery)){?>
						
						
						    <tr>
							    <td><?php echo $row['name'];?></td>
							    <td><?php echo $row['email']?></td>
							    <td><?php echo $row['username']?></td>
							    <td><img style="width:100px" src="student_images/<?php echo $row['photo'];?>"/></td>
								<td>
								<a href="update-student.php?id=<?php echo base64_encode($row['id']);?>" class="btn btn-warning"><i class="fas fa-edit"></i> Edit</a>
								</td>
							</tr>
						<?php
							
						}
						?>
						</tbody>
					    </table>
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