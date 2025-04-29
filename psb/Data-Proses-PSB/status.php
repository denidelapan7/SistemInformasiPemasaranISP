<?php 
	session_start();
	include 'koneksi.php';
	if($_SESSION['stat_login'] != true){
		$pelanggan = mysqli_query($conn, "SELECT * FROM tb_proses WHERE id_pendaftaran = '".$_GET['id']."'");
	    $p = mysqli_fetch_object($pelanggan);

	}

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PSB Online | Admin Page</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<header>
		<h1>Status PSB</h1>
		<ul><h3>
			<li><a href="../beranda.php">Beranda</a></li>
			<li><a href="../Data-Proses-Laporan/statusaktivasi.php">Status Aktivasi PSB</a></li>
			<li><a href="../keluar.php">Keluar</a></li>
		</h3></ul>
	</header>
	<section class="content">
		<h2>Detail Customer</h2>
		<div class="box">
			<a href="cetak-data.php" target="_blank" class="btn-cetak">Print</a>
			<table class="table" border="1">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama Pelanggan</th>
						<th>ID Registrasi</th>
						<th>Paket Layanan</th>
						<th>No. Telephone</th>
						<th>Email</th>
						<th>Status PSB</th>
						<th>Aksi</th>
						
					</tr>
				</thead>
				<tbody>
					<?php
						$no = 1;
						$list_pelanggan = mysqli_query($conn, "SELECT * FROM tb_proses");
						while($row = mysqli_fetch_array($list_pelanggan)){ 
					?>
					<tr>
						<td><?php echo $no++ ?></td>
						<td><?php echo $row['nama_pelanggan'] ?></td>
						<td><?php echo $row['id_pendaftaran'] ?></td>
						<td><?php echo $row['bandwith_pelanggan'] ?></td>
						<td><?php echo $row['no_tlp_pelanggan'] ?></td>
						<td><?php echo $row['email_pelanggan'] ?></td>

						

					
						<td>
							<a>Dalam Proses Verifikasi Data Customer</a>
								
						<td><a href="../Data-Proses-Laporan/statusaktivasi.php?id=<?php echo $row['id_pelanggan'] ?>">Proses Aktivasi PSB</a></td>
							
						</td>
					</tr>
				<?php } ?>
				</tbody>
			</table>
		</div>
	</section>

</body>
</html>