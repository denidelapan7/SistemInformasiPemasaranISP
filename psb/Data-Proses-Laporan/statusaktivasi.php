<!DOCTYPE html>
<html>
<?php 
	session_start();
	include 'koneksi.php';
	if($_SESSION['stat_login'] != true){
		$pelanggan = mysqli_query($conn, "SELECT * FROM tb_proses WHERE id_pendaftaran = '".$_GET['id']."'");
	    $p = mysqli_fetch_object($pelanggan);

	}

 ?>
<?php 
	include 'koneksi.php';
	if($_SESSION['stat_login'] != true){
		$pelanggan = mysqli_query($conn, "SELECT * FROM tb_laporan WHERE id_pembayaran = '".$_GET['id']."'");
	    $p = mysqli_fetch_object($pelanggan);
		echo '<script>window.location="cetakproses.php"</script>';
	}

 ?>


<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PSB Online | Admin Page</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<header>
		<h1>Status Aktivasi PSB</h1>
		<ul><h3>
			<li><a href="../beranda.php">Beranda</a></li>
			<li><a href="../keluar.php">Keluar</a></li>
		</h3></ul>
	</header>
	<section class="content">
		<h2>Data Customer Dalam Proses Aktivasi</h2>
		<div class="box">
			<a href="../Data-Proses-PSB/cetak-data.php" target="_blank" class="btn-cetak">Print Laporan</a>
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
							<a>Dalam Proses Technical Support</a>
								
						<td><a href="../Data-Proses-PSB/update-aktivasi.php?id=<?php echo $row['id_pelanggan'] ?>">Update Aktivasi</a></td>
							
						</td>
					</tr>
				<?php } ?>
				</tbody>
			</table>
		</div>
	</section>
	<section class="content">
		<h2>Data Customer Sudah Aktivasi</h2>
		<div class="box">
			<a href="cetak-data.php" target="_blank" class="btn-cetak">Print Laporan</a>
			<a href="../Data-Laporan/index.php" target="_blank" class="btn-cetak">Cari Data</a>
			<table class="table" border="1">
				<thead>
					<tr>
						<th>No</th>
						<th>ID Pelanggan</th>
						<th>Nama Pelanggan</th>
						<th>Email</th>
						<th>No. Telephone</th>
						<th>Alamat Pelanggan</th>
						<th>Status PSB</th>
						<th>File</th>
						<th>Aksi</th>
						
					</tr>
				</thead>
				<tbody>
					<?php
						$no = 1;
						$list_pelanggan = mysqli_query($conn, "SELECT * FROM tb_laporan");
						while($row = mysqli_fetch_array($list_pelanggan)){ 
					?>
					<tr>
						<td><?php echo $no++ ?></td>
						<td><?php echo $row['id_pelanggan'] ?></td>
						<td><?php echo $row['nama_pelanggan'] ?></td>
						<td><?php echo $row['email'] ?></td>
						<td><?php echo $row['no_tlp'] ?></td>
						<td><?php echo $row['alamat_pelanggan'] ?></td>
						

					
						<td>
							<a>Sudah Aktivasi</a>
						<td><a href="../Data-Proses-Laporan/invoice.php?id=<?php echo $row['id_pembayaran'] ?>"target="_blank">INVOICE</a></td>
						<td><a href="../mail/email-invoice.php?id=<?php echo $row['id_pembayaran'] ?>">Kirim Invoice</a></td>
							
						</td>
					</tr>
				<?php } ?>
				</tbody>
			</table>
		</div>
	</section>
</body>

</html>