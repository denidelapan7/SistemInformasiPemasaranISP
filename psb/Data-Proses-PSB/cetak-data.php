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

	<h2>Laporan Proses PSB</h2>
			<table class="table" border="1">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama Pelanggan</th>
						<th>ID Registrasi</th>
						<th>Email</th>						
						<th>No. Telephone</th>
						<th>Paket Layanan</th>
						<th>Status PSB</th>

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
						<td><?php echo $row['id_pelanggan'] ?></td>						
						<td><?php echo $row['email_pelanggan'] ?></td>
						<td><?php echo $row['no_tlp_pelanggan'] ?></td>
						<td><?php echo $row['bandwith_pelanggan'] ?></td>
						<td>Dalam Proses</td>

					</tr>
				<?php } ?>
				</tbody>
			</table>

</body>
</html>