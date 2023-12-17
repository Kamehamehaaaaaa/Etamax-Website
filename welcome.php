<?php include "functions.php";?>
<?php session_start();?>
<?php 
conn();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>WELCOME</title>
    <style>
        body{
            background-image: url(images/welcome.jpg);
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }
        p{
            font-size: 70px;
            font-family: cursive;
            color: deepskyblue;
            text-align: center;

        }
        button{
            font-size: 25px;
            font-family: cursive;
            background-color: green;
            padding: 20px;
            border-radius: 20px;
            margin: auto;
            display: block;
        }
        a{
            position: relative;
            text-decoration: none;
            color: white;
            display: block;
        }
    
    </style>
</head>
<body>
   <p>Welcome <?php  echo $_SESSION['name'];?></p>
   <button ><a href="Home_login.php">Proceed</a></button>
    
</body>
</html>
