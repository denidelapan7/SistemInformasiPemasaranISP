<?php
session_start();
	if($_SESSION['stat_login'] != true){
		header ('Location: ../login');
		exit();
	}
		include 'koneksi.php';

	
// ambil data dari form
$id_pelanggan = $_POST['id_pelanggan'];
$id_pendaftaran = $_POST['id_pendaftaran'];
$email_pelanggan = $_POST['email_pelanggan'];
$layanan_pelanggan = $_POST['layanan_pelanggan'];
$nama_pelanggan = $_POST['nama_pelanggan'];
$no_tlp_pelanggan = $_POST['no_tlp_pelanggan'];
$tgl_psb_pelanggan = $_POST['tgl_psb_pelanggan'];
$jk_pelanggan= $_POST['jk_pelanggan'];
$bandwith_pelanggan = $_POST['bandwith_pelanggan'];
$alamat_pelanggan = $_POST['alamat_pelanggan'];





// masukkan ke database

$query = "INSERT INTO tb_proses (id_pelanggan,id_pendaftaran, email_pelanggan, layanan_pelanggan, nama_pelanggan, no_tlp_pelanggan, tgl_psb_pelanggan, jk_pelanggan, bandwith_pelanggan, alamat_pelanggan)
 VALUES (NULL,'$id_pendaftaran', '$email_pelanggan', '$layanan_pelanggan', '$nama_pelanggan', '$no_tlp_pelanggan', '$tgl_psb_pelanggan', '$jk_pelanggan', '$bandwith_pelanggan', '$alamat_pelanggan');";

$pelanggan = mysqli_query($conn, $query);


// delete data calon pelanggan yang sudah diproses
if(isset($_GET['id'])){
$delete = mysqli_query($conn, "DELETE FROM tb_pendaftaran WHERE id_pendaftaran = '".$_GET['id']."' ");
}
// cek keberhasilan penambahan data
if ($pelanggan == true) {
  echo "<script>window.alert('Proses Penjadwalan PSB berhasil'); window.location.href='../Data-Proses-PSB/status.php'</script>";
} else 
{
  echo "<script>window.alert('Proses Penjadwalan gagal!'); window.location.href='../Data-Proses-PSB/detail-pelanggan.php?id_pendaftaran=".$_GET['id']."'</script>";
}

	
