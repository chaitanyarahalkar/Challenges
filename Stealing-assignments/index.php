<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#" style="margin-left: 50px;">Assignments Portal</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

</nav>

x
<div class="container" style="padding: 80px;">
<div class="row">


<div class="col">    
<form method="POST">
  <div class="form-group" >
    <label >Username</label>
    <input type="text" name="uname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="pass" class="form-control" id="exampleInputPassword1">
  </div>

  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

<div class="col" style="margin-left: 180px;">
    	<h3> Notice</h3>
      
  <div class="card" style="width: 18rem; margin-top: 40px;">
	<div class="card-body"><h5 class="card-title">14 June 2020</h5><p class="card-text">All students must submit their assignments before 15 June 2020 12pm.</p>

    </div>
  </div>
</div>



<?php   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
       
    if($uname = "elliot" and  $pass = "elliot123"){
      header("location: ZWxsaW90.php");

    }
     
    
  
      
    else
    {
        echo "Invalid credentials";
    }
    }
?>



</div>
</div>





</body>
</html>