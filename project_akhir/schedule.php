<!DOCTYPE html>
<html>
<head>
  <title>Contoh Tabel Schedule</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<nav class="navbar" style="background-color: white; color: black; margin-top: 1px;">
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
<hr style="border-bottom: 2px solid black; margin-top: -20px;">
<body style="background-image: url(32.png);">

<div class="container">
  <?php 

$conn = mysqli_connect("localhost", "root", "", "web"); 


$result = mysqli_query($conn, "SELECT * FROM jadwal");

?>

<!DOCTYPE html>
<html>
<head>
  <title>Halaman Admin</title>
</head>
<body>

  <h1>Jadwal Futsal</h1>

<table border="1" cellpadding="10" cellspacing="0">
  
  <tr>
    <th>Kode Booking</th>
    <th>Jam</th>
    <th>Tanggal Booking</th>
    <th>Nama Pemesan</th>
    <th>Nama Lapangan</th>
  </tr>

  <?php while( $rows = mysqli_fetch_assoc($result)) { ?>
  <tr>
    <td><?= $rows['kode_booking'];?></td>
    <td><?= $rows['Jam'];?></td>
    <td><?= $rows['Tanggal_Booking'];?></td>
    <td><?= $rows['Nama_Pemesan'];?></td>
    <td><?= $rows['Nama_Lapangan'];?></td>

  </tr>
<?php } ?>
</table>
</body>
</  html>
</div>

</body>
</html>
