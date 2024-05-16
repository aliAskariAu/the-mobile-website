<?php
session_start ();
require ("../model/connection.php");
require ("../model/functions.php");

$username = $_POST["username"]; 
$user_password = $_POST["user_password"]; 

$count = login($username, $user_password); 
if($count == 1) { 
      $_SESSION["user"] = $username; 
      $_SESSION["success"] = "Hello ". $username. ". Have a great day!";
      $_SESSION["permissions"] = $permissions;
        header("location:../view/customer_home.php"); 
    } 
else { 
    $_SESSION["error"] = "Incorrect username or password. Please try again."; 
    header("location:../view/login.php"); 
} 



?>
