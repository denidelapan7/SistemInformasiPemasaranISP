<?php 
		include 'koneksi.php';
	
		?>

 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registrasi</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<section class="box-formulir">

		<h2>Tambah User Admin</h2>
		<form method="post" action="conn.php">
		<form action="" method="post">			
			<div class="box">
				<table border="0" class="table-form">
						<td>Nama</td>
						<td>:</td>
						<td>
							<input type="text" name="nm_admin" class="input-control" >
						</td>
					</tr>
					<tr>
						<td>Username</td>
						<td>:</td>
						<td>
							<input type="text" name="username" class="input-control" >
							</select>
						</td>
					</tr>
					<tr>

			<td>Password</td>
			<td>:</td>
				<td>
						<input type="text" name="password" class="input-control" >
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