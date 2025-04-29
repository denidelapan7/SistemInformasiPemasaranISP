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
	<script>
		window.print();
	</script>
</head>
<body>

	<h2>Laporan Registrasi</h2>
			<table class="table" border="1">
				<thead>
					<tr>
						<th>No</th>
						<th>ID Registrasi</th>
						<th>Nama Pelanggan</th>
						<th>Email</th>						
						<th>No. Telephone</th>
						<th>Permintaan PSB</th>
						<th>Paket Layanan</th>

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
						<td><?php echo $row['email'] ?></td>
						<td><?php echo $row['no_tlp'] ?></td>
						<td><?php echo $row['tgl_psb'] ?></td>
						<td><?php echo $row['bandwith'] ?></td>

					</tr>
				<?php } ?>
				</tbody>
			</table>

</body>
</html>