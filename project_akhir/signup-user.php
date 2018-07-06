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