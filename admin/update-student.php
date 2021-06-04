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
  <title>Add Student</title>
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
	margin-top: 53px;
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
			  <a href="all-student.php" class="list-group-item list-group-item-action"><i class="fa fa-user"></i> All Students</a>
			  <a href="all-users.php" class="list-group-item list-group-item-action"><i class="fa fa-user"></i> All Users</a>
            </div>
		</div>
		<div class="col-sm-9">
		<h1 class="text-primary"><i class="fas fa-edit"></i> Update Student <small>Update Student</small></h1>
		<nav aria-label="breadcrumb">
        <ol class="breadcrumb">
		<li><a href="index.php?page=dashboard"><i class="fas fa-tachometer-alt"></i> Dashboard </a> </li>&nbsp;&nbsp;
		<li><a href="all-student.php"><i class="fa fa-user"></i> All Students </a> </li>&nbsp;&nbsp;
        <li class="breadcrumb-item active" aria-current="page">Update Student</li>
        </ol>
		
		<?php
		$id=base64_decode($_GET['id']);
        $db_data=mysqli_query($connect,"SELECT*FROM `student_info` WHERE `id`='$id'");
        $db_row=mysqli_fetch_assoc($db_data);
		?>
		
		    <div class="row">
	            <div class="col-sm-6">
				<?php
				if(isset($_REQUEST["right"])){
					echo "<font color='green'>Add Student Successfully Done !!</font>";
				}
				?>
		            <form action="update-student core.php" method="post" enctype="multipart/form-data">
					    
						<div class="form-group">
				            <label for="name"></label>
					        <input type="hidden" name="id" placeholder="Studentid" id="Sid" class="form-control" required value="<?=$db_row['id']?>"/>
				        </div>
					
			            <div class="form-group">
				            <label for="name">Student Name</label>
					        <input type="text" name="name" placeholder="Student Name" id="name" class="form-control" required value="<?=$db_row['name']?>"/>
				        </div>
						
						<div class="form-group">
				            <label for="roll">Student Roll</label>
					        <input type="text" name="roll" placeholder="Student roll" id="roll" class="form-control" pattern="[0-9]{6}" required value="<?=$db_row['roll']?>"/>
				        </div>
						
						<div class="form-group">
				            <label for="city">Student City</label>
					        <input type="text" name="city" placeholder="Student City" id="city" class="form-control" required value="<?=$db_row['city']?>"/>
				        </div>
						
						<div class="form-group">
				            <label for="pcontacts">Student Parents Contacts</label>
					        <input type="text" name="pcontacts" placeholder="Student pcontacts" id="pcontacts" class="form-control" pattern="01[1|5|6|7|8|9][0-9]{8}" required value="<?=$db_row['pcontacts']?>"/>
				        </div>
						
						<div class="form-group">
				            <label for="class">Student Class</label>
					        <select id="class" class="form-control" name="class" required value="<?=$db_row['class']?>">
							    <option value="">Select Class</option>
							    <option <?php echo $db_row['class']=='1st'?'selected=""':'';?> value="1st">1st</option>
							    <option <?php echo $db_row['class']=='2nd'?'selected=""':'';?> value="2nd">2nd</option>
							    <option <?php echo $db_row['class']=='3rd'?'selected=""':'';?> value="3rd">3rd</option>
							    <option <?php echo $db_row['class']=='4th'?'selected=""':'';?> value="4th">4th</option>
							    <option <?php echo $db_row['class']=='5th'?'selected=""':'';?> value="5th">5th</option>
							</select>
				        </div>
						<div class="form-group">
						    <input type="submit" value="Update Student" name="update" class="btn btn-primary"/>
						</div>
			        </form>
		        </div>
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