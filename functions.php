<?php 

function conn(){
  global $connection;
    $connection=mysqli_connect('localhost','root','','etamax');
    if(!$connection){
        die("Failed".mysqli_error($connection));
    }
}


  