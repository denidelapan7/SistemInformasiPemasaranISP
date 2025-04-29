<?php 
	session_start();
	include 'koneksi.php';
	if($_SESSION['stat_login'] != true){
		$pelanggan = mysqli_query($conn, "SELECT * FROM tb_pendaftaran WHERE id_pendaftaran = '".$_GET['id']."'");
	    $p = mysqli_fetch_object($pelanggan);
		echo '<script>window.location="cetak-data-invoice.php"</script>';
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
		<h1>Data Calon Pelanggan</h1>
		<ul><h3>
			<li><a href="../beranda.php">Beranda</a></li>
			<li><a href="../Data-Proses-PSB/status.php">Status PSB</a></li>
		    <li><a href="../keluar.php">Keluar</a></li>
		<h3></ul>
	</header>
	<section class="content">
		<h2>Detail Customer</h2>
		<div class="box">
			<a href="cetak-pelanggan.php" target="_blank" class="btn-cetak">Print</a>
			<table class="table" border="1">
				<thead>
					<tr>
						<th>No</th>
						<th>ID Registrasi</th>
						<th>Nama Pelanggan</th>
						<th>Produk Layanan</th>
						<th>No. Telephone</th>
						<th>Permintaan PSB</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$no = 1;
						$list_pelanggan = mysqli_query($conn, "SELECT * FROM tb_pendaftaran");
						while($row = mysqli_fetch_array($list_pelanggan)){ 
					?>
					<tr>
						<td><?php echo $no++ ?></td>
						<td><?php echo $row['id_pendaftaran'] ?></td>
						<td><?php echo $row['nm_pelanggan'] ?></td>
						<td><?php echo $row['bandwith'] ?></td>
						<td><?php echo $row['no_tlp'] ?></td>
						<td><?php echo $row['tgl_psb'] ?></td>
						<td>
							
							
							<a href="detail-pelanggan.php?id=<?php echo $row['id_pendaftaran'] ?>">Proses PSB</a> ||
							<a href="hapus-pelanggan.php?id=<?php echo $row['id_pendaftaran'] ?>" onclick="return confirm('Anda ingin menghapus data yang dipilih?')">Hapus</a>					
			                
							
						</td>
					</tr>
				<?php } ?>
				</tbody>
			</table>
		</div>
	</section>

</body>
</html>