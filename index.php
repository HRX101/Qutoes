<?php
if(isset($_POST['qutoes'])){
include "common.php";
//echo "success";
$qutoes=$_POST['qutoes'];
$name=$_POST['name'];
$sql="INSERT INTO `qutoes`.`qutoes` (`name`,`qutoes`) VALUES ('$name','$qutoes')";
//echo $sql;
if($con->query($sql)!=true){
    
    echo "Error : $con->error";
}


$con->close();
}

?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="qutoes.css"></link>
        <title>
            Home
</title>
</head>
<body>
        <div  style="height:70px;width:100%;background-color:black;color:white;text-align:center;border-radius:10px 10px;box-shadow:0 5px 5px black;">
        <navbar  >
        <a href="index.php" style="position:absolute;top:20px;padding:auto;background-color:white;box-shadow:0 4px 4px white;border-radius:20px 20px;color:black;text-decoration:none;font-size:40px;left:40%;"> Home</a>
        <a href="show.php" style="position:absolute;top:20px;padding:auto;background-color:white;box-shadow:0 4px 4px white;border-radius:20px 20px;color:black;text-decoration:none;font-size:40px;">Qutoes</a>

</navbar>

</div>
    <div >
        <h1>
        Welcome to qutoes ocean 

        </h1>
        <form method="POST" action="index.php" enctype="multipart/form-data">
            <label>Write your name :</label>
            <input type="text" name='name' placeholder="write your name">
            <br><label>Enter your qutoes :<lablel/>
            <br>
            <textarea placeholder="enter your qutoes" rows="10" cols="50" name="qutoes"></textarea>
            
                <button type="submit" style="border-radius:20px 20px;box-shadow:0 2px 2px black;padding:10px;">Send</button>
</form>
<br>

</div>
</body>
</html>