<?php 

	include 'koneksi.php';
	if(isset($_POST['submit'])){

		$getMaxId = mysqli_query($conn, "SELECT MAX(RIGHT(id_pendaftaran, 5)) AS id FROM tb_pendaftaran");
		$d = mysqli_fetch_object($getMaxId);
		$generateId = 'P'.date('Y').sprintf("%05s", $d->id + 1);

		$insert = mysqli_query($conn, "INSERT INTO tb_pendaftaran VALUES (
			'".$generateId."',
			'".date('Y-m-d')."',
			'".$_POST['email']."',
			'".$_POST['layanan']."',
			'".$_POST['nm_pelanggan']."',
			'".$_POST['no_tlp']."',
			'".$_POST['tgl_psb']."', 
			'".$_POST['jk']."',
			'".$_POST['bandwith']."',
			'".$_POST['almt_pelanggan']."'
		)");

		if($insert){
			echo '<script>window.location="berhasil.php?id='.$generateId.'"</script>';
		}else{
			echo 'Error'.mysqli_error($conn);
		}

	}
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

		<h2>Service Order Form</h2>
        <form action="kirim.php" method="post">
		<form action="" method="post">			
			<div class="box">
				<table border="0" class="table-form">
					<tr>
						<td>Email</td>
						<td>:</td>
						<td>
							<input type="text" name="email" class="input-control" >
						</td>
					</tr>
					<tr>
						<td>Paket Layanan</td>
						<td>:</td>
						<td>
							<select class="input-control" name="layanan">
								<option value="">--Pilih Layanan--</option>
								<option value="Internet Home">Internet Home</option>
								<option value="Internet Business">Internet Business</option>
							</select>
						</td>
					</tr>
				</table>
			</div>

			<h3> Customer Detail</h3>
			<div class="box">
				<table border="0" class="table-form">
					<tr>
						<td>Nama Lengkap</td>
						<td>:</td>
						<td>
							<input type="text" name="nm_pelanggan" class="input-control" >
						</td>
					</tr>
					<tr>
						<td>No Tlp.</td>
						<td>:</td>
						<td>
							<input type="text" name="no_tlp" class="input-control" >
						</td>
					</tr>
					<tr>
						<td>Tanggal Instalasi PSB</td>
						<td>:</td>
						<td>
							<input type="date" name="tgl_psb" class="input-control" >
						</td>
					</tr>
					<tr>
						<td>Jenis Kelamin</td>
						<td>:</td>
						<td>
							<input type="radio" name="jk" class="input-control" value="Laki-laki"> Laki-laki
							<input type="radio" name="jk" class="input-control" value="Perempuan"> Perempuan
						</td>
					</tr>
					<tr>
						<td>Paket Banwidth</td>
						<td>:</td>
						<td>
							<select class="input-control" name="bandwith">
								<option value="">--Pilih Banwidth--</option>
								<option value="10 Mbps Rp. 165.000">Home 10 Mbps Rp. 165.000</option>
								<option value="30 Mbps Rp. 350.000">Home 30 Mbps Rp. 350.000</option>
								<option value="50 Mbps Rp. 550.000">Home 50 Mbps Rp. 550.000</option>
								<option value="100 Mbps ">Business 100 Mbps Dedicated </option>
								<option value="200 Mbps ">Business 200 Mbps Dedicated </option>
								<option value="Custom">Custom</option>
							</select>
						</td>
						</tr>
					<tr>
						<td>Alamat Lengkap</td>
						<td>:</td>
						<td>
							<textarea class="input-control" name="almt_pelanggan"></textarea>
						</td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>
							<input type="submit" name="submit" class="btn-daftar" value="Daftar">
						</td>
					</tr>
				</table>
			</div>
		</form>

	</section>

</body>
</html>