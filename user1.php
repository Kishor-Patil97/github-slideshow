<!DOCTYPE html>
<html lang="en">
<head>
  <title>SMART CARD</title>
  <link rel="icon" type="image/gif/png" href="smartcard.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <style>
  img{
  display: block;
    margin-left: auto;
    margin-right: auto;
  } 
  body{
    font-family: 'Open Sans', sans-serif;
  }
</style>
</head>
<body style="height:1500px">
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
        <!--<li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>-->
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="row">
     <div style="height:625px;margin-top: -20px;" class="col-md-2">

     </div>
     <div class="col-md-8">
     	<div style="margin-top:-20px;" class="row">
     		<div style="background-color:#edeff2;height:300px;" class="col-md-6 col-sm-6 col-xs-6">
     			<!--<a style="margin-top: 120px;" href="index.php" class="btn btn-primary center-block" role="button">Apply for Smart Card</a>-->
     			<button style="margin-top: 120px;" type="button" class="btn btn-primary center-block"><a style="text-decoration:none;color:white;margin-top: 120px;" href="index.php" role="button">Apply for Documents</a></button>
     		</div>
     		<div style="background-color:#edeff2;height:300px;" class="col-md-6 col-sm-6 col-xs-6">
     			<form action="fileup.php" method="post" enctype="multipart/form-data">
     				<button style="position: relative;overflow: hidden;margin-top: 120px;" type="button" class="btn btn-primary center-block">Upload Documents<input style="position: absolute;opacity: 0;right: 0;top: 0;" type="file" name="myfile"/></button><br/>
     				<input type="submit" class="btn btn-primary center-block" name="submit" value="Upload File Now" >
				</form>
     		</div>
      	</div>

      	<div class="row">
     		<div style="background-color:#edeff2;height:300px;" class="col-md-6 col-sm-6 col-xs-6">
     			<!--<button style="margin-top: 120px;" type="button" class="btn btn-primary center-block">View Documents</button>-->
     			<button style="margin-top: 120px;" type="button" class="btn btn-primary center-block"><a style="text-decoration:none;color:white;margin-top: 120px;" href="index.php" role="button">View Documents</a></button>
     		</div>
     		<div style="background-color:#edeff2;height:300px;" class="col-md-6 col-sm-6 col-xs-6">
     			<!--<button style="margin-top: 120px;" type="button" class="btn btn-primary center-block">Edit Documents</button>-->
     			<button style="margin-top: 120px;" type="button" class="btn btn-primary center-block"><a style="text-decoration:none;color:white;margin-top: 120px;" href="index.php" role="button">Edit Documents</a></button>
     		</div>
      	</div>

     </div>
     <div style="height:625px;margin-top: -20px;" class="col-md-2">

     </div>
</div>
</body>
</html>
<?php
}
?>






if(!isset($_SESSION['email']) || $_GET['run']=="failed"){
   header("Location: login.php");
}else{

?>



