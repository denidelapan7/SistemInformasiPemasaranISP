<?php include('../Data-Proses-Laporan/show-invoice.php') ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $p->id_pembayaran ?></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script>
		window.print();
	</script>
</head>

 <div class="banner-content">
 <a href="invoice.php"> <img src="img\logo.png"width="800 height="80 > </a>
 <section class="content">
 
 <td><h1 >INVOICE </h1></td>
		
<body>

	&nbsp;<h3>Detail Customer</h3>
	
	<table class="box-cetak" border="0">
		<tr>
		
			<td>No. Invoice</td>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td><?php echo $p->id_pembayaran ?> </td>
		</tr>
		<tr>
		
			<td>ID Pelanggan</td>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td><?php echo $p->id_pelanggan ?> </td>
		</tr>
		<tr>
			<td>Nama Pelanggan</td>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
			<td><?php echo $p->nama_pelanggan?> </td>
		</tr>
		<tr>
			<td>Email</td>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
			<td><?php echo $p->email?> </td>
		</tr>
		<tr>
			<td>Paket Layanan</td>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
			<td><?php echo $p->layanan?> </td>
		</tr>
		<tr>
			<td>No Tlp.</td>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
			<td><?php echo $p->no_tlp?> </td>
		</tr>
		<tr>
			<td>Tanggal Instalasi PSB</td>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
			<td><?php echo $p->tgl_psb?> </td>
		</tr>
		<tr>
			<td>Paket Bandwith</td>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
			<td><?php echo $p->bandwith?> </td>
		</tr>
		<tr>
			<td>Alamat Lengkap</td>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
			<td><?php echo $p->alamat_pelanggan?> </td>
		</tr>
	
	</table>
</body>
<pre> <h3> </h3></pre>
		
	<pre> <h3> Biaya Registrasi Instalasi : Rp. 150.000</h3></pre>
	<pre> <h4> Terbilang : # Seratus Lima Puluh Ribu Rupiah #</h4></pre>

&nbsp;
<div>

     &nbsp;<h4> Pembayaran dilakukan melalui transfer ke:</h4>
     <h5> Virtual Account Bank</h5>
     <h5> DANA</h5>
     <h5> OVO</h5>
     <h5> Indomaret </h5>
     <h5> Alfamart</h5>                
	</ul>			
<pre> <h5> Note : </h5></pre>
<h5>*Bukti validasi pembayaran dikirim ke melalui whatsapp customer service</h5>
<h5>*Pemutusan koneksi sementara akan dilakukan apabila pembayaran melewati 14 hari kerja dari pada tgl jatuh </h5>
<h5>*tempo (tanpa ada konfirmasi dari customer) dan akan disambungkan kembali setelah tagihan dibayarkan.</h5>


    <pre> <h3> </h3></pre>


<td><h5>Finance </h5></td>

<a href="invoice.php"> <img src="img\tdd.png"width="180 height="180 > </a>


<pre> <h4> </h4></pre>
<td><h5>PT. Solusi Trimegah Persada</h5></td>


</div>			
</div>	
</html>