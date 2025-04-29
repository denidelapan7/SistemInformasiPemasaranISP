<?php 
	include 'koneksi.php';
	if(isset($_POST['submit'])){

		$getMaxId = mysqli_query($conn, "SELECT MAX(RIGHT(id_pendaftaran, 5)) AS id FROM tb_pendaftaran");
		$d = mysqli_fetch_object($getMaxId);
		$generateId = 'P'.date('Y').sprintf("%05s", $d->id + 1);

		$insert = mysqli_query($conn, "INSERT INTO tb_pendaftaran VALUES (
			'".$generateId."',
			'".date('Y-m-d')."',
			'".$_POST['email']."',
			'".$_POST['layanan']."',
			'".$_POST['nm_pelanggan']."',
			'".$_POST['no_tlp']."',
			'".$_POST['tgl_psb']."', 
			'".$_POST['jk']."',
			'".$_POST['bandwith']."',
			'".$_POST['almt_pelanggan']."'
		)");

		if($insert){
			echo '<script>window.location="berhasil.php?id='.$generateId.'"</script>';
		}else{
			echo 'Error'.mysqli_error($conn);
		}

	}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
 
 
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
 
$email = htmlspecialchars($_POST['email']);
$layanan = htmlspecialchars($_POST['layanan']);
$bandwith = htmlspecialchars($_POST['bandwith']);
 
$mail = new PHPMailer(true);
 
try {                       
    $mail->SMTPDebug = 2;  
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    // email aktif yang sebelumnya di setting
    $mail->Username   = 'h.connectionsolusindo@gmail.com';
    // password yang sebelumnya di simpan
    $mail->Password   = 'zikyooeapmlvxqre';
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;  
 
    $mail->setFrom('h.connectionsolusindo@gmail.com', 'Registrasi PSB');
     $mail->addAddress($email); 
        $mail->isHTML(true);
        $mail->Subject = $layanan;    
        $mail->Body = $bandwith;
        $mail->send();
        header("location= berhasil.php?id='.$generateId.'");
 
    }catch (Exception $e) {
    	header("location:index.php?alert=gagal"); 	
    }
 
?>