<?php 

	include 'koneksi.php';

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PSB Online</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<section class="box-formulir">

		<h2>Registrasi Berhasil</h2>

		<div class="box">
			<h4>Kode Registrasi Anda adalah <?php echo $_GET['id'] ?></h4>
			<a href="../registrasi/cetak.php?id=<?php echo $_GET['id'] ?>" class="btn-cetak">Cetak Bukti Registrasi</a>
		</div>

	</section>

</body>
</html>