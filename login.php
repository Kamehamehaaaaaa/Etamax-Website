<?php include "functions.php";?>
<?php session_start();
if(isset($_POST['login'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    
    conn();
    
    $username=mysqli_real_escape_string($connection,$username);
    $password=mysqli_real_escape_string($connection,$password);
    
    $select_query_signup="SELECT * FROM signup WHERE s_roll='$username'";
    $res1=mysqli_query($connection,$select_query_signup);
    
    if(!$res1){
        die("FAILED".mysqli_error($connection));
    }
    
        while($row=mysqli_fetch_array($res1)){
        $db_user=$row['s_roll'];
        $db_pass=$row['s_pass'];
        $db_name=$row['s_user'];
        $db_sem=$row['sem'];
        $db_phone=$row['phone'];
        $db_email=$row['email'];
        }

    
    $admin_user=111111;
    $admin_pass="admin";
    
    
  if($username == $db_user && $password == $db_pass){
      $_SESSION['name']=$db_name;
      $_SESSION['roll']=$db_user;
      $_SESSION['sem']=$db_sem;
      $_SESSION['phone']=$db_phone;
      $_SESSION['email']=$db_email;
     
      header("Location: Home_login.php");
    
  }
    else if($username == $admin_user && $password == $admin_pass){
          header("Location: admin.php");
      }
    else{
        echo '<script type="text/javascript">'; 
       echo 'alert("WRONG USERNAME OR PASSWORD");'; 
        echo 'window.location.href = "login.php";';
        echo '</script>';
     // echo $db_pass." ".$password." ".$db_user;     --->>//getting an error even when password and db_pass values are same..to confirm ,printed both the values and found out that they were both equal
    }
}

?>



<!doctype html>
<html>
 <head>
<meta charset="utf-8">

<link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="box" style="top:50%;height:auto;">
    <h2>Login</h2>
    <form action="login.php" method="post">
        <div class="inputbox">
        <input type="number" name="username" required> 
            <label>Roll no</label>
        </div>
        <div class="inputbox">
        <input type="password" name="password" required> 
            <label>Password</label>
        </div>
        <input type="submit" name="login" value="Login">
        
         <div class="container" style="background-color:#f1f1f1"> 
  </div>
        <div class="psw"><a href="forgot/forgotPassword/forgot_pass.php" style="color:red;margin-left:110px;">Forgot Password?</a> 
         <br><br>Do not have an account? <a href="signup.php" style="color:red">Sign up</a></div>
        </form>
    </div>
    </body>
</html>