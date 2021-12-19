<?php
$username="localhost";
$server="root";
$password="";
$database="qutoes";
$con=mysqli_connect($username,$server,$password,$database);
if(!$con){
    die("error");
}
$res="SELECT Name,qutoes FROM qutoes";
$result=$con->query($res);
if($result!==false && $result->num_rows>0){
    echo "<div style='text-align:center;padding:20px;background-color:silver;box-shadow:0 2px 2px black;'>";
    echo "<h1>"."Table of Qutoes"."</h1>";
    echo "<div style='text-align:center;padding:20px;position:relative;left:38%;right:38%;'>";
    echo "<table border=4 style='background-color:white;'height='200' >"."<tr>"."<th>"."Qutoes"."</th>"."<th>"."Name"."</th>"."</tr>";
    while($row=$result->fetch_assoc()){
        
        echo "<tr>"."<td>"."<b>"."<I>"."<q>".$row['qutoes']."</q>"."</I>"."</b>"."</td>"."<td>"."-"."by"." ".$row['Name']."</td>"."</tr>";
        
    }
    echo "</table>";
    echo "</div>";
   echo "</div>";
}
else{
    echo "nothing is here ";
}
$con->close();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Qutoes
</title>
</head>
<body>

    <br>
</body>
</html>