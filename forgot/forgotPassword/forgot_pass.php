<?php 

$connection=mysqli_connect('localhost','root','','etamax');



if(isset($_POST['submit'])){
	
	
	$email = $_POST['email'];
	
	echo $email = mysqli_real_escape_string($connection,$email);
	
	
	$query = "SELECT * FROM `signup` WHERE `email` = '$email'";

	$select_query = mysqli_query($connection,$query);
	
	if(!$select_query){
		
		die( mysqli_error($connection));
	}
	
	
	/* $count = mysqli_num_rows($select_query);
	
	if($count > 0  ){
		$str = "0123456789qwerty#$%^&*";
		$str = str_shuffle($str);
		echo $str = substr($str,0,5);*/
		
		$url = "http://localhost/etamax/forgot/forgotPassword/reset_pass.php?email=$email";
		
		
		
/*
	require "../phpmailer/PHPMailerAutoload.php";*/
/*use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;*/
/*
require '../PHPMailer-master/src/Exception.php';
require '../PHPMailer-master/src/PHPMailer.php';
require '../PHPMailer-master/src/SMTP.php';*/
/*    require_once '../vendor/autoload.php';*/
   require '../vendor/autoload.php';

	$mail = new PHPMailer\PHPMailer\PHPMailer();
	$mail->isSMTP();
	$mail->Host = "smtp.gmail.com";
	$mail->Port=587;
	$mail->SMTPAuth=true;
	$mail->SMTPSecure="tls";
   // $mail->SMTPDebug = 2;
    $mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
		
/*	$mail->Username="summerproject83@gmail.com"; //emailid
	$mail->Password="summer@123"; //password*/
  $mail->Username="etamax257@gmail.com"; //emailid
	$mail->Password="etamax257+_+"; //password
	
	$mail->setfrom("etamax257@gmail.com","ETAMAX Team");
	$mail->addAddress($email);
	
	$mail->isHTML(true);
		
	$mail->Subject="reset pass";
	$mail->Body    = "to reset your password visit this: $url";
	//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
	
	if(!$mail->send()) {
    echo 'Message could not be sent.<br>';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo '<br>Message has been sent';
    echo "<script>alert('Message has been sent');
        window.location.href='../../login.php'</script>";
}

		
		
     /*   $query = "update `user_accounts` set token = '$str' where email_id = '$email'" ;
		$update_query = mysqli_query($conn,$query);
		
		if(!$update_query){
			die(mysqli_error($conn));
		}
		
	}else{
		echo "please check your inputs!";
	}*/
	
	
}



?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Forgot Password</title>
	<link href="../../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
   	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
   	<style type="text/css">
        body{
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            background: url(../../images/login/3.png);
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
   		body{
   			color: black !important;
   			font-size: 15px;
   		}
   		.login_portal{
            top:340px;
   			margin:0 auto;
   			width:300px;
   			padding:1%;
   			position: relative;
   		}
   		.submit{
   			position: relative;
   			float:right;
   			width:50%;
            margin-top:20px;
   		}
   		input{
   			float: right;
   			width:200px;
   			padding:5px;
   		}
   		label{
            color:white;
            font-size:20px;
   			padding:5px;
   			font-weight:600;
   		}
   	</style>
</head>
<body>
	<div class = "float">
   		<div class="login_portal">
   			<form action="" method="POST" id='forgot_form'>
   				<table>
   					<tr>
   						<td><label>Email</label></td>
   						<td><input type="email" name="email" id="email" required="true"></td>
   					</tr>
   				
   					<tr>
   						<td></td>
   						<td><input type="submit" class="submit" name="submit" value="Submit"></td>
   						
   					</tr>
   					
   				</table>
   				
   				
   				
   				
   			</form>
   		</div>
   	</div>
</body>
</html>
