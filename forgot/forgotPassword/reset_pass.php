<?php
session_start();
$connection=mysqli_connect('localhost','root','','etamax');
if(isset($_GET['email'])){
	
	 $email = mysqli_real_escape_string($connection,$_GET['email']);
	 /*$token = mysqli_real_escape_string($conn,$_GET['token']);
	*/
	$query = "SELECT * FROM `signup` WHERE  email = '$email'";
	
/*	SELECT * FROM `members` WHERE `token` = 'y53r7' and member_email = 'user@gmail.com'*/
	
	$select_query = mysqli_query($connection, $query);
	$count = mysqli_num_rows($select_query);
	if($count > 0 ){
		
		$_SESSION['email'] = $email;
		header("Location: new_pass.php");
	
		
	}else{
		echo " Please check your link";
		
	}
	
}else{
	echo "click on link";
}
?>

<!--
<input type="password" name="new_pass" id="new_pass"><br>
<button type="submit">Submit</button>-->
