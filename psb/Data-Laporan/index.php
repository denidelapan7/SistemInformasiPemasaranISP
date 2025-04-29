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
		<h1>Data Pelanggan Baru</h1>
		<ul><h3>
			<li><a href="../beranda.php">Beranda</a></li>
			<li><a href="../keluar.php">Keluar</a></li>
		</h3></ul>
	</header>
 
 

		<?php 
		include 'koneksi.php';
		?>
        <form action="index.php" method="post" name="postform">

		<div class="box">
            <p align="center"><font color="red" size="5"><b>Pencarian Data Berdasarkan Periode Tanggal</b></font></p><br />
            <table border="0">
                <tr>
                    <td width="125"><b>Dari Tanggal</b></td>
                    <td colspan="2" width="190">: <input type="date" name="tanggal_awal" size="16" />
                                    
                    </td>
                    <td width="125"><b>Sampai Tanggal</b></td>
                    <td colspan="2" width="190">: <input type="date" name="tanggal_akhir" size="16" />
                
                    </td>
                    <td colspan="2" width="190"><input type="submit" value="Pencarian Data" name="pencarian"/></td>
                    <td colspan="2" width="70"><input type="reset" value="Reset" /></td>
                </tr>
            </table>
        </form><br />
        <p>
        <?php
            //proses jika sudah klik tombol pencarian data
            if(isset($_POST['pencarian'])){
            //menangkap nilai form
            $tanggal_awal=$_POST['tanggal_awal'];
            $tanggal_akhir=$_POST['tanggal_akhir'];
            if(empty($tanggal_awal) || empty($tanggal_akhir)){
            //jika data tanggal kosong
            ?>
            <script>
                alert('Tanggal Awal dan Tanggal Akhir Harap di Isi!');
                document.location='index.php';
            </script>
            <?php
            }else{
            ?><i><b>Informasi : </b> Hasil pencarian data berdasarkan periode Tanggal <b><?php echo $_POST['tanggal_awal']?></b> s/d <b><?php echo $_POST['tanggal_akhir']?></b></i>
            <?php
            $hasil=mysqli_query($conn,"SELECT * from tb_laporan where tgl_psb between '$tanggal_awal' and '$tanggal_akhir'");
            }
        ?>

		<thead>
        </p>
		<section class="content">

		<table class="table" border="1">
		<thead>
            <tr>
						<th>No</th>
						<th>Nama Pelanggan</th>
						<th>ID Pelanggan</th>
						<th>Email</th>						
						<th>No. Telephone</th>
						<th>Status PSB</th>
						<th>Status Payment PSB</th>

					</tr>
					</thead>
					<tbody>
            <?php
            $no     = 1;
            while($data=mysqli_fetch_array($hasil)){
            ?>
            <tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $data['nama_pelanggan'] ?></td>
			<td><?php echo $data['id_pelanggan'] ?></td>						
			<td><?php echo $data['email'] ?></td>
			<td><?php echo $data['no_tlp'] ?></td>
			<td>Sudah Aktifasi <a><?php echo $data ['tgl_psb'] ?></a></td>
			<td><a>Dalam Proses Finance</a></td>

			</tr>
            <?php
			
            }
        }
        else{
            unset($_POST['pencarian']);
        }
        ?>

		</tbody>
		</table>
		</div>
</body>
</html>