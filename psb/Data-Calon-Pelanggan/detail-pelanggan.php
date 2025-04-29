<?php include('../Data-Calon-Pelanggan/show.php') ?>
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
		<h1>Proses Data PSB</h1>
		<ul>
			<li><a href="../beranda.php"><h3>Beranda</h3></a></li>
			<li><a href="../Data-Calon-Pelanggan/data-pelanggan.php"><h3>Data Calon Pelanggan</h3></a></li>
			<li><a href="../keluar.php"><h3>Keluar</h3></a></li>
		</ul>
	</header>
	<form action="../Data-Calon-Pelanggan/store.php" method="post">
	<section class="content">
           <div class="content">
		   <div class="box">
		   <h2>Detail Customer</h2>
			<table class="table-cetak" border="0">
				<tr>
					<td>ID Regsistrasi</td>
					<td>:</td>
					<td><input type="text" class="table" name="id_pendaftaran"value="<?php echo $p->id_pendaftaran ?>"readonly></td>
				</tr>
				<tr>
					<td>Email</td>
					<td>:</td>
					<td><input type="text" class="table" name="email_pelanggan" value="<?php echo $p->email ?>"readonly></td>
				</tr>
				<tr>
					<td>Layanan</td>
					<td>:</td>
					<td><input type="text" class="table" name="layanan_pelanggan" value="<?php echo $p->layanan ?>"readonly></td>
				</tr>
				<tr>
					<td>Nama Lengkap</td>
					<td>:</td>
					<td><input type="text" class="table" name="nama_pelanggan" value="<?php echo $p->nm_pelanggan ?>"readonly></td>
				</tr>
				<tr>
					<td>No. Telephone</td>
					<td>:</td>
					<td><input type="text" class="table" name="no_tlp_pelanggan" value="<?php echo $p->no_tlp ?>"readonly></td>
				</tr>
				<tr>
					<td>Tanggal Permintaan Instalasi PSB</td>
					<td>:</td>
					<td><input type="date" class="table" name="tgl_psb_pelanggan" value="<?php echo $p->tgl_psb ?>"readonly></td>
				</tr>
				<tr>
					<td>Jenis Kelamin</td>
					<td>:</td>
					<td><input type="text" class="table" name="jk_pelanggan" value="<?php echo $p->jk ?>"readonly></td>
				</tr>
				<tr>
					<td>Kebutuhan Layanan</td>
					<td>:</td>
					<td><input type="text" class="table" name="bandwith_pelanggan" value="<?php echo $p->bandwith ?>"readonly></td>
				</tr>
				<tr>
					<td>Alamat Lengkap Instalasi PSB</td>
					<td>:</td>
					<td><input type="text" class="table" name="alamat_pelanggan" value="<?php echo $p->almt_pelanggan ?>"readonly></td>
				</tr>
				<td>
			</table>
			<pre> <h4> </h4></pre>
						<td><input type="submit" name="submit" class="btn-daftar" value="Proses Data Laporan Technical Support"></td>
						</td>
		</div>
	</section>
	
</body>
</html>