<?php 
	session_start();
	include 'koneksi.php';
	if($_SESSION['stat_login'] != true){
		echo '<script>window.location="login.php"</script>';
	}
 ?>

<!DOCTYPE html>
<html>
<head>
    <title>PSB Online | Admin Page</title>
    <link rel="stylesheet" href="css\bootstrap.min.css">
    <link rel="stylesheet" href="css\style.css">
    <link rel="stylesheet" href="css\responsive.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
      .container h1 {
            font-size: 8vw;
        }
    </style>
</head>

<body>

<header>

    <div class="main-header">
	<div class="header-menu">
	<div class="container-box">
	
	<ul>
	<li><img src="img\stp.png"width="200 height="30 > </a></li>
	<li><h4><a href="beranda.php">Beranda</a><h4></li>
	<li><h4><a href="../psb/Data-Calon-Pelanggan/data-pelanggan.php">Data Calon Pelanggan</a><h4></li>
	<li><h4><a href="../psb/Data-Proses-PSB/status.php">Status PSB</a><h3></li>
	<li><h4><a href="../psb/Data-Proses-Laporan/statusaktivasi.php">Status Aktivasi PSB</a><h4></li>
	<li><h4><a href="keluar.php">Keluar</a><h4></li>
	<li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li>
	<li><h6><a href="daftar.php">Menambahkan User Admin</a><h6></li>
	</ul>
    </div>
    </nav>
</header>

<section class="content">
<div class="panel-footer">

  <h2>Sistem Informasi Pemasaran Data Calon Pelanggan</h2>
  <h3><?php echo $_SESSION['nama'] ?>, Admin Registrasi PSB</h3>

</section>

<?php include('data.php') ?>

<section class="pt-5 pb-2-2">
        <div class="container-box">
            <div class="row">
                <div class="col-md-4">
				<ul>
                    <div class="single-feature text-center" > <img src="img\proses.png"width="350 height="50>
                        <h4> <?php echo $jumlah_tb_pendaftaran['total'] ?> Data Calon Pelanggan Registrasi</h4>
						<div class="panel-footer">
                        <a href="../psb/Data-Calon-Pelanggan/data-pelanggan.php" class="btn btn-primary" role="button">
                       <span class="glyphicon glyphicon-book"></span> <h5>Detail »</h5>
                       </a>
		            </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-feature text-center" > <img src="img\status.png"width="350 height="50>
					    <h4><?php echo $jumlah_tb_proses['total'] ?> Data Calon Pelanggan Dalam Proses PSB</h4>
                        <div class="panel-footer">
                        <a href="../psb/Data-Proses-PSB/status.php" class="btn btn-primary" role="button">
                       <span class="glyphicon glyphicon-book"></span> <h5>Detail »</h5>
                       </a>
		            </div>
                    </div>
                </div>
				<div class="col-md-4">
                    <div class="single-feature text-center"> <img src="img\invoice.png"width="350 height="50>
                        <<h4>Total <?php echo $jumlah_tb_laporan['total'] ?> Pelanggan Yang Sudah Aktivasi PSB</h4>
                        <div class="panel-footer">
                        <a href="../psb/Data-Proses-Payment/statuspembayaran.php" class="btn btn-primary" role="button">
                       <span class="glyphicon glyphicon-book"></span> <h5>Detail »</h5>
                       </a>
		            </div>
                    </div>
                 </div>
				</ul>
            </div>
        </div>
    </section>
</body>
</html>