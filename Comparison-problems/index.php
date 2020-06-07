<!DOCTYPE html>
<html lang="en-US">
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css"> 

<body style="margin-top:60px;">
    <h2 style="text-align: center;"> Enter the correct password to get the flag </h2>
    <br>
<form style="margin-left: 450px;margin-right: 500px;" >
    
    <div class="form-group">
        
      
      <label>Password</label>
      <input name="password" type="text" class="form-control" id="uname">
      
    </div>
  
  
  <button type="submit" class="btn btn-primary">Submit</button>

 

<br><br><br>

<?php

if(isset($_GET['password']))
{
    $pwd=file_get_contents("flag.txt");
    
    if ($_GET['password'] && !empty($_GET['password']) && strcmp( $pwd, $_GET['password']) == 0)
    {
        
       echo $pwd;
    }
    else
    {
        echo 'Invalid';
    }
}
?>
</form>   
</body>
</html>