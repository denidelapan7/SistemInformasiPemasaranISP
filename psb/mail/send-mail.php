<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require 'vendor/autoload.php';


$mail = new PHPMailer(true);

$email_penerima=$_POST['email'];
$nama_penerima=$_POST['nama'];
$pesan=$_POST['pesan'];
$subjek=$_POST['subjek'];
$file_attachments=$_FILES['attachment']['tmp_name'];
$name_attachments=$_FILES['attachment']['name'];

try {

    $mail->SMTPDebug = 0;                                      
    $mail->isSMTP();                                           
    $mail->Host       = 'smtp.gmail.com';  
    $mail->SMTPAuth   = true;                                  
    $mail->Username   = 'h.connectionsolusindo@gmail.com';                     
    $mail->Password   = 'zikyooeapmlvxqre';                               
    $mail->SMTPSecure = 'TLS';                                  
    $mail->Port       = 587;                                   


    $mail->setFrom('h.connectionsolusindo@gmail.com', 'PT. Solusi Trimegah Persada');
    
    $mail->addAddress($email_penerima, $nama_penerima);     



    $mail->addAttachment($file_attachments, $name_attachments);    

    // Content
    $mail->isHTML(true);                                  
    $mail->Subject = $subjek;
    $mail->Body    = $pesan;

    $mail->send();
    echo 'Email berhasil terkirim';
} catch (Exception $e) {
    echo "Message could not be sent. Pesan Error: {$mail->ErrorInfo}";
	
}