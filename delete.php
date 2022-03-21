<?php
session_start();
$id=$_SESSION['id'];
include "db.php";
$sql="truncate table qutoes";
$result=$con->query($sql);
header("location: index.php?id=".$id);

?>