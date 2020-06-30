<?php    
    session_start();
    if(isset($_POST['submit'])){
    $name=$_POST["name"];
    $email=$_POST["email"];
    $pwd=$_POST["pwd"];
    function login($email,$pwd){
    $conn = mysqli_connect('localhost','root','','sdc');
    $query=mysqli_query($conn,"select email,pwd from signup where email='$email' and pwd='$pwd'");
    if (mysqli_num_rows($query) > 0) {
    {  
      $_SESSION['email']=$email;
      mysqli_close($conn);
      return true;
    }
    }
    }
    if(login($email,$pwd))
    { 
      header("Location: user.php?run=success");
      exit;
    }
    else
    {   
      header("Location: login.php?run=failed");
    }
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
        <li><a href="signup.php">Apply for Smart Card</a></li>
        <li><a href="aboutus.php">About Us</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li class="active"><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<!--SIGNUP FORM-->
<div class="row">
<div class="col-sm-4 col-md-4">

</div>
<div class="col-sm-4 col-md-4" style="background-color:#f2f2f2;height:580px;">
<div class="container">
  <div>
  <h3>Login Form</h3>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <div class="form-group">
      <label for="email">Email:</label>
      <input style="width:300px;" type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input style="width:300px;"type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" required>
    </div>
    <button type="submit" name="submit" class="btn btn-default">Submit</button>
  </form>
</div>
</div>
</div>
<div class="col-sm-4 col-md-4">

</div> 
</body>
</html>