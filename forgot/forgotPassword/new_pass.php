<?php 
session_start();
$connection=mysqli_connect('localhost','root','','etamax');
if(isset($_POST['submit'])){
	
    $password = $_POST['new_pass'];
	$password = mysqli_real_escape_string($connection,$_POST['new_pass']);
	/*$passowrd = password_hash($passowrd,PASSWORD_BCRYPT,array('cost'=>10));	*/
	echo $email = $_SESSION['email'] ;
	
	$query = "update `signup` set s_pass = '$password' where email = '$email'";
	
	
	$update_query = mysqli_query($connection,$query);
if(!$update_query){
	die (mysqli_error($connection));
}
    else{
        echo "<script>alert('Your password has been changed successfully');
        window.location='../../login.php';</script>";
    }
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
   			width:450px;
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
   			<form action="" method="POST" id='new_pass'>
   				<table>
   					<tr>
   						<td><label>NEW PASSWORD</label></td>
   						<td><input type="password" name="new_pass"  id="new_pass" required="true"></td>
   					</tr>
   				
   					<tr>
   						<td></td>
   						<td><button type="submit" class="submit" name="submit" value="Submit">Submit</button>	</td>
   						
   					</tr>
   					
   				</table>
   				
   				
   				
   				
   			</form>
   		</div>
   	</div>
</body>
</html>