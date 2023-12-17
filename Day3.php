<?php include "functions.php";
conn();

if(isset($_POST['event7'])){
    echo "<script>alert('PLEASE LOG IN TO REGISTER')</script>";
}
if(isset($_POST['event8'])){
    echo "<script>alert('PLEASE LOG IN TO REGISTER')</script>";
}
if(isset($_POST['event9'])){
    echo "<script>alert('PLEASE LOG IN TO REGISTER')</script>";
}
?>


<!DOCTYPE html>
<html>
<head>
<title>Events</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="smoothscroll.js"></script>
<style>
    body{
        margin:0;
        font-family: Arial, Helvetica, sans-serif;
        background-color:rgb(34,19,51);
    }
    #logo{
     position: fixed;
     left:10px;
     width:150px;
    height:110px;
     top:80px;
    }
* {
    box-sizing: border-box;
}
    img{
    width:100%;
    height:20vw;
    border-radius:15px;
    }
    p{
        margin:0;
    }
    
    input[type=submit]{
      background-color: rgb(34,19,51);
    color: white; 
        font-size:20px;
        border-radius:30px;
        width:140px;
        padding: 6px 15px;
    border: 3px solid azure;
    }
    
    input[type=submit]:hover{
        color:rgb(229,52,17);
        border-color:rgb(229,52,17);
    }
ul#menu {
            padding:0;
        }
        ul#menu li {
            display:inline-block;
            padding:2px;
        }
        ul#menu li a {
            background-color:rgb(229,52,17);
            color:white;
            padding: 12px 50px;
            text-decoration: none;
            border-radius: 4px 4px;
            font-size:20px;
        }
        ul#menu li a:hover {
            background-color: rgb(242,153,136);
            color:rgb(34,19,51);
    }
    
.container {
  position: relative;
  width:100%;
    }
    
.overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background-color:crimson;
  overflow: hidden;
  border-radius: 15px;
  width: 100%;
  height: 0;
  transition: .5s ease;
}

.container:hover .overlay {
  height: 100%;
}
       
.text {
  color: white;
  font-size: 1vw;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: left;
  word-wrap: break-word;
  max-width:90%;
}
.column {
    float: left;
    width: 33.33%;
    padding: 10px;
}
    
.row {
    content: "";
    display: table;
    clear: both;
    width:75vw;
}
.topnav {
  overflow: hidden;
  background-color: #333;
  position:fixed;
  width:100%;
  top:0;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}
    .topnav a:nth-child(5){
        float:right;
    }

.topnav a:hover {
  background-color: #ddd;
  color: rgb(229,52,17);
}

.active {
  background-color: rgb(229,52,17);
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }

@media screen and (max-width: 600px) {
  .topnav.responsive {position: fixed;}
  .topnav.responsive .icon {
    position: fixed;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }    
    
@media screen and (max-width: 600px) {
    .column {
        width: 100%;
    }
    .text {
        font-size: 4vw;
    }
    img{
        height:55vw;
    }
    .row {
        width:90%;
    }
    ul#menu {
        margin-top:0px;
    }
     #logo{
        display:none;
    }
}
@media screen and (max-width: 550px) {
    ul#menu li {
        display:grid;
        width:50vw;
    }
}
</style>
</head>
<body>
<a href="Home.php"><img src="images/logo1.png" id="logo"></a> 
 <div class="topnav" id="myTopnav">
  <a href="Home.php"><i class="fa fa-home"></i> Home</a>
  <a href="Events.php" class="active"><i class="fa fa-bars"></i> Events</a>
  <a href="Home.php#contact" onclick="smoothScroll(document.getElementById('contact'))"><i class="fa fa-envelope"></i> Contact</a>
  <a href="Home.php#about" onclick="smoothScroll(document.getElementById('about'))"><i class="fa fa-pencil-square-o"></i> About</a>
  <a href="login.php"><i class="fa fa-sign-in"></i> Login</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
    </div>
    <form action="Day3.php" method="post">
<center>
<div style="height:auto;margin-top:100px;margin-bottom: 50px">
      <h1 style="font-size:40px; color:white;">EVENTS</h1>
      <ul id="menu">
          <li><a href="Day1.php"><b>DAY 1</b></a></li>
          <li><a href="Day2.php"><b>DAY 2</b></a></li>
          <li><a style="color:rgb(34,19,51);" href="Day3.php"><b>DAY 3</b></a></li>
      </ul>
</div>

<div class="row">
   <div class="column" >
    <div class="container">
    <img src="images/events/aut.jpg">
    <h3 style="color:white;">AUTOMOBILE WORKSHOP</h3>
    <div class="overlay">
    <div class="text">
    <h2>AUTOMOBILE WORKSHOP</h2>
    <p>Participation Fee: Rs.160</p>
    <p>Venue: ITI LAB</p>
    <p>Time: 11:00-14:00</p></div></div>
    </div>
    <input type="submit" name="event7" value="Register">
    </div>
  <div class="column">
   <div class="container">
    <img src="images/events/sel.jpg">
    <h3 style="color:white;">SELF DEFENCE</h3>
    <div class="overlay">
    <div class="text">
    <h2>SELF DEFENCE</h2>
    <p>Participation Fee: Rs.100</p>
    <p>Venue: ED HALL</p>
     <p>Time: 09:00-11:00</p></div></div>
      </div>
      <input type="submit" name="event8" value="Register">
      </div>
  <div class="column">
   <div class="container">
    <img src="images/events/jam.png">
    <h3 style="color:white;">JAM SESSION</h3>
    <div class="overlay">
    <div class="text">
    <h2>JAM SESSION</h2>
    <p>Participation Fee: N/A</p>
        <p>Venue: LAWN</p>
        <p>Time: 18:30-20:00</p></div></div>
      </div>
      <input type="submit" name="event9" value="Register" onclick="register()">
    </div>
</div>
    </center>
    </form>
<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>
</body>
</html>
