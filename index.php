<?php
session_start();
$po=0;
$id=$_SESSION['id'];
if($id==""){
  echo "<script>"."alert('you have to login 1st')"."</script>";
  $po++;
}
if($po>0){
  header("location:login.php");
}
if(isset($_POST['qutoes'])){
include "common.php";
//echo "success";
$qutoes=$_POST['qutoes'];
$name=$_POST['name'];
$file=$_FILES['pics']['name'];
$sql="INSERT INTO `qutoes`.`qutoes` (`Name`,`qutoes`,`pics`) VALUES ('$name','$qutoes','$file')";
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
        
        <title>
            Home
</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>
<body style="background-color:silver;">

<nav class="navbar navbar-expand  bg-dark" style="border:none;box-shadow:0 2px 2px black;font-size:20px;outline:none;color:white;">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php?id=<?php echo $id;?>" style="color:white;border:none;outline:none;font-size:30px;font-family:Arial, Helvetica, sans-serif;">QO</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php?id=<?php echo $id;?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="show.php?id=<?php echo $id;?>">Show</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</div>
    <div  class="head">
    <div class="main-head" style="">
        <h1 style="font-family:Arial, Helvetica, sans-serif;color:black;">
        Welcome to Qutoes Ocean 

        </h1>
        </div>
        <form method="POST" action="index.php" enctype="multipart/form-data">
            <label style="border-radius:10px 10px;padding:2px;background-color: #2f4353;
background-image: linear-gradient(315deg, #2f4353 0%, #d2ccc4 74%);font-weight:bold;color:black;">Write your name :
            <input type="text" name='name' placeholder="Write your name" style="border-radius:10px 10px;background-color: #2d3436;
background-image: linear-gradient(315deg, #2d3436 0%, #000000 74%);color:white;font-family:'Times New Roman',Times,serif"></label>
            <br><br><label style=" justify-content: center;border-radius:14px 14px;padding:2px;background-color: #2f4353;
background-image: linear-gradient(315deg, #2f4353 0%, #d2ccc4 74%);font-weight:bold;color:black;color:black;">Enter your qutoes :
            <br>
            <textarea placeholder="Enter your qutoes" rows="5" cols="50" name="qutoes" id="qutoes"></textarea>
            </label>
            <br>
            <input type="file" name="pics"/>
                <button type="submit" style="border-radius:14px 14px;box-shadow:0 2px 2px black;padding:10px;color:white;background-color:black;">Send</button>
</form>
<a href="javascript:color_change()"><div class="yellow"></div></a>

<br>

</div>
<br>
<div class="foot">

 <ul class="footer-ico">  <li><h2>@copyright</h2> </li><li><a href="https://www.facebook.com/hrithik.pal.16906" class="#"><i class="fa fa-facebook"></i> </a></li><li><a href="https://www.instagram.com/hrithik._paul_/" class="instagram"><i class="fa fa-instagram"></i></a> </li>
<li>
<a href="https://www.linkedin.com/in/hrithik-pal-670592201/" class="linkedin">   
<i class="fa fa-linkedin"></i>   
</a> 
</li>

</ul>   
</div>


</body>
<style>
.yellow{
  background-color:yellow;
  width:50px;
  height:50px;
  color:yellow;
  border-radius:20px 20px;
}
.head{
  height:100vh;
  box-sizing:box-border;
  text-align:center;
  padding:50px;
  background-color: #b8c6db;
  background-image: linear-gradient(315deg, #b8c6db 0%, #f5f7fa 74%);
  box-shadow:0 2px 2px black;
  
}
 
  ::-webkit-scrollbar{
    width: 20px;
}
::-webkit-scrollbar-track{
    border-radius: 20px 20px;
    background-color: silver;
}
::-webkit-scrollbar-thumb{
  background:black;
  border-radius:10px 10px;
}
.foot{
  position:absolute;
  bottom:-1;

}
.footer-ico{
  list-style: none;
  
  white-space:nowrap;
  }
  
  li{
    margin-left:10px;
    display:inline-block;
  }
  .fa-facebook {  
  background: #3B5998;  
  color: white;  
  padding:20px;
  font-size:50px;
  border-radius:20px 20px;
} 
  .instagram {   
background: #3f729b;   
color: white; 
font-size:50px;  
padding:20px;
border-radius:20px 20px;
} 
.linkedin {   
background: #0e76a8;   
color: white;
padding:20px; 
font-size:50px;  
border-radius:20px 20px;
}    
#qutoes{
  border-radius:10px 10px;
  border:none;
  background-color: #2d3436;
background-image: linear-gradient(315deg, #2d3436 0%, #000000 74%);
color:white;
font-family:'Times New Roman',Times,serif
}
  </style>
</html>
<script>
 
var v=document.getElementById("qutoes");
  function color_change(){
    v.style.color="yellow";
  }
  
  </script>