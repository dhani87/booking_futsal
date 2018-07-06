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
</html>