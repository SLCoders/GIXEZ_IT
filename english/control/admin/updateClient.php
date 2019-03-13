<?php
	session_start();
	if(!isset($_SESSION["currentUserDetails"])){
		header("location:index.html");
	}
	$log= $_SESSION['currentUserDetails']["email"];
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Update Client Details</title>
<link rel="shortcut icon" href="images/icon.png" type="image/x-icon">
<link href="css/bootstrap-4.0.0.css" rel="stylesheet" type="text/css">
<style>
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: red;
   color: white;
   text-align: center;
}
</style>
</head>

<body style="padding-top: 70px">
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light" style="background: linear-gradient(to bottom, #4169E1, MidnightBlue)"> <a class="navbar-brand" href="http://www.gixez.com/" style="color: aliceblue">GIXEZ IT</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation" style="background:aliceblue"> <span class="navbar-toggler-icon"></span> </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent1">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active"> <a class="nav-link" href="dash.php" style="color: aliceblue">Dashboard <span class="sr-only">(current)</span></a> </li>
      <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: aliceblue"> Clinet </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown1"> <a class="dropdown-item" href="client.php">All Data Table</a> <a class="dropdown-item" href="updateClient.php">Update Client Data</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="clientregister.php">Client Registration Form</a> </div>
      </li>
	  <li class="nav-item"> <a class="nav-link" href="quotedata.php" style="color: aliceblue">Quote Data</a> </li>
	  <li class="nav-item"> <a class="nav-link" href="contactform.php" style="color: aliceblue">Contact Form Data</a> </li>
    <li class="nav-item"> <a class="nav-link" href="subcribeform.php" style="color: aliceblue">Subcribe Form Data</a> </li>
    <li class="nav-item"> <a class="nav-link" href="buynow.php" style="color: aliceblue">Buy Now Form Data</a> </li>
	  <li class="nav-item"> <a class="nav-link" href="logout.php" style="color: aliceblue">Log Out</a> </li>
    </ul>
    <div>
	 <h6 style="color: aliceblue"> Login as a - <?php echo($log)?></h6>
    </div>
  </div>
</nav>
<div class="container"><br>
	<p class="text-center">
    <img src="images/logo.png" class="img-fluid" alt="Placeholder image" style="width: 200px"> 
	</p>
	<h1 class="text-center">Admin Dashboard</h1>
	  <hr>
</div>
<div class="container">
  <div class="row">
    <div class="col-xl-4"></div>
    <div class="col-xl-4">
      <h5 class="text-center"><strong>Update Client Details</strong></h5>
		<p class="text-capitalize text-center">Pick Client ID form All Clent's Data Table</p>
		<form action="UpdateClientData.php" method="post">
		  <div class="form-group">
    			<input type="text" class="form-control" id="email" placeholder="Eg - 1" name = "searchid"><br>
    			<p class="text-center">
           <button type="submit" class="btn btn-primary">Search</button>
          </p>
  			</div>
		</form>
    </div>
    <div class="col-xl-4"></div>
  </div>
</div>
<div class = "container">
	<hr>
	<h6 class = "text-center">Please Make Suwer to log out to protect data</h6>
</div>
<footer class="footer">
<div class="container-fluid" style="background: #2E2E2E; padding-bottom: 3px ;padding-top: 3px;">
	<h6 style="color: aliceblue;text-align: center; padding-top: 5px;">GIXEZ IT Admin Dashboard 2019 <sup>©</sup></h6>
	</div>
</footer>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap-4.0.0.js"></script>
</body>
</html>