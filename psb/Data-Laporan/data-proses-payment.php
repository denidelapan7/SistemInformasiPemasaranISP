<?php 

	include 'koneksi.php';

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PSB Online | Cetak Customer</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
<header>
		<h1>Status Proses Payment</h1>
		<ul><h3>
			<li><a href="../beranda.php">Beranda</a></li>
			<li><a href="../keluar.php">Keluar</a></li>
		</h3></ul>
	</header>
<section class="content">
		<h2>Data Customer Dalam Proses Aktivasi</h2>
		<div class="box">
			<a href="../Data-Proses-Laporan/cetak-data.php" target="_blank" class="btn-cetak">Print Laporan</a>
			<table class="table" border="1">
		<thead>
					<tr>
						<th>No</th>
						<th>Nama Pelanggan</th>
						<th>ID Pelanggan</th>
						<th>Email</th>						
						<th>No. Telephone</th>
						<th>Status PSB</th>
						<th>Status Payment PSB</th>

					</tr>
				</thead>
				<tbody>
					<?php
						$no = 1;
						$list_pelanggan = mysqli_query($conn, "SELECT * FROM tb_laporan");
						while($row = mysqli_fetch_array($list_pelanggan)){ 
					?>
					<tr>
						<<td><?php echo $no++ ?></td>
			            <td><?php echo $row['nama_pelanggan'] ?></td>
			            <td><?php echo $row['id_pelanggan'] ?></td>						
			            <td><?php echo $row['email'] ?></td>
			            <td><?php echo $row['no_tlp'] ?></td>
			            <td>Sudah Aktifasi <a><?php echo $row ['tgl_psb'] ?></a></td>
			            <td><a>Dalam Proses Finance</a></td>

					</tr>
				<?php } ?>
				</tbody>
			</table>

</body>
</html>