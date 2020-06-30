<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['email']) || empty($_POST['pwd'])) {
$error = "Username or Password is invalid";
}
else
{
$email=$_POST['email'];
$pwd=$_POST['pwd'];
$conn = mysqli_connect("localhost", "root", "","smartcard");
$query = mysqli_query( $conn,"select email,pwd from signup where pwd='$pwd' AND email='email'");
$rows = mysqli_num_rows($query);
if ($rows == 1) {
$_SESSION['email']=$email; // Initializing Session
header("Location: user.php?run=success"); // Redirecting To Other Page
} 
else
{   
header("Location: login.php?run=failed");
}
mysql_close($conn); // Closing Connection
}
}
?>