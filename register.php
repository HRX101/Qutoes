<?php
if(isset($_POST['username'])){
    include "db.php";
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
   
    $prev_user="SELECT username from register where email='$email'";
    $result1=$con->query($prev_user);
    if($result1!==FALSE && $result1->num_rows>0){
      echo "already exsit";
      header("register.php");
    }
    else{
      $sql="INSERT INTO `qutoes`.`register` (`username`, `email`, `password`) VALUES ('$username', '$email', '$password')";
      $result=$con->query($sql);
      
    }

    $result1 -> free_result();

    $con->close();
   

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
</head>
<body>
<div class="main">
 

 <section class="vid">
 <video  playsinline="playsinline" muted="muted" preload="yes" autoplay="autoplay"  loop autoplay class="video-cont">
   <source src="leave.mp4">
   
</section>
</div>
 
 

 <form action="register.php" method="POST" class="register">
     <label>
         Enter your username :
     </label>
     <input type="text" name="username" class="username"/>
     <br>
     <label>
         Enter your email :
     </label>
     
     <input type="text" name="email" class="email"/>
     <br>
     <label>
         Enter your password :
     </label>
     
     <input type="text" name="password" class="password"/>
     <br>

     <br>
     <input type="submit" class="submit"/>
     <div class="login-write">go to login page after registration</div><br>

<div class="login"><a href="login.php">login</a></div>
<div class="page"><a href="home.php">1st page</a></div>


</form>


 

</body>
</html>
<style>
  html,body{
    margin:0;
    padding:0;
    
  }
  .page{
    background-color:black;
    width:10%;
    margin-top:10px;
    border-radius:20px 20px;
    text-align:center;
    color:white;
    box-shadow:0 2px 2px white;
  }
  .page a{
    text-decoration:none;
    color:white;
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
      font-size:23px;
      
  }
  input{
      height:25px;
      width:500px;
      background-color:black;
  }
  .register{
    position:absolute;
    margin-left:100px;
    
  }

  .submit{
    width:100px;
   
    border-radius:20px 20px;
  }
  .login a{
    text-decoration:none;
    color:black;
  }
  .login{
    color:black;
    background-color:white;
    border-radius:20px 20px;
    text-decoration:none;
    width:50px;
    text-align:center;
  }
  .login:hover{
    box-shadow:0 5px 5px black;
  }
 @media screen and (max-device-width:950px){
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