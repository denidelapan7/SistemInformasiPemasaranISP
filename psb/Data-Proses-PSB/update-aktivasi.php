<?php include('../Data-Proses-PSB/data-show.php') ?>


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
		<h1>Proses Update Data Aktivasi</h1>
		<ul>
			<li><a href="../beranda.php"><h3>Beranda</h3></a></li>
			<li><a href="../Data-Proses-Laporan/statusaktivasi.php"><h3>Status Aktifasi PSB</h3></a></li>
			<li><a href="../keluar.php"><h3>Keluar</h3></a></li>
		</ul>
	</header>
	 <form action="../Data-Proses-PSB/store-data.php" method="post">
	 <section class="content">
           <div class="content">
		   <div class="box">
		   <table class="table-cetak" border="0">
	&nbsp;<h3>Detail Customer</h3>
		<tr>
			<td>ID Pelanggan</td>
			<td>:</td>
			<td><input type="text" class="table" name="id_pelanggan"value="<?php echo $p->id_pelanggan ?>"readonly></td>
		</tr>
		<tr>
			<td>Nama Pelanggan</td>
			<td>:</td>
			<td><input type="text" class="table" name="nama_pelanggan" value="<?php echo $p->nama_pelanggan ?>"readonly></td>
		</tr>
		<tr>
			<td>Email</td>
			<td>:</td>
			<td><input type="text" class="table" name="email" value="<?php echo $p->email_pelanggan ?>"readonly></td>
		</tr>
		<tr>
			<td>Nama Layanan</td>
			<td>:</td>
			<td><input type="text" class="table" name="layanan" value="<?php echo $p->layanan_pelanggan ?>"readonly></td>
		</tr>
		<tr>
			<td>No Tlp.</td>
			<td>:</td>
			<td><input type="text" class="table" name="no_tlp" value="<?php echo $p->no_tlp_pelanggan ?>"readonly></td>
		</tr>
		<tr>
			<td>Tanggal Instalasi PSB</td>
			<td>:</td>
			<td><input type="date" class="table" name="tgl_psb" value="<?php echo $p->tgl_psb_pelanggan ?>"></td>
		</tr>
		<tr>
			<td>Paket Layanan</td>
			<td>:</td>
			<td><input type="text" class="table" name="bandwith" value="<?php echo $p->bandwith_pelanggan ?>"readonly></td>
		</tr>
		<tr>
			<td>Alamat Lengkap</td>
			<td>:</td>
			<td><input type="text" class="table" name="alamat_pelanggan" value="<?php echo $p->alamat_pelanggan ?>"readonly></td>
		</tr>
	</table>
	<pre> <h3> </h3></pre>
	<pre> <h4> </h4></pre>
		<tr>
		
		<td><input type="submit" name="submit" class="btn-daftar" value="Update"></td>
		</tr>
</body>
</html>