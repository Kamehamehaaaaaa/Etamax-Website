<?php include "functions.php";

if(isset($_POST['c_submit'])){
    $db_name=$_POST['c_name'];
    $db_phone=$_POST['phone'];
    $db_email=$_POST['email'];
    $db_message=$_POST['message'];
    
    conn();
    
    $query="INSERT INTO contact(c_name,phone,email,message) VALUES('$db_name','$db_phone','$db_email','$db_message')";
    
    if(strlen($db_phone)!=10){
        echo '<script type="text/javascript">'; 
        echo 'alert("DATA NOT SUBMITTED ,PHONE NO SHOULD BE OF 10 DIGITS");'; 
        echo 'window.location.href = "Home.php#contact";';
        echo '</script>';   
    }
     else{
         $res=mysqli_query($connection,$query);
        echo '<script type="text/javascript">'; 
        echo 'alert("DATA SUBMITTED SUCCESSFULLY");'; 
        echo 'window.location.href = "Home.php#contact";';
        echo '</script>';   
    }
}

?>