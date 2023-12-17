<?php include "functions.php";
session_start();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>ETAMAX 2K18</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/contact.css">
<script type="text/javascript" src="js/smoothscroll.js"></script>
<style>
    body{
        font-family: Arial, Helvetica, sans-serif;
        margin:0;
        padding:0;
        width:100%;
        height:100%;
        overflow-x:hidden;
    }  
    img{
        width:100%;
        height:100%;
    }
#logo{
     position: fixed;
     left:10px;
     width:150px;
     height:110px;
     top:80px;
    }
.socialicons{
     position:fixed;
     right:25px;
     top:40%;
     text-align: center;
    }
    .socialicons a{
        display:block;
        padding:15px 0;
        color:whitesmoke;
        text-shadow: 0px 0px 5px rgba(0,0,0,0.8);
    }
    .socialicons .fa-instagram:hover{color:#675144;}
    .socialicons .fa-facebook:hover{color:#3b5997;}
    .socialicons .fa-youtube:hover{color:#ec5538;}
    
.maintheme{
    margin-top:350px;
    color:azure;
    max-width: 500px;
    display: inline-block;
    font-size: 70px;
    text-align:center;
    }

.button1{
    display: inline-block;
    margin-top:30px;
    background-color:rgb(229,52,17) ;
    color: white; 
    font-size:20px;
    border-radius:30px;
    width:150px;
    padding: 6px 15px;
    text-decoration: none;
    }
    
.minievents ul{
    text-align:left;
    list-style: none;
    font-size:30px;
}
    
.footer{
    width:100%;
    height:200px;
    background-color:rgb(34,19,51);
    text-align:center;
    color:white;
    font-size: 50px;
    }
    
.row::after {
  display:block;
  content:"";
  clear:both;
}

.LHS{
    height:850px;
    width:60%;
    float:left;
    background-color:rgb(34,19,51);
    text-align:center;
    font-size:36px;
    color:white;
}
.RHS{
    width:40%;
    float:left;
    height:850px;
    }
.aboutleft{
    float:left;
    width:50%;
    height:900px;
    text-align:center;
    }
.aboutright{
    float:left;
    width:50%;
    height:900px;
    text-align:center;
    background-color:white;
    }
.parallax {
    background-image: url("images/4.jpg");
    min-height: 1000px; 
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    text-align:center;
}
.parallax2{
    min-height:800px;
    background-image: url("images/5.jpg");
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;   
    }
.topnav {
  overflow: hidden;
  background-color: #333;
  position:fixed;
  width:100%;
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
    
.button1:hover{
      color: rgb(34,19,51); 
    }
    
    .wel{
        display: inline-block;
        font-size: 35px;
        margin:30px 0 0 0;
        color:azure;
        width:100%;
    }

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
    }}

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
    }}
@media screen and (max-width: 600px) {
    #logo{
        display:none;
    }
    .socialicons{
        display:none;
    }
    .aboutleft{
        width:100%;
        height:auto;
    }
    .aboutright{
        width:100%;
    }
    .LHS{width:100%;}
    .RHS{display:none;}
    .minievents ul{font-size:3.8vw;margin-left:-20px;}}
</style>
</head>
<body>
<a href="Home_login.php"><img src="images/logo1.png" id="logo"></a> 
  <div class="topnav" id="myTopnav">
  <a href="Home_login.php" class="active"><i class="fa fa-home"></i> Home</a>
  <a href="Events_login.php"><i class="fa fa-bars"></i> Events</a>
  <a href="#contact" onclick="smoothScroll(document.getElementById('contact'))"><i class="fa fa-envelope"></i> Contact</a>
  <a href="#about" onclick="smoothScroll(document.getElementById('about'))"><i class="fa fa-pencil-square-o"></i> About</a>
  <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
  </div>
  
<div class="socialicons">
   <a href="https://www.instagram.com/etamax2k17/"><i class="fa fa-instagram fa-2x"></i></a>
   <a href="https://www.facebook.com/fcritETAMAX/"><i class="fa fa-facebook fa-2x"></i></a>
   <a href="https://www.youtube.com/watch?v=TeG0GkXlG14"><i class="fa fa-youtube fa-2x"></i></a>
</div>
     
