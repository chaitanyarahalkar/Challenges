<?php

$username = $_POST["username"];
$password = $_POST["password"];

$flag = file_get_contents("/root/flag.txt");

if($_SERVER['REQUEST_METHOD'] == "POST"){

if(sha1($password) == '0e76658526655756207688271159624026011393' && $username == "chaitanya"){
	
   echo "<h3> Welcome to CTF! The flag is $flag. </h3>";
}
else{

echo "<h3> You are unauthorized! </h3>";

}


  
}


?> 
