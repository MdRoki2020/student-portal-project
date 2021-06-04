<?php
require_once("admin/dbcon.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>index</title>
  </head>
  <body>
  
    <section>
	    <div class="container">
		    <div class="row">
			    <div class="col-lg-3">
				
				</div>
				<div class="col-lg-3">
				
				</div>
				<div class="col-lg-3">
				
				</div>
				<div class="col-lg-3">
				<a href="admin/login.php"><button class="mt-4 btn btn-primary">Login Admin</button></a>
				</div>
			</div>
			<div class="text-center mb-4">
			    <h2>Welcome TO Student Management System</h2>
			</div>
			<div class="row">
				<div class="col-lg-4"></div>
				<div class="col-lg-4">
				<form action="" method="post">
				    <table class="table table-bordered">
					    <tr>
						    <td class="text-center" colspan="2"><span>Student Information</span></td>
						</tr>
						
						<tr>
						    <td><span>Id</span></td>
							<td><input type="text" name="id" placeholder="Please Enter Id Number" /></td>
						</tr>
						
						<tr>
						    <td class="text-center" colspan="2"><input type="submit" value="show information" name="show_info"></input></td>
						</tr>
					</table>
				</form>
				</div>
				<div class="col-lg-4"></div>
			</div>
			
			<br/><br/>
			
			<?php
			if(isset($_POST["show_info"])){
				
				$id=$_POST["id"];
				
				$query=mysqli_query($connect ,"SELECT * FROM `student_info` WHERE `id`=$id");
				
				if(mysqli_num_rows($query)==1){
					$row=mysqli_fetch_assoc($query);

					?>
					<div class="row">
			        <div class="col-sm-6 col-sm-offset-3">
			            <table class="table table-bordered">
					            <tr>
						        <td rowspan="8"><img style="width:150px" class="img-thumbnail" src="admin/student_images/<?php echo $row['photo']?>"/></td>
								<tr>
								<th>Id</th>
								<td><?php echo $row['id']?></td>
								</tr>
						        <th>Name</th>
								<td><?php echo ucwords($row['name'])?></td>
								</tr>
								<tr>
								<th>Roll</th>
								<td><?php echo $row['roll']?></td>
								</tr>
								<tr>
								<th>Class</th>
								<td><?php echo $row['class']?></td>
								</tr>
								<tr>
								<th>parents Contacts</th>
								<td><?php echo $row['pcontacts']?></td>
								</tr>
								<tr>
								<th>City</th>
								<td><?php echo ucwords($row['city'])?></td>
						        </tr>
								<tr>
								<th>Date And Time</th>
								<td><?php echo ucwords($row['datetime'])?></td>
						        </tr>
					    </table>
			        </div>
			    </div>
					
					
					<?php
				}else{
					?>
					<script type="text/javascript">
					
					alert("Data Not Found");
					</script>
					
					<?php
				}
			}
				
				?>
			
					
					
		</div>
		
		
	</section>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

  </body>
</html>