<div class="parallax"> 
   <b class="maintheme">
   ETAMAX 2K19
   </b>
   <p style="color:azure;margin:0;font-size:20px;">The Day you will always remember</p>
       <p class="wel">Welcome <?php echo  $_SESSION['name'];?></p>
</div>

<div class="row">    
<div class="LHS">
  <h1 style="margin-bottom:20px;margin-top:85px;color:rgb(229,52,17);">Today's Events</h1>
  <p style="margin-bottom:80px;">12th Febrary 2019</p>
  <div class="minievents">
    <ul>
        <li><pre> 9:00 - 11:00     AUTOMOBILE WORKSHOP</pre></li>
        <li><pre>11:00 - 13:00     MATLAB</pre></li>
        <li><pre> 9:00 - 11:00     GRAFFITTI WORKSHOP</pre></li>
        <li><pre> 9:00 - 10:00     ENTERPRENEURSHIP WORKSHOP</pre></li>
        <li><pre> 9:00 - 15:00     ROAD RASH</pre></li>
        <li><pre>17:00 - 20:00     WAR OF BANDS</pre></li>
    </ul>
  </div>
  <a href="Day1_login.php" class="button1">See More</a>
</div>
<div class="RHS"><img src="images/17.jpg"></div>
</div>

<div class="row">
    <div class="aboutleft">
   <img src="images/13.1.jpg">
    </div>
    <div class="aboutright" id="about">
    <h1 style="margin-top:30%;color:rgb(229,52,17);font-size:40px;">ABOUT<br>ETAMAX<br>2K19</h1>
    <p style="margin-top:60px;padding:0px 20%;">Known as CRITERIA up until 2002, ETAMAX is the intercollegiate techno-cultural fest of FCRIT, Vashi. Over the past decade, it has grown to become one of the biggest and most eagerly awaited college fests in Navi Mumbai with thousands of students participating each year. It has seen celebrities like Shankar Mahadevan and Aditya Narayan in attendance.<br><br><br>ETAMAX 2K18 brings to you a wide variety of events ranging from robotics to dancing. As the name suggests, ETAMAX allows the participants to explore their limits and expand their horizons in an attempt to attain Maximum Effciency!</p>
    </div>
</div>

<div class="parallax2">
</div>

<div class="row" id="contact">
   <div class="LF">
        <p style="margin-top:200px;">SPONSERS<br><br>KA<br><br>SECTION<br><br></p>
   </div>
 <div class="RF">

    <div class="CU">
        <h1 id="h">CONTACT US</h1>
    </div>
    <div class="ADD">
        <h2>ADDRESS</h2>
        <p>Fr.Agnels College of Engineering,<br>Vashi</p>

        <h2>EMAIL</h2>
        <p>fcritcouncil@gmail.com</p>

        <h2>TEL</h2>
        <p>420-143-6969</p>
        
        <div class="brandicons">
        <a href="https://www.instagram.com/etamax2k17/"><i class="fa fa-instagram"></i></a>
        <a href="https://www.facebook.com/fcritETAMAX/"><i class="fa fa-facebook-official"></i></a>
        <a href="https://www.youtube.com/watch?v=TeG0GkXlG14"><i class="fa fa-youtube-play"></i></a>
        </div>
    </div>

    <div class="FORM">
        <form action="contact_login.php" method="post">
            <label for="fname"></label>
            <input type="text" id="fname" name="c_name" placeholder="Your name.." required>

            <label for="phno"></label>
            <input type="number" id="phno" name="phone" placeholder="Your phno.." required><br>

            <label for="email"></label><br>
            <input type="email" id="email" name="email" placeholder="Your email.." required> <br>


            <br> <textarea rows="10" cols="50" name="message" placeholder="Your message.." required></textarea>
            <br> <br>
            <input type="submit" value="Send" name="c_submit">
        </form>
    </div>


    <div class="MAP">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1333.1547546856166!2d72.992872017905!3d19.07555815426853!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c6cae0d8c5ab%3A0xbbf4481d662ca2d8!2sFr.+C.+Rodrigues+Institute+of+Technology!5e0!3m2!1sen!2sin!4v1535193529007" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
 </div>
</div>

<div class="footer">
    #RSS <i class="fa fa-thumbs-up"></i>
</div>
 
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