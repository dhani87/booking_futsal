<?php 
$conn = mysqli_connect("localhost", "root", "", "web");
$result = mysqli_query($conn, "SELECT * FROM signup");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Sign Up</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Gamja+Flower|Gugi" rel="stylesheet">
</head>
<nav class="navbar" style="background-color: white; color: black;">
		<div class="container-fluid">
			<div class="navbar-header"
			class="navbar-brand" href="#" style ="font-size: 20px;  margin-top: 10px;">
			<img src="logoo.png" style="width: 55px; height: auto; margin-bottom: 15px;">
			BOOKING ALTHEA FUTSAL

			</div>
			<ul class="nav navbar‐nav">
				<br>
				<br>
					<li><a href="signup.php" style="float: right;">Sign Up</a></li>
					<li><a href="login.php" style="float: right;">Login</a></li>
					<li><a href="Schedule.php" style="float: right;">Schedule</a></li>
					<li><a href="index.html" style="float: right;">Home</a></li>
			</ul>
	</div>
</nav>
<body class="mt-5" style="background-image: url(32.png); ">
<center>
	<div class="col-md-4 col-md-offset-4">
		<div style="margin-top: 70px;" class="panel panel-info">
			<div class="panel-heading" >
				<h2><b>SIGN UP</b></h2>
			</div>
			<div class="panel-body">
				<div class="alert alert-warning">
					Silahkan isi semua colom dibawah
			</div>
			<form class="form" method="post">
				<div class="input-group">
					<label class="input-group-addon">
						Email    : 
					</label>
					<input type="text" class="form-control " name="email" placeholder="email" required>	
				</div>
				<br>
				<div class="input-group">
					<label class="input-group-addon">
						Username        : 
					</label>
					<input type="text" class="form-control " name="username" placeholder="username" required>	
				</div>
				<br>
				<div class="input-group">
					<label class="input-group-addon">
						password      : 
					</label>
					<input type="password" class="form-control" name="password" placeholder="password" required>	
				</div>
				<br>
				<button name="signup" type="submit" class="btn btn-succes col-md-12" style="background-color: lightgreen;">sign up
				</button >
			</form>
		</div>
	</div>
	</div>
</center>	
</body>
</html>
			<?php 
	if (isset($_POST['signup'])) {
		$email = $_POST['email'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$password1 = password_hash($password, PASSWORD_DEFAULT);

		mysqli_query($conn, "INSERT INTO user (email, username, password) VALUES ('$email', '$username', '$password1')");
		echo "<script>alert('data telah dimasukan kedatabase');
			location='login.php';
		</script>";
	}
 ?>