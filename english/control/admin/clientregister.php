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
<title>Client Registration Form</title>
<link href="css/bootstrap-4.0.0.css" rel="stylesheet" type="text/css">
<style type="text/css">
@media (max-width: 1302px){
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
	<h4 class="text-center">Client Registration Form</h4>
	  <hr>
</div>
<div class="container">
<h5>Client Personal Details</h5>
<form action="clientregisterData.php" method="post">
	  <div class="form-group">
	    <label for="exampleInputEmail1">Frist Name*</label>
	    <input type="text" class="form-control" id="exampleInputEmail1"   required name = "fristName">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputEmail1">Last Name*</label>
	    <input type="text" class="form-control" id="exampleInputEmail1"  required name = "lastname">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputEmail1">Address* </label>
	    <input type="text" class="form-control" id="exampleInputEmail1" required name = "Adress">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputEmail1">Contact Number*</label>
	    <input type="text" class="form-control" id="exampleInputEmail1"  required name = "contactNo">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputEmail1">Email*</label>
	    <input type="email" class="form-control" id="exampleInputEmail1"  required name = "email">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputEmail1">Password*</label>
	    <input type="text" class="form-control" id="exampleInputEmail1"  required name = "password"> 
	  </div>
	  <hr>
	  <h5>Business Details</h5>
	  <div class="form-group">
	    <label for="exampleInputEmail1">Business Type* </label>
	    <input type="text" class="form-control" id="exampleInputEmail1"  required name = "bustype">  
	  </div>
	  <div class="form-group">
	    <label for="exampleInputEmail1">Business Name* </label>
	    <input type="text" class="form-control" id="exampleInputEmail1"  required name = "busname"> 
	  </div>
	  <div class="form-group">
	    <label for="exampleInputEmail1">Business Address* </label>
	    <input type="text" class="form-control" id="exampleInputEmail1"  required name = "busaddress"> 
	  </div>
	  <div class="form-group">
	    <label for="exampleInputEmail1">Business Email </label>
	    <input type="email" class="form-control" id="exampleInputEmail1"  name = "busemail"> 
	  </div>
	  <div class="form-group">
	    <label for="exampleInputEmail1">Office Phoneline* </label>
	    <input type="text" class="form-control" id="exampleInputEmail1"  required name = "officePhone"> 
	  </div>
	  <hr>
	  <h5>Payment Details</h5>
	  <div class="form-group">
	    <label for="exampleInputEmail1">Full Payment* </label>
	    <input type="text" class="form-control" id="exampleInputEmail1" required name = "fullPayment"> 
	  </div>
	  <div class="form-group">
	    <label for="exampleInputEmail1">Discount  </label>
	    <input type="text" class="form-control" id="exampleInputEmail1"   name = "discount"> 
	  </div>
	  <div class="form-group">
  			<label for="sel1">Paymnet Methord*</label>
  			<select class="form-control" id="sel1" required name = "paymentMethord">
					<option>Cash</option>
					<option>Check</option>
				</select>
		</div>
	  <div class="form-group">
	    <label for="exampleInputEmail1">Check Number </label>
	    <input type="text" class="form-control" id="exampleInputEmail1"    name = "checkNumber"> 
	  </div>
	  <div class="form-group">
  			<label for="sel1">Bank Name*</label>
  			<select class="form-control" id="sel1" required name = "bank">
					<option>None</option>
					<option>Amana</option>
					<option>BOC</option>
					<option>Commercial Bank</option>
					<option>DFCC</option>
					<option>HNB</option>
					<option>NDB</option>
					<option>Nationtrust Bank</option>
					<option>Pan Asia</option>
					<option>Peoples Bank</option>
					<option>Sampath Bank</option>
					<option>Seylan Bank</option>
					<option>Standard Chartered Bank</option>
					<option>HSBC</option>
					<option>Union Bank</option>
				</select>
		</div>
	  <div class="form-group">
  			<label for="sel1">Paymnet Status* </label>
  			<select class="form-control" id="sel1" required name = "paymentStaus">
					<option>Pending</option>
					<option>Complete</option>
				</select>
		</div>
	  <div class="form-group">
	    <label for="exampleInputEmail1">Frist Payment </label>
	    <input type="text" class="form-control" id="exampleInputEmail1"   name = "fristPayment"> 
	  </div>
	  <div class="form-group">
	    <label for="exampleInputEmail1">Frist Payment Date  </label>
			<input type="date" class="form-control" id="exampleInputEmail1"   name = "fristPayDate"> 
	  </div>
	  <div class="form-group">
	    <label for="exampleInputEmail1">Due Payment </label>
	    <input type="text" class="form-control" id="exampleInputEmail1"   name = "duePay"> 
	  </div>
	  <div class="form-group">
	    <label for="exampleInputEmail1">Complete the Due Payment Before </label>
			<input type="date" class="form-control" id="exampleInputEmail1"   name ="completDueDate"> 
	  </div>
	  <hr>
	  <h5>Project Details</h5>
	  <div class="form-group">
	    <label for="exampleInputEmail1">Projct Name </label>
	    <input type="text" class="form-control" id="exampleInputEmail1"   name = "projectName"> 
	  </div>
	  <div class="form-group">
	    <label for="exampleInputEmail1">Project Starts </label>
			<input type="date" class="form-control" id="exampleInputEmail1"   name = "proStart">
	  </div>
	  <div class="form-group">
  			<label for="sel1">Project Status* </label>
  			<select class="form-control" id="sel1" required name = "proStaus">
					<option>Pause</option>
					<option>Running</option>
					<option>Complete</option>
					<option>Waiting for Payments</option>
					<option>Waiting for Modernization Agreement</option>
				</select>
		</div>
	  <div class="form-group">
	    <label for="exampleInputEmail1">Astimate Delivary Date </label>
			<input type="date" class="form-control" id="exampleInputEmail1"   name = "proAsstimateTime"> 
		</div>
		<div class="form-group">
	    <label for="exampleInputEmail1">Project URL </label>
			<input type="text" class="form-control" id="exampleInputEmail1"   name = "url"> 
			<small>Add <b>https:// or http://</b> to infront to the URL</small>
		</div>
	   <p class="text-center text-capitalize">ReCheck the Details and Make suwer all the details are corret. <br>Click Submit Button to Update Client Details</p>
	  <p class="text-center">
			<button type="submit" class="btn btn-primary">Submit</button>
		</p>
	  <hr>
  </form>
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