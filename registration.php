<?php
	$Write="<?php $" . "UIDresult=''; " . "echo $" . "UIDresult;" . " ?>";
	file_put_contents('UIDContainer.php',$Write);
?>

<!DOCTYPE html>
<html lang="en">
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<script src="js/bootstrap.min.js"></script>
		<link href="login/images/smart-id.png" rel="icon">
		<script src="jquery.min.js"></script>
		<script>
			$(document).ready(function(){
				 $("#getUID").load("UIDContainer.php");
				setInterval(function() {
					$("#getUID").load("UIDContainer.php");
				}, 500);
			});
		</script>
		
		<style>
		html {
			font-family: Arial;
			display: inline-block;
			margin: 0px auto;
		}
		
		textarea {
			resize: none;
		}

		ul.topnav {
			list-style-type: none;
			margin: auto;
			padding: 0;
			overflow: hidden;
			background-color: #4CAF50;
			width: 70%;
		}

		ul.topnav li {float: left;}

		ul.topnav li a {
			display: block;
			color: white;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
		}

		ul.topnav li a:hover:not(.active) {background-color: #3e8e41;}

		ul.topnav li a.active {background-color: #333;}

		ul.topnav li.right {float: right;}

		@media screen and (max-width: 600px) {
			ul.topnav li.right, 
			ul.topnav li {float: none;}
		}
		</style>
		
		<title>NFC-Based Student Smart Card</title>
	</head>
	
	<body>

		<!-- <h2 align="center">ACCESS WAVE CSTroll</h2> -->
		<h2  style="color: olive; text-align: center;">NFC-Based Student Smart Card</h2>
		<ul class="topnav">
			<li><a href="index.php">Home</a></li>
			<li><a href="user data.php">Students Data</a></li>
			<li><a class="active" href="registration.php">Registration</a></li>
			<li><a href="report.php">Report</a></li>
			<li id="logout"style="float: right; background-color: red; ">
			<a  href="login/logout.php">Logout</a></li>
		</ul>

		<div class="container">
			<br>
			<div class="center" style="margin: 0 auto; width:495px; border-style: solid; border-color: #f2f2f2;">
				<div class="row">
					<h3 align="center">Registration Form</h3>
				</div>
				<br>
				<form class="form-horizontal" action="insertDB.php" method="post"  enctype="multipart/form-data">
					<div class="control-group">
						<label class="control-label">Card ID</label>
						<div class="controls">
							<textarea name="id" id="getUID" placeholder="Please Scan your Card / Key Chain to display ID" rows="1" cols="1" required></textarea>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">Name</label>
						<div class="controls">
							<input id="div_refresh" name="name" type="text"  placeholder="" required>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">Year Of Study</label>
						<div class="controls">
							<select name="year_of_study">
								<option value="Year 4">Year 4</option>
								<option value="Year 3">Year 3</option>
								<option value="Year 2">Year 2</option>
								<option value="Year 1">Year 1</option>
							</select>
						</div>
					</div>
		
					
					<div class="control-group">
						<label class="control-label">Class</label>
						<div class="controls">
							<input name="class" type="text" placeholder="" required>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">Department</label>
						<div class="controls">
							<input name="department" type="text"  placeholder="" required>
						</div>
					</div>

					<div class="control-group">
						<label class="control-label">Photo</label>
						<div class="controls">
							<input type="file" id="file-input" name="photo" class="form-control-file">
						</div>
					</div>

					
					<div class="form-actions">
						<button type="submit" class="btn btn-success">Save</button>
                    </div>
				</form>
				
			</div>               
		</div> <!-- /container -->	
	</body>
</html>