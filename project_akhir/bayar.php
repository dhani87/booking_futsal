
<!doctype html>
<html lang="en">
  <head>
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

  <body class="bg-light">

    <div class="container">
      <div class="py-5 text-center">
        
        <h2>Silahkan isi data transaksi dibawah ini</h2>
        <br>
      </div>
          <h4 class="mb-3">Booking address</h4>
          <br>
            <div class="mb-3">
                <label for="firstName">Masukkan Nama</label>
                <input type="text" class="form-control" id="bookingadress" placeholder="" value="" required>
              </div>

            <div class="mb-3">
              <label for="email">Email </label>
              <input type="email" class="form-control" id="email" placeholder="you@gmail.com">
              <div class="invalid-feedback">
              </div>
            </div>

            <div class="mb-3">
              <label for="address">Alamat</label>
              <input type="text" class="form-control" id="alamat" placeholder="Jl.Semarang no 42" required>
              <div class="invalid-feedback">
              </div>
            </div>
            <hr class="mb-4">

            <h4 class="mb-3">Transaksi</h4>

            <div class="d-block my-3">
              <div class="custom-control custom-radio">
                <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked=""  value="Bank BRI" required="">
                <label class="custom-control-label" for="credit">BRI</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" checked=""  value="Bank BNI" required="">
                <label class="custom-control-label" for="debit">BNI</label>
              </div>
              <div class="d-block my-3">
              <div class="custom-control custom-radio">
                <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked=""  value="Bank BCA" required="">
                <label class="custom-control-label" for="credit">BCA</label>
              </div>
              <div class="d-block my-3">
              <div class="custom-control custom-radio">
                <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked=""  value="Bank Mandiri" required="">
                <label class="custom-control-label" for="credit">Mandiri</label>
              </div>
              <div class="d-block my-3">
              <div class="custom-control custom-radio">
                <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked=""  value="Bank Danamon " required="">
                <label class="custom-control-label" for="credit">Danamon</label>
              </div>
  
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
          </form>
        </div>
      </div>

  </body>
</html>

<?php 

  // kode transaksi
$angka=range(0,9); //code dibuat dari angka 0-9
shuffle($angka); //untuk mengacak angka
$ambilangka=array_rand($angka,8); //pengambilan angka sebanyak 6 digit
$angkastring=implode($ambilangka); //membuat angka-angka yang digenerate dipisahkan dengan -
$code=$angkastring;
$string = 'KB';

 ?>