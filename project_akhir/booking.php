<!DOCTYPE html>
<html>
<head>
  <title>booking</title>
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
          <li><a href="index.html" style="float: right;">Log Out</a></li>
          <li><a href="contact.html" style="float: right;">Contact</a></li>
          <li><a href="payment.html" style="float: right;">Booking Step</a></li>
          <li><a href="home.html" style="float: right;">Home</a></li>
      </ul>
  </div>
</nav>
<hr style="border-bottom: 2px solid black; margin-top: -20px;">
<body style="background-image: url(32.png);">


<div class="container" style="margin-top: -10px;">
  <h2>BOOKING</h2>
  <form class="form-horizontal" method="post" action="" style="margin-top: 20px; ">
    <div class="form-group">
      <label class="control-label col-sm-2">Nama Pemesan :</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="nama_pemesan" required>
      </div>
    </div>
    <form class="form-horizontal" action="/action_page.php">
    <div class="form-group">
      <label class="control-label col-sm-2">Alamat :</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="alamat" required>
      </div>
    </div>
    <form class="form-horizontal" action="/action_page.php">
    <div class="form-group">
      <label class="control-label col-sm-2">Kode Lapangan :</label>
      <div class="col-sm-10">
        <select class="form-control" id="sel1" name="kode">
        <option value="A">A</option>
        <option value="B">B</option>
      </select>
      </div>
    </div>
    <form class="form-horizontal" action="/action_page.php">
    <div class="form-group">
      <label class="control-label col-sm-2">Tanggal Booking :</label>
      <div class="col-sm-10">
        <input type="date" class="form-control" name="tanggal" placeholder="Cth : 07/08/2018" required>
      </div>
    </div>
    <form class="form-horizontal" action="/action_page.php">
    <div class="form-group">
      <label class="control-label col-sm-2">Jam Mulai :</label>
      <div class="col-sm-10">
        <select class="form-control" id="sel1" name="jam">
        <option value="08.00">08.00</option>
        <option value="09.00">09.00</option>
        <option value="10.00">10.00</option>
        <option value="11.00">11.00</option>
        <option value="12.00">12.00</option>
        <option value="13.00">13.00</option>
        <option value="14.00">14.00</option>
        <option value="15.00">15.00</option>
        <option value="16.00">16.00</option>
        <option value="17.00">17.00</option>
        <option value="18.00">18.00</option>
        <option value="19.00">19.00</option>
        <option value="20.00">20.00</option>
        <option value="21.00">21.00</option>
      </select>
      </div>
    </div>
    <form class="form-horizontal" action="/action_page.php">
    <div class="form-group">
      <label class="control-label col-sm-2">Jam Selesai  :</label>
      <div class="col-sm-10">
         <select class="form-control" id="sel1" name="lama">
        <option value="09.00">09.00</option>
        <option value="10.00">10.00</option>
        <option value="11.00">11.00</option>
        <option value="12.00">12.00</option>
        <option value="13.00">13.00</option>
        <option value="14.00">14.00</option>
        <option value="15.00">15.00</option>
        <option value="16.00">16.00</option>
        <option value="17.00">17.00</option>
        <option value="18.00">18.00</option>
        <option value="19.00">19.00</option>
        <option value="20.00">20.00</option>
        <option value="21.00">21.00</option>
        <option value="22.00">22.00</option>
      </select>
      </div>
    </div>
    <form class="form-horizontal" action="/action_page.php">
    <div class="form-group">
      <label class="control-label col-sm-2">DP(Rp.) :</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="dp" placeholder="Jika di Lunasi, Isi Sesuai dengan Biaya" required>
      </div>
    </div>
    <!--form class="form-horizontal" action="/action_page.php">
    <div class="form-group">
      <label class="control-label col-sm-2">Sisa Bayar(Rp.) :</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" required>
      </div>
    </div-->
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">   
       <button type="submit" name="submit" class="btn btn-info">Submit</button>
       
      </div>
    </div>
  </form>
</div>

</body>
</html>


<?php 
$conn = mysqli_connect("localhost", "root", "", "web");

if (isset($_POST['submit'])) {
  $nama_pemesan = $_POST['nama_pemesan'];
  $alamat = $_POST['alamat'];
  $kode = $_POST['kode'];
  $tanggal = $_POST['tanggal'];
  $jam = $_POST['jam'];
  $lama = $_POST['lama'];
  $dp = $_POST['dp'];

  mysqli_query($conn, "INSERT INTO booking (nama_pemesan, alamat, kode, tanggal, jam, lama, dp) VALUES ('$nama_pemesan', '$alamat', '$kode', '$tanggal', '$jam', '$lama', '$dp')");

    echo "<script>alert('Booking Telah Di proses'); location='bayar.php';</script>";
}
?>