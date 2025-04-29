<?php
include 'koneksi.php';

// hitung tb_pendaftaran
$query_tb_pendaftaran = "SELECT COUNT(*) AS total FROM tb_pendaftaran";
$hasil_tb_pendaftaran = mysqli_query($conn, $query_tb_pendaftaran);
$jumlah_tb_pendaftaran = mysqli_fetch_assoc($hasil_tb_pendaftaran);

// hitung tb_proses
$query_tb_proses = "SELECT COUNT(*) AS total FROM tb_proses";
$hasil_tb_proses = mysqli_query($conn, $query_tb_proses);
$jumlah_tb_proses = mysqli_fetch_assoc($hasil_tb_proses);

// hitung tb_laporan
$query_tb_laporan = "SELECT COUNT(*) AS total FROM tb_laporan";
$hasil_tb_laporan = mysqli_query($conn, $query_tb_laporan);
$jumlah_tb_laporan = mysqli_fetch_assoc($hasil_tb_laporan);
