<?php
session_start();
	include 'koneksi.php';
	if($_SESSION['stat_login'] != true){
		echo '<script>window.location="login.php"</script>';
	}
	
	$pelanggan = mysqli_query($conn, "SELECT * FROM tb_proses WHERE id_pelanggan = '".$_GET['id']."' ");
	$p = mysqli_fetch_object($pelanggan)
	
	
	
	?>
	<?php
if(isset($_POST['submit'])){

		$getMaxId = mysqli_query($conn, "SELECT MAX(RIGHT(id_pelanggan, 5)) AS id FROM tb_proses");
		$d = mysqli_fetch_object($getMaxId);
		$generateId = '124500'.date('Y').sprintf("%05s", $d->id + 1);

		$insert = mysqli_query($conn, "INSERT INTO tb_proses VALUES (
			'".$generateId."',
			'".$_POST['id_pendaftaran']."',
			'".$_POST['email_pelanggan']."',
			'".$_POST['layanan_pelanggan']."',
			'".$_POST['nama_pelanggan']."',
			'".$_POST['no_tlp_pelanggan']."',
			'".$_POST['tgl_psb_pelanggan']."',
			'".$_POST['jk_pelanggan']."', 
			'".$_POST['bandwith_pelanggan']."',
			'".$_POST['alamat_pelanggan']."'
		)");

		if($insert){
			echo '<script>window.location="../Data-Proses-Laporan/statusaktivasi.php?id='.$generateId.'"</script>';
		}else{
			echo 'Error'.mysqli_error($conn);
		}

	}
	
?>
<?php	
	if(isset($_GET['id'])){
		$delete = mysqli_query($conn, "DELETE FROM tb_proses WHERE id_pelanggan = '".$_GET['id']."' ");
		
	}

?>