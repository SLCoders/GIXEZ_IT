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
<link rel="shortcut icon" href="images/icon.png" type="image/x-icon">
<title>ADMIN DASHBOARD</title>
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

<body>
<div class="container-fluid" style="background: #191970;padding-bottom: 1px;padding-top: 3px">
	<h6 style="color: aliceblue;">Login as a - <?php echo($log)?></h6>
</div><br><br>
<div class="container">
	<p class="text-center">
   	  <img src="images/logo.png" class="img-fluid" alt="Placeholder image" style="width: 200px"> 
	</p><br>
	<h1 class="text-center">GIXEZ IT</h1>
  <h1 class="text-center">ADMIN DASHBOARD</h1>
</div><br>
<div class="container">
  <div class="row">
	  <div class="col-xl-2"></div>
	  <div class="col-xl-8">
	  	<div id="accordion1" role="tablist">
	  	  <div class="card">
	  	    <div class="card-header" role="tab" id="headingOne1">
	  	      <h5 class="mb-0 text-center"> <a href="client.php" role="button">All Client's Data Table </a> </h5>
  	        </div>
	  	   
  	      </div>
			<div class="card">
	  	    <div class="card-header" role="tab" id="headingOne1">
	  	      <h5 class="mb-0 text-center"> <a href="clientregister.php" role="button">Client Register From</a> </h5>
  	        </div>
	  	   
  	      </div>
	  	  <div class="card">
	  	    <div class="card-header" role="tab" id="headingTwo1">
	  	      <h5 class="mb-0 text-center"> <a href="quotedata.php" role="button" > Qutoe Data </a> </h5>
  	        </div>
	  	   
  	      </div>
	  	  <div class="card">
	  	    <div class="card-header" role="tab" id="headingThree1">
	  	      <h5 class="mb-0 text-center"> <a href="contactform.php" role="button" > Contact Form Data </a> </h5>
  	        </div>
	  	    
  	      </div>
			<div class="card">
	  	    <div class="card-header" role="tab" id="headingThree1">
	  	      <h5 class="mb-0 text-center"> <a href="subcribeform.php" role="button" > Subcribe Form Data </a> </h5>
  	        </div>
	  	    
					</div>
					<div class="card">
	  	    <div class="card-header" role="tab" id="headingThree1">
	  	      <h5 class="mb-0 text-center"> <a href="buynow.php" role="button" > Buy Now Form Data </a> </h5>
  	        </div>
	  	    
  	      </div>
		  <div class="card">
	  	    <div class="card-header" role="tab" id="headingThree1">
	  	      <h5 class="mb-0 text-center"> <a href="logout.php" role="button" > Logout </a> </h5>
  	        </div>
	  	    
  	      </div>
  	    </div>
		  <hr>
		  <h6 class="text-center">Please Make Suwer to logout to protect data</h6>
      </div>
	  <div class="col-xl-2"></div>
  </div>
</div>
<div><br></div>
<div><br></div>
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