<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
    margin: 50px auto auto auto;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = $_GET['q'];

$con = mysqli_connect('localhost','root','','etamax');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}


$sql="SELECT * FROM signup WHERE paid = '".$q."'";
$result = mysqli_query($con,$sql);

    
      echo"  <table>
       <tr>
           <th>ROLL NO</th>
           <th>NAME</th>
           <th>SEM</th>
           <th>PHONE</th>
           <th>EMAIL</th>   
       </tr>";
    
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['s_roll'] . "</td>";
    echo "<td>" . $row['s_user'] . "</td>";
    echo "<td>" . $row['sem'] . "</td>";
    echo "<td>" . $row['phone'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";  
    echo "</tr>";
}
echo "</table>";

?>
</body>
</html>