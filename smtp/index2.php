<?php

$conn=mysqli_connect('localhost','root','','project2',3307);

if(!$conn){
    die('Unable to connect');
}
    


?>
<?php


$sql1="SELECT * FROM login_tourist ORDER BY t_id DESC LIMIT 1";
$result=mysqli_query($conn,$sql1);
if($result){
    while($guide=mysqli_fetch_assoc($result)){
        
      
        $ser=$guide['U_username']; 
        
        }
    }

 ?>
<?php
include('smtp/PHPMailerAutoload.php');
$html='welcome to guide for tourist website';
echo smtp_mailer($ser,'subject',$html);
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
	$mail->Username = "guidefortourist90@gmail.com";
	$mail->Password = "suyash@dighe";
	$mail->SetFrom("guidefortourist90@gmail.com");
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

echo "<script>window.location.href='../login_home.php';</script>";
?>