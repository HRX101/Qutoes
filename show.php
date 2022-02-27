<?php
include "db.php";
$res="SELECT Name,qutoes FROM qutoes";
$result=$con->query($res);
 

?>
<!DOCTYPE html>
<html>
    <head>

        <title>
            Qutoes
</title>
<link rel="stylesheet" type="text/css" href="qutoes.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>
<body style="background-color:silver;">
<nav class="navbar navbar-expand  bg-dark" style="border:none;box-shadow:0 2px 2px black;font-size:20px;outline:none;color:white;">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php" style="color:white;border:none;outline:none;font-size:30px;font-family:Arial, Helvetica, sans-serif;">QO</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="show.php">Show</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

    <br>
    <table class="table table-success table-striped">
  <thead>
    <tr>
    <th scope="col">Qutoes</th>
      <th scope="col">Name</th>
    </tr>
  </thead>
  <tbody>
    
      <?php
      if($result!==FALSE && $result->num_rows>0){
        while($row=$result->fetch_assoc()){
          echo "<tr>"."<td>"."<p style='color:black;family-weight:bold;font-style:italic;'>"."<q>".$row['qutoes']."</q>"."</p>"."</td>"."<td>".$row['Name']."</td>"."</tr>";
        
          
        }
      }
      $result -> free_result();

      $con->close();
      ?>
    
  </tbody>
</table>
<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top" style="height:100px;position:absolute;left:0;bottom:-100%;background-color: #ffeaa7;
background-image: linear-gradient(315deg, #ffeaa7 0%, #000000 74%);width:100%;">
    <p class="col-md-4 mb-0 text-muted" style="color:black;font-weight:bold;">© 2021 Company, Inc</p>

    <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
      <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
    </a>

    <ul class="nav col-md-4 justify-content-end" style="position:relative;justify-content:center;right:100px;">
      <li class="nav-item" style="position:relative;right:10px;"><a href="https://www.facebook.com/hrithik.pal.16906" style="text-decoration:none;color:black;"><i class="fa fa-facebook" style="font-size:24px"></i></a></li>
      <li class="nav-item"><a href="https://www.linkedin.com/in/hrithik-pal-670592201/" style="text-decoration:none;color:black;"><i class="fa fa-linkedin" style="font-size:24px"></i></a></li>
      <li class="nav-item" style="position:relative;left:10px;"><a href="https://wa.link/hi9yon" style="text-decoration:none;color:black;"><i class="fa fa-whatsapp" style="font-size:24px"></i></a></li>
    </ul>
  </footer>
</body>
<style>
  body{
    height:100%;
    display:flex;
    flex-direction:column;
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
  </style>
</html>
