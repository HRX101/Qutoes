<?php
$dat=FALSE;
if(isset($_POST['username'])){
    include "db.php";
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sol=$_POST['selectname'];
    $sql="SELECT username,id from register where password='$password' and username='$username' and selection='$sol'";
    $result=$con->query($sql);
    if($result!==FALSE && $result->num_rows>0){
      while($row=$result->fetch_assoc()){
        session_start();
        $_SESSION['id']=$row['id'];
        $id=$row['id'];
        $_SESSION['select']=$sol;
        header("location: index.php?id=".$id);
      }
        
        
      }
    else{
        $dat=TRUE;
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
<div class="main">
 

 <section class="vid">
 <video  playsinline="playsinline" muted="muted" preload="yes" autoplay="autoplay"  loop autoplay class="video-cont">
   <source src="pix3.mp4">
   
</section>
</div>
 
 

 <form action="login.php" method="POST" class="login">
     <label>
         Enter your username :
     </label>
     <input type="text" name="username" class="username"/>
     <br>
     <label>
         Enter your password :
     </label>
     
     <input type="text" name="password" class="password"/>
     <br>
     <select class="form-control" name="selectname">
      <option value='0'>please select</option>
      <option value='1'>student</option>
      <option value='2'>admin</option>
     </select>
     <br>
     <input type="submit" class="submit" />

     <?php

if($dat===TRUE){
    echo "<div class='dat'>"."wrong details....."."</div>";
}
?>
<br>
<div class="ask-register">Don't have an account ? <a href="register.php">make it </a> </div>
</form>


 

</body>
</html>
<style>
  html,body{
    margin:0;
    padding:0;
    
  }
  .ask-register{
      background-color:white;
      color:black;
      margin-top:10px;
      opacity:0.7;
      text-align:center;
      font-size:20px;
  }
  .ask-register a{
      text-decoration:none;
      color:red;
      text-shadow: 0 1px 2px blue;
  }
  .dat{
      color:white;
      font-size:25px;
      text-shadow:0px 1px 1px black;
      
  }
  .login-write{
    color:white;
  }
  .lin{
    border:2px black solid;
    text-decoration:none;
    color:black;
    transition: all .4s ease;
  }
  .wel1:hover{
    text-shadow:0 5px 5px black; 
  }
  .wel{
   
    position:absolute;
    color:black;
    font-size:50px;
    text-shadow:0 2px 2px black;
    margin-top:30%;
    width:100%;
    height:100vh;
    text-align:center;

  }
  label,input{
      color:white;
      margin-top:25px;
  }



 .video-cont{
  
   width:auto;
   z-index:-1;
 position:fixed;
  
 }
 label{
      font-size:25px;
      
  }
  input{
      height:27px;
      width:700px;
      background-color:black;
  }
  .login{
    position:absolute;
    text-align:center;
    margin-top:200px;
    margin-left:200px;
    
  }

  .submit{
    width:100px;
   
    border-radius:20px 20px;
  }


 @media screen and (max-device-width:950px){
  .login{
    position:absolute;
    text-align:center;
    margin-top:200px;
    margin-left:10px;
    
  }
    .ask-register{
      background-color:white;
      color:black;
      font-size:10px;
  }
    .ask-register a{

      text-decoration:none;
      color:red;
      text-shadow: 0 1px 2px blue;
  }
  .wel{
   
   position:absolute;
   color:black;
   font-size:20px;
   text-shadow:0 2px 2px black;
   margin-top:30%;
   width:100%;
   height:100vh;
   text-align:center;

 }
  .wel1{
    position:absolute;
    color:black;
    font-size:20px;
    text-shadow:0 2px 2px black;
    margin-top:78%;
    width:100%;
    height:100vh;
    text-align:center;

  }
  label{
      font-size:13px;
  }
  input{
      height:10px;
      width:200px;
  }

  .submit{
    width:60px;
    height:20px;
    border-radius:20px 20px;
  }
 }
    </style>

<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>