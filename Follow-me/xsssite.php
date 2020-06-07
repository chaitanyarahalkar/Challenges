<?php
ob_start();
    session_start();

ob_end_flush();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</head>
<body>
	<?php 
	
		include('nav.php');
	
	?>


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
    	<h3> Here's what our customers say</h3>
      
  	<?php
  	$servername = "localhost";
    $username = "root";
    $password = "";
    $db = "ics_xss";
    
    $conn = new mysqli($servername, $username, $password, $db);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  } 

      $sql = "SELECT username, comment FROM feedback";
      $result = mysqli_query($conn,$sql);
      while($row = $result->fetch_assoc()) {
        echo '<div class="card" style="width: 18rem; margin-top: 40px;">
	<div class="card-body"><h5 class="card-title">' . $row["username"]. '</h5><p class="card-text">' . $row["comment"]. "</p></div></div>";
    }

  $conn->close();
?>

    </div>
  </div>
 </div>
</body>
</html>
<?php   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
       
      // username and password sent from form 
     $uname = $_POST['uname'];
     $pass = $_POST['pass'];
     
    // sql connectivity

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ics_xss";
    

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT username FROM users where username = ? AND password = ?"); 
    $stmt->execute([$uname, $pass]);

    $row = $stmt->fetch();
    if($row)
    {
        $_SESSION["login_user"] = $row['username'];
    }
    else
    {
        unset($_SESSION["login_user"]);
    }
    header("location: feedback.php");

}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
}
?>
