<?php $conn = mysqli_connect("localhost", "root", "", "web"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Gamja+Flower|Gugi" rel="stylesheet">
</head>
<nav class="navbar" style="background-color: white; color: black; margin-top: -10px;">
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
<body style="background-image: url(32.png); ">
	<center>
	<div class="col-md-4 col-md-offset-4">
		<div style="margin-top: 70px;" class="panel panel-info">
			<div class="panel-heading" >
				<h2><b>LOGIN</b></h2>
			</div>
			<div class="panel-body" >
			<form class="form" method="post" action="" >
				<div class="input-group">
					<label class="input-group-addon">
						username : 
					</label>
					<input type="text" class="form-control " name="username" placeholder="username" required>	
				</div>
				<br>
				<div class="input-group">
					<label class="input-group-addon">
						password : 
					</label>
					<input type="password" class="form-control" name="password" placeholder="password" required>	
				</div>
				<br>
				<button type="submit" name="login" class="btn btn-succes col-md-12" style="background-color: lightgreen;">login
				</button>
			</form>
		</div>
	</div>
	</div>
</center>
</body>
</html>


<?php 
		if (isset($_POST["login"])) {
			$username = $_POST["username"];
			$password = $_POST["password"];
			$result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
  			//cek username
			if (mysqli_num_rows($result)===1) {
   				 //cek password
				$row = mysqli_fetch_assoc($result);
				if(password_verify($password, $row["password"])){
      			//set sesion 
					$_SESSION['login_user'] = true;
					$_SESSION['uid'] = $row["id_user"];
					
					echo "<div class='row justify-content-center'>
					<div class='col-md-4'>
					<div class='alert alert-info'><p style='font-size: 14px;'>
					Login Berhasil</p>
					</div>
					</div>
					</div>";
					echo "<meta http-equiv='refresh' content='1;url=index.php?page=home'>";
				}
			}else{
				echo "<div class='row justify-content-center'>
				<div class='col-md-4'>
				<div class='alert alert-danger'><p style='font-size: 14px;'>
				Username dan Password yang kamu masukkan salah!</p>
				</div>
				</div>
				</div>";
			}
		}
		?>