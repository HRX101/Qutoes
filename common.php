<?php
$server="localhost";
$username="root";
$password="";
$con=mysqli_connect($server,$username,$password);
if(!$con){
    die("not connect".mysqli_connect_error());
}

?>