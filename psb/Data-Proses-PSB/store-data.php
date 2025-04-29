<?php
session_start();
	if($_SESSION['stat_login'] != true){
		header ('Location: ../login');
		exit();
	}
		include 'koneksi.php';

	
// ambil data dari form
$id_pelanggan = $_POST['id_pelanggan'];
$nama_pelanggan = $_POST['nama_pelanggan'];
$email = $_POST['email'];
$layanan = $_POST['layanan'];
$no_tlp = $_POST['no_tlp'];
$tgl_psb = $_POST['tgl_psb'];
$bandwith = $_POST['bandwith'];
$alamat_pelanggan = $_POST['alamat_pelanggan'];





// masukkan ke database

$query = "INSERT INTO tb_laporan (id_pembayaran, id_pelanggan, nama_pelanggan, email, layanan, no_tlp, tgl_psb, bandwith, alamat_pelanggan)
 VALUES (NULL,'$id_pelanggan', '$nama_pelanggan', '$email', '$layanan', '$no_tlp', '$tgl_psb', '$bandwith', '$alamat_pelanggan');";

$pelanggan = mysqli_query($conn, $query);


// delete data pelanggan yang sudah diproses
if(isset($_GET['id'])){
$delete = mysqli_query($conn, "DELETE FROM tb_proses WHERE id_pelanggan = '".$_GET['id']."' ");	
}

// cek keberhasilan pennambahan data
if ($pelanggan == true) {
  echo "<script>window.alert('Proses Update Aktivasi PSB Pelangan berhasil'); window.location.href='../Data-Proses-Laporan/statusaktivasi.php'</script>";
} else 
{
  echo "<script>window.alert('Proses Update Aktivasi PSB Pelangan PSB gagal!'); window.location.href='invoice.php?id_pendaftaran=".$_GET['id']."'</script>";
}

	
