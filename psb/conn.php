<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$nm_admin = $_POST['nm_admin'];
$username = $_POST['username'];
$password = md5 ($_POST['password']);
 
// menginput data ke database
mysqli_query($conn,"insert into tb_admin values('','$nm_admin','$username','$password')");
 
// mengalihkan halaman kembali ke index.php
header("location:login.php");
 
?>
