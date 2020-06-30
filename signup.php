 <?php
  session_start();
  if(isset($_POST['submit'])){
  $conn = mysqli_connect('localhost','root','','sdc');
  $name=$_POST["name"];
  $contact=$_POST["contact"];
  $uid=$_POST["uid"];
  $email=$_POST["email"];
  $pwd=$_POST["pwd"];
  $cpwd=$_POST["cpwd"];
  $sql = "INSERT INTO signup (name,contact,uid,email,pwd,cpwd) VALUES ('$name',$contact,$uid,'$email','$pwd','$cpwd')";
  if (mysqli_query($conn, $sql)) {
      header("Location: login.php?run=success");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
}
?>

 <!DOCTYPE html>
<html lang="en">
<head>
  <title>STUDENT DATACARD</title>
  <link rel="icon" type="image/gif/png" href="student datacard.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <style>
  body{
    font-family: 'Open Sans', sans-serif;
  }
</style>
</head>
<body style="background-color:  #f2f2f2;">

<!--FIXED NAVBAR-->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <ul class="nav navbar-nav">
      <li><img class="img-responsive" src="student datacard icon.png" alt="Student Datacard" width="50" height="25"></li>
      <li>&nbsp;</li>
      <li><a class="navbar-brand" href="index.php">Student Datacard</a></li>
    </ul> 
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home</a></li>
        <!--<li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Page 1-1</a></li>
            <li><a href="#">Page 1-2</a></li>
            <li><a href="#">Page 1-3</a></li>
          </ul>
        </li>-->
        <li class="active"><a href="signup.php">Apply for Student Datacard</a></li>
        <li><a href="aboutus.php">About Us</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<!--VALIDATIONS
  <?php
    $name = $contact = $uid = $email = $pwd = $cpwd =" ";
    $count = 1;
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
      if (empty($_POST["name"])) {
        echo 'Name is required';
        ++$count;
      }
    }
      if($count>1){}else{
        $sql = "INSERT INTO signup (name,contact,uid,email,pwd,cpwd) VALUES ('$name',$contact,$uid,'$email','$pwd','$cpwd')";
  }
?>-->

<!--SIGNUP FORM-->
<div class="row">
<div class="col-sm-4 col-md-4">

</div> 
<div class="col-sm-4 col-md-4" style="height:650px;margin-top:-20px; ">
<div class="container">
  <div>
  <h3>Signup Form</h3>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
    <div class="form-group">
      <label for="name">Name:</label>
      <input style="width:300px;" type="text" class="form-control" id="name" placeholder="Enter name" name="name" required>
    </div>
    <div class="form-group">
      <label for="contact">Contact No:</label>
      <input style="width:300px;" type="tel" class="form-control" id="contact" placeholder="Enter contact no." name="contact" required>
    </div>
    <div class="form-group">
      <label for="email">User ID:</label>
      <input style="width:300px;" type="text" class="form-control" id="uid" placeholder="Enter User ID (ERP No.)" name="uid" required>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input style="width:300px;" type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input style="width:300px;"type="password" class="form-control" id="password" placeholder="Enter password" name="pwd" required>
    </div>
    <div class="form-group">
      <label for="cpwd">Confirm Password:</label>
      <input style="width:300px;"type="password" class="form-control" id="confirm_password" placeholder="Re-enter password" name="cpwd" required>
    </div>
    <button type="submit" name="submit" class="btn btn-default">Submit</button>
    <script>
       var password = document.getElementById("password")
       , confirm_password = document.getElementById("confirm_password");

       function validatePassword(){
       if(password.value != confirm_password.value) {
       confirm_password.setCustomValidity("Passwords Don't Match");
       } else {
       confirm_password.setCustomValidity('');
       }
       }
       password.onchange = validatePassword;
       confirm_password.onkeyup = validatePassword;
       </script>                                 
  </form>
</div>
</div>
</div>
<div class=" col-sm-4 col-md-4">

</div>
</body>
</html> 