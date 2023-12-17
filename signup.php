<?php include "functions.php";

if(isset($_POST['s_submit'])){
    $db_roll=$_POST['s_roll'];
    $db_username=$_POST['s_user'];
     $db_password=$_POST['s_pass'];
     $db_sem=$_POST['sem'];
     $db_phone=$_POST['ph'];
    $db_email=$_POST['email'];
    
    conn();
    
    $db_roll=mysqli_real_escape_string($connection,$db_roll);
    $db_username=mysqli_real_escape_string($connection, $db_username);
    $db_password=mysqli_real_escape_string($connection,$db_password);
    $db_sem=mysqli_real_escape_string($connection,$db_sem);
    $db_phone=mysqli_real_escape_string($connection,$db_phone);
    $db_email=mysqli_real_escape_string($connection,$db_email);
   
    
    $query="INSERT INTO signup(s_roll,s_user,s_pass,sem,phone,email) VALUES('$db_roll','$db_username','$db_password','$db_sem','$db_phone','$db_email')";
    
    $res=mysqli_query($connection,$query);
    
    $query_s="SELECT email FROM signup WHERE email='$db_email'";
    $res_s=mysqli_query($connection,$query_s);
    while($row=mysqli_fetch_array($res_s)){
        $email=$row['email'];
    }

    
    if(!$res){
        if(!empty($email)){
            echo "<script>alert(' EMAIL ALREADY EXISTS')</script>";
        }
        else{
      //header("Location: error.php");//gives error when roll no is signed in twice
      echo "<script>alert(' ROLL NO ALREADY EXISTS')</script>";
        }
    }
    else if(strlen($db_roll)!=6){
        echo "<script>alert('DATA NOT SUBMITTED ,ROLL NO SHOULD BE OF 6 DIGITS')</script>";
    }
    else if(strlen($db_phone)!=10){
        echo "<script>alert('DATA NOT SUBMITTED ,PHONE NO SHOULD BE OF 10 DIGITS')</script>";
    }
     else{
        echo "<script>alert('DATA SUBMITTED SUCCESSFULLY');
        window.location.href='login.php'</script>";    
    }
    
  

}

?>

<!doctype html>
<html>
 <head>
<meta charset="utf-8">

<link rel="stylesheet" href="css/signup.css">
</head>
<body>
    <div class="box">
    <h2>Signup</h2>
    <form action="signup.php" method="post">
        <div class="inputbox">
        <input type="text" name="s_user" required value="<?php if(isset($_POST['s_user'])){echo $_POST['s_user'];}?>" > 
            <label>Name</label>
        </div>
         
             <label style="color: white";  >Semester</label>
    <select  name="sem" required value="<?php if(isset($_POST['sem'])){echo $_POST['sem'];}?>">
        <option value="2">2</option>
        <option value="4">4</option>
        <option value="6">6</option>
        <option value="8">8</option>
    </select> <br> <br> 
        
        <div class="inputbox">
        <input type="number" name="s_roll" required value="<?php if(isset($_POST['s_roll'])){echo $_POST['s_roll'];}?>"> 
            <label>Roll no</label>
        </div>
         <div class="inputbox">
        <input type="email" name="email" required value="<?php if(isset($_POST['email'])){echo $_POST['email'];}?>"> 
            <label>Email</label>
        </div>
         <div class="inputbox">
        <input type="number" name="ph" required value="<?php if(isset($_POST['ph'])){echo $_POST['ph'];}?>"> 
            <label>Ph no</label>
        </div>
        <div class="inputbox">
        <input type="password" name="s_pass" required value="<?php if(isset($_POST['s_pass'])){echo $_POST['s_pass'];}?>"> 
            <label>Password</label>
        </div>
        
        <input type="submit" name="s_submit" value="Submit">
        
<span class="psw">Already have an account? <a href="login.php" style="color:red">Login</a></span>
             <div class="container" style="background-color:#f1f1f1"> 
        
    
  </div>
        </form>
    </div>
    </body>
</html>