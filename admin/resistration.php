<!DOCTYPE html>
<html lang="en">
<head>
  <title>user resistration form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h1>User Resistration Form</h1>
	<hr/>
	<div class="row">
	    <div class="col-md-12">
		
		<?php
		if(isset($_REQUEST["right"])){
			echo "<font color='green'>Data Insert Successfully !!</font>";
		}
		?>
		
		    <form action="resistration core.php" method="post" enctype="multipart/form-data" class="form-horizontal">
			    <div class="form-group">
				    <label for="name" class="control-label col-sm-1">name</label>
					<div class="col-sm-4">
					    <input class="form-control" id="name" type="text" name="name" placeholder="Enter Your Name" required/>
					</div>
				</div>
				<div class="form-group">
				    <label for="email" class="control-label col-sm-1">email</label>
					<div class="col-sm-4">
					    <input class="form-control" id="email" type="email" name="email" placeholder="Enter Your email" required/>
					</div>
				</div>
				<div class="form-group">
				    <label for="username" class="control-label col-sm-1">username</label>
					<div class="col-sm-4">
					    <input class="form-control" id="username" type="username" name="username" placeholder="Enter Your username" required/>
					</div>
				</div>
				<div class="form-group">
				    <label for="password" class="control-label col-sm-1">password</label>
					<div class="col-sm-4">
					    <input class="form-control" id="password" type="password" name="password" placeholder="Enter Your password" required/>
					</div>
				</div>
				<div class="form-group">
				    <label for="c_password" class="control-label col-sm-1">conform password</label>
					<div class="col-sm-4">
					    <input class="form-control" id="c_password" type="password" name="c_password" placeholder="Enter Your conform password" required/>
					</div>
				</div>
				<div class="form-group">
				    <label for="photo" class="control-label col-sm-1">photo</label>
					<div class="col-sm-4">
					    <input id="photo" type="file" name="photo"/>
					</div>
				</div>
				<div class="col-sm-4 col-sm-offset-1">
				    <input type="submit" value="resistration" name="resistration" class="btn btn-primary"/>
				</div>
				<br/>
				<br/>
				<p>Have an Account <a href="login.php">Login</a></p>
			</form>
		</div>
	</div>
	<hr/>
	<footer><p>copyright &copy; <?php echo date('Y')?> all right reserved</p></footer>
</div>

</body>
</html> 