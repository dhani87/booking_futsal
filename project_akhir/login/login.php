<?php 

$conn = mysqli_connect("localhost", "root", "", "web"); 


$result = mysqli_query($conn, "SELECT * FROM login");

?>



<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
</head>

<body style="background-image: url(3.jpg); ">
	<center>
	<div class="col-md-4 col-md-offset-4">
		<div style="margin-top: 70px;" class="panel panel-info">
			<div class="panel-heading" >
				<h2><b>LOGIN</b></h2>
			</div>
			<div class="panel-body">
				<div class="alert alert-warning">
					Masukkan username dan password anda dengan benar.
			</div>
			<form class="form">
				<div class="input-group">
					<label class="input-group-addon">
						username : 
					</label>
					<input type="text" class="form-control " placeholder="username" required>	
				</div>
				<br>
				<div class="input-group">
					<label class="input-group-addon">
						password : 
					</label>
					<input type="password" class="form-control" placeholder="password" required>	
				</div>
				<br>
				<a href="home.html"type="submit" class="btn btn-succes col-md-12" style="background-color: lightgreen;">login
				</a>
			</form>
		</div>
	</div>
	</div>
</center>
</body>
</html>