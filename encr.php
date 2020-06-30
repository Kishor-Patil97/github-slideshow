 <?php
    require 'Aes.php';     // AES PHP implementation
    require 'aesctr.php';  // AES Counter Mode implementation
    // initialise password & plaintext if not set in post array
    $pw = empty($_POST['pw']) ? ''              : $_POST['pw'];
    $pt = empty($_POST['pt']) ? '' : $_POST['pt'];
    $cipher = empty($_POST['cipher']) ? '' : $_POST['cipher'];
    $plain  = empty($_POST['plain'])  ? '' : $_POST['plain'];

    // perform encryption/decryption as required
    $encr = empty($_POST['encr']) ? $cipher : AesCtr::encrypt($pt, $pw, 128);
  
    $decr = empty($_POST['decr']) ? $plain  : AesCtr::decrypt($cipher, $pw, 128);
?>

 <!DOCTYPE html>
<html lang="en">
<head>
  <title>SMART CARD</title>
  <link rel="icon" type="image/gif/png" href="smartcard.png">
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
  <script type="text/javascript">
      var password = document.getElementById("pwd")
      , confirm_password = document.getElementById("cpwd");

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
      <a class="navbar-brand" href="index.php">Smart Card</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <!--<li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Page 1-1</a></li>
            <li><a href="#">Page 1-2</a></li>
            <li><a href="#">Page 1-3</a></li>
          </ul>
        </li>-->
        <li><a href="#">Apply for Smart Card</a></li>
        <li><a href="#">Explore</a></li>
        <li><a href="#">About Us</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
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
      <label for="name">Encryption Key:</label>
      <input style="width:300px;" type="text" class="form-control" id="name" placeholder="Enter encryption key" name="pw" required>
    </div>
    <div class="form-group">
      <label for="contact">Password:</label>
      <input style="width:300px;" type="text" class="form-control" id="contact" placeholder="Enter Password" name="pt" required>
    </div>
    <button type="submit" name="encr" value="Encrypt It"class="btn btn-default">Encrypt It</button>
    <button type="submit" name="decr" value="Decrypt It"class="btn btn-default">Decrypt It</button>
  </form>
</div>
</div>
</div>
<div class=" col-sm-4 col-md-4">

</div>
</body>
</html> 