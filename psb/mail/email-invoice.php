<?php include('../mail/show-invoice.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <title>PSB Online | Admin Page</title>

</head>
<header>
		<h1>Proses Kirim Invoice Pelanggan</h1>
		<ul>
			<li><a href="../beranda.php"><h3>Beranda</h3></a></li>
			<li><a href="../Data-Laporan/data-proses-payment.php"><h3>Status Proses Payment</h3></a></li>
			<li><a href="../keluar.php"><h3>Keluar</h3></a></li>
		</ul>
	</header>
<body>
<section class="content">
 <div class="content">
<div class="container">
<div class="box">
<table class="table-cetak" border="0">
<pre>Periksa data sebelum melakukan pengiriman email pelanggan!</pre>

  <form class="form-horizontal" method="POST" enctype='multipart/form-data' id="FormEmail">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email Penerima:</label>
      <div class="col-sm-10">
        <input type="text" class="table" name="email" value="<?php echo $p->email ?>"readonly>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="nama">Nama Penerima:</label>
      <div class="col-sm-10">
        <input type="text" class="table" name="nama" value="Kepada Pelanggan Yang Terhormat, <?php echo $p->nama_pelanggan ?>"readonly>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="nama">Deskripsi:</label>
      <div class="col-sm-10">
        <textarea type="text" class="form-control" id="subjek" name="subjek">Invoice Registrasi Layanan Aktifasi Baru PSB</textarea>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pesan">Pesan:</label>
      <div class="col-sm-10">          
        <textarea class="form-control" rows="5" id="pesan" name="pesan">Terimakasih atas kepercayaan Anda terhadap Layanan Kami. Berikut kami lampirkan invoice aktifasi pelanggan baru</textarea>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="Attachment">File Invoice:</label>
      <div class="col-sm-10">          
        <input type="file" class="form-control" id="attachment" name="attachment">
      </div>
    </div>
	
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="submit" class="btn btn-primary">Kirim</button>
      </div>
    </div>
  </form>
  
</div>
<script type="text/javascript">
    $("form").submit(function(e) {
         e.preventDefault();
          var form = $('#FormEmail')[0];

         var data = new FormData(form);
        $.ajax({
            url: 'send-mail.php',
            type: 'post',
            enctype: 'multipart/form-data',
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            success: function(data) {
              alert(data);
              
            }
        });
    });
  </script>
</body>
</html>