<?php 

	include 'koneksi.php';

	$pelanggan = mysqli_query($conn, "SELECT * FROM tb_invoice WHERE no_invoice = '".$_GET['id']."'");
	$p = mysqli_fetch_object($pelanggan);

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PSB Online</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script>
		window.print();
	</script>
</head>
 <a href="cetak.php"> <img src="img\logo.png"width="820 height="80 > </a>
 <div class="banner-content">
                        <h1 data-animate="fadeInUp" data-delay="1.2">Internet Service Provider </h1>
                        <h2 data-animate="fadeInUp" data-delay="1.3"><span class="typed"></span></h2>
                        <h4 data-animate="fadeInUp" data-delay="1.4">Selamat datang di layanan PT. SOLUSI TRIMEGAH PERSADA</h4></br>
                    </div>
<body>

	<h2>Bukti Registrasi</h2>
	<table class="table-cetak" border="0">
		<tr>
			<td>Kode Pendaftaran</td>
			<td>:</td>
			<td><?php echo $p->id_pendaftaran ?></td>
		</tr>
		<tr>
			<td>Email</td>
			<td>:</td>
			<td><?php echo $p->email ?></td>
		</tr>
		<tr>
			<td>Paket Layanan</td>
			<td>:</td>
			<td><?php echo $p->layanan ?></td>
		</tr>
		<tr>
			<td>Nama Lengkap</td>
			<td>:</td>
			<td><?php echo $p->nm_pelanggan ?></td>
		</tr>
		<tr>
			<td>No Tlp.</td>
			<td>:</td>
			<td><?php echo $p->no_tlp ?></td>
		</tr>
		<tr>
			<td>Tanggal Instalasi PSB</td>
			<td>:</td>
			<td><?php echo $p->tgl_psb ?></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td><?php echo $p->jk ?></td>
		</tr>
		<tr>
			<td>Paket Bandwith</td>
			<td>:</td>
			<td><?php echo $p->bandwith ?></td>
		</tr>
		<tr>
			<td>Alamat Lengkap</td>
			<td>:</td>
			<td><?php echo $p->almt_pelanggan ?></td>
		</tr>
	</table>
</body>




    <pre> <h3> Fitur yang disertakan dengan paket harga ini apa saja yang akan Anda dapatkan</h3></pre>
     <li> Unlimited bandwidth No FUP</li>
     <li> Full Speed</li>
     <li> Customer Support</li>
     <li> Router Di Pinjamkan </li>
     <li> P2P Akses</li>
     <li> Double encryption</li>                  
	</ul>			
<pre> <h5> Note : </h5></pre>
<h5>*Untuk paket layanan Internet Home invoice akan di kirimkan melalui email pelanggan setelah adanya instalasi PSB</h5>
                    </div>
                </div>
				
</html>