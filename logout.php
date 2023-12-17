<?php

session_start();
 $_SESSION['name']=null;
 $_SESSION['roll']=null;
 $_SESSION['sem']=null;
 $_SESSION['phone']=null;
 $_SESSION['email']=null;
header("Location: Home.php");


?>