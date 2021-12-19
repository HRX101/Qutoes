
<!DOCTYPE html>
<html>
    <head>
        <title>
            Qutoes
</title>
</head>
<body>
<div  style="height:70px;width:100%;background-color:black;color:white;text-align:center;border-radius:10px 10px;box-shadow:0 5px 5px black;">
        <navbar  >
        <a href="index.php" style="position:absolute;top:20px;padding:auto;background-color:white;box-shadow:0 4px 4px white;border-radius:20px 20px;color:black;text-decoration:none;font-size:40px;left:40%;"> Home</a>
        <a href="show.php" style="position:absolute;top:20px;padding:auto;background-color:white;box-shadow:0 4px 4px white;border-radius:20px 20px;color:black;text-decoration:none;font-size:40px;">Qutoes</a>

</navbar>

</div>

    <br>
</body>
</html>
<?php
include "db.php";
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