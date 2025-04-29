<?php
session_start();
	include 'koneksi.php';
	if($_SESSION['stat_login'] != true){
		echo '<script>window.location="login.php"</script>';
	}
	
	$pelanggan = mysqli_query($conn, "SELECT * FROM tb_laporan WHERE id_pembayaran = '".$_GET['id']."' ");
	$p = mysqli_fetch_object($pelanggan)
	
	
	?>
	<?php
if(isset($_POST['submit'])){

		$getMaxId = mysqli_query($conn, "SELECT MAX(RIGHT(id_pembayaran, 5)) AS id FROM tb_laporan");
		$d = mysqli_fetch_object($getMaxId);
		$generateId = 'P'.date('Y').sprintf("%05s", $d->id + 1);

		$insert = mysqli_query($conn, "INSERT INTO tb_laporan VALUES (
			'".$generateId."',
			'".$_POST['id_pelangaan']."',
			'".$_POST['nama_pelanggan']."',
			'".$_POST['email']."',
			'".$_POST['layanan']."',
			'".$_POST['no_tlp']."',
			'".$_POST['tgl_psb']."', 
			'".$_POST['bandwith']."',
			'".$_POST['alamat_pelanggan']."'
		)");

		if($insert){
			echo '<script>window.location="../status.php?id='.$generateId.'"</script>';
		}else{
			echo 'Error'.mysqli_error($conn);
		}

	}
	
?>