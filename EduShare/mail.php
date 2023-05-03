<?php
session_start();
$email = $_SESSION['email'];

include('smtp/PHPMailerAutoload.php');
$code=rand(111111,999999);
$html='Your EduShare Verification Code is: '.$code;

echo smtp_mailer($email,'Your EduShare Verification Code',$html);

function smtp_mailer($to,$subject, $msg){
	$mail = new PHPMailer(); 
	$mail->SMTPDebug  = 3;
	$mail->IsSMTP(); 
	$mail->SMTPAuth = true; 
	$mail->SMTPSecure = 'tls'; 
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 587; 
	$mail->IsHTML(true);
	$mail->CharSet = 'UTF-8';
	$mail->Username = "edusharebd1234@gmail.com";
	$mail->Password = "znsvsfzktwgdqxgp";
	$mail->SetFrom("edusharebd1234@gmail.com");
	$mail->Subject = $subject;
	$mail->Body =$msg;
	$mail->AddAddress($to);
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	if(!$mail->Send()){
		echo $mail->ErrorInfo;
	}else{
		return 'Sent';
	}
}
    $_SESSION["code"] = $code;
    header("Location:/EduShare/verify-user.php");
    exit();
?>