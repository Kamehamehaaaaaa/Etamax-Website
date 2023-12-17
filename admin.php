<?php include "functions.php";


conn();

$select_query_admin="SELECT * FROM signup";
$res1=mysqli_query($connection,$select_query_admin);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ADMIN</title>
    <style>
        table,th,td{
            padding: 5px;
            border: 1px solid black;
        }
        table{
            width:100%;
            margin: 50px auto auto auto;
            border-collapse: collapse;
        }
        th {text-align: left;}
        #i{
        
            display: block;
            margin:auto;
            padding: 10px;
        }
          .exit{
            float:right;
            padding: 10px;
            text-decoration: none;
            border: 1px solid black;
            color:black;
            background-color: #e7e7e7;
            margin-right:40px;
            margin-bottom: 20px;
        }
    </style>
    <script>
function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","getuser.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>
</head>
<body>
  <form action="admin.php" method="post">
   <table>
       <tr>
           <th>ROLL NO</th>
           <th>NAME</th>
           <th>SEM</th>
           <th>PHONE</th>
           <th>EMAIL</th>  
           <th>EVENT1<br>Rs10/-</th> 
           <th>EVENT2<br>Rs20/-</th> 
           <th>EVENT3<br>Rs30/-</th> 
           <th>EVENT4<br>Rs40/-</th> 
           <th>EVENT5<br>Rs50/-</th> 
           <th>EVENT6<br>Rs60/-</th> 
           <th>EVENT7<br>Rs70/-</th> 
           <th>EVENT8<br>Rs80/-</th> 
           <th>EVENT9<br>Rs90/-</th> 
           <th>ELIGIBLE?</th>
           <th>PAYMENT</th>
           <th>PAID?</th>
           <th>AMOUNT</th>
       </tr>
       
       
       
       <?php     
 while($row=mysqli_fetch_array($res1)){
    $db_user=$row['s_roll'];
    $db_name=$row['s_user'];
    $db_sem=$row['sem'];
    $db_phone=$row['phone'];
    $db_email=$row['email'];
    $db_event1=$row['event1'];
    $db_event2=$row['event2'];
    $db_event3=$row['event3'];
    $db_event4=$row['event4'];
    $db_event5=$row['event5'];
    $db_event6=$row['event6'];
    $db_event7=$row['event7'];
    $db_event8=$row['event8'];
    $db_event9=$row['event9'];
    $db_pay=$row['paid'];
     
    $e1=10;
    $e2=20;
    $e3=30;
    $e4=40;
    $e5=50;
    $e6=60;
    $e7=70;
    $e8=80;
    $e9=90;
     
     
    
  
     
    if(($db_event1 =='Y' or $db_event2 =='Y' or $db_event3 =='Y') and ($db_event4 =='Y' or $db_event5 =='Y' or $db_event6 =='Y') and ($db_event7 =='Y' or $db_event8 =='Y' or $db_event9 =='Y')){
        $db_eligible="YES";
    }
     else{
         $db_eligible="NO";
     }
    
     if($db_event1!='Y'){
         $e1=0;
     }
     if($db_event2!='Y'){
         $e2=0;
     }
     if($db_event3!='Y'){
         $e3=0;
     }
     if($db_event4!='Y'){
         $e4=0;
     }
     if($db_event5!='Y'){
         $e5=0;
     }
     if($db_event6!='Y'){
         $e6=0;
     }
     if($db_event7!='Y'){
         $e7=0;
     }
     if($db_event8!='Y'){
         $e8=0;
     }
     if($db_event9!='Y'){
         $e9=0;
     }
     
     $db_amount=$e1+$e2+$e3+$e4+$e5+$e6+$e7+$e8+$e9;

    if(@$_POST[$db_user]!=null){
    if(isset($_POST['admin'])){
    $payment=$_POST[$db_user];
    $query="UPDATE signup SET paid='$payment' WHERE s_roll={$db_user} ";
    $pay_res=mysqli_query($connection,$query);
    if(!$pay_res){
        die("FAILED".mysqli_error($connection));
    }
        else{
            header("Location: admin.php");//if not done,we need to press update button twice
        }
    }
    }
     
   
     
    echo "<tr>";
    echo "<td>$db_user</td>";
    echo "<td>$db_name</td>";
    echo "<td>$db_sem</td>";
    echo "<td>$db_phone</td>";
    echo "<td>$db_email</td>";
    echo "<td>$db_event1</td>";
    echo "<td>$db_event2</td>";
    echo "<td>$db_event3</td>";
    echo "<td>$db_event4</td>";
    echo "<td>$db_event5</td>";
    echo "<td>$db_event6</td>";
    echo "<td>$db_event7</td>";
    echo "<td>$db_event8</td>";
    echo "<td>$db_event9</td>";
    echo "<td>$db_eligible</td>";
    echo "<td>Y<input type='radio' name='$db_user' value='YES' > N<input type='radio' name='$db_user' value='NO'></td>";
    echo "<td>$db_pay</td>";
    echo "<td>$db_amount</td>";
     
    echo "</tr>";
     
}
       ?>
       
   </table>
   <br>
   <br>
   <input type="submit" name="admin" value="UPDATE" id="i">
   <a href="Home.php" class="exit">EXIT</a>
    </form>
   
   <br>
   <form>
<select name="users" onchange="showUser(this.value)">
  <option value="">Select </option>
  <option value="YES">PAID</option>
  <option value="NO">NOT PAID</option>
  </select>
<br>
<div id="txtHint"><b>List of students will appear below....</b></div>
    </form>
</body>
</html>