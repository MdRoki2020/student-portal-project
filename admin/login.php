<?php

    if(isset($_COOKIE["currentUser"])){
	header("location:index.php");
	}
	if(isset($_COOKIE['currentUser'])){
	$cookie=$_COOKIE['currentUser'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>login page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h1 class="text-center">Student Management system</h1>
	<br/>
        <div class="row">
            <div class="col-md-12">
			<h2 >Admin Login From</h2>
			<hr/>
			    <form action="login core.php" method="post" class="form-horizontal">
				    <div class="form-group">
				    <label for="username" class="control-label col-sm-1">username</label>
					<div class="col-sm-4">
					    <input class="form-control" id="username" type="username" name="username" placeholder="Enter Your username"/>
					</div>
				</div>
				<div class="form-group">
				    <label for="password" class="control-label col-sm-1">password</label>
					<div class="col-sm-4">
					    <input class="form-control" id="password" type="password" name="password" placeholder="Enter Your password"/>
					</div>
				</div>
				<div class="col-sm-4 col-sm-offset-1">
				    <input type="submit" value="Login" name="resistration" class="btn btn-primary"/>
				</div>
				<br/>
				<br/>
				<p>Hvn't an Account? <a href="resistration.php">resistration</a></p>
				</form>
			</div>
        </div>
		<hr/>
	    <footer><p>copyright &copy; <?php echo date('Y')?> all right reserved</p></footer>
</div>

</body>
</html> 