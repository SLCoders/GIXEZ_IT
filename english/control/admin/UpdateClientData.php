<?php
session_start();
if(!isset($_SESSION["currentUserDetails"])){
	header("location:index.html");
}
$log= $_SESSION['currentUserDetails']["email"];

	$searchdata = $_POST['searchid'];
	
	$link = mysqli_connect("localhost","gixezcom_admin","0757003662","gixezcom_gixez");
	$q = "SELECT*FROM userlogin WHERE ID = '$searchdata'";
	$run = mysqli_query($link,$q);
	$row=mysqli_fetch_assoc($run);

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Client Details Update  Form</title>
<link rel="shortcut icon" href="images/icon.png" type="image/x-icon">
<style type="text/css">
@media (max-width: 1302px){
}

</style>
<link href="css/bootstrap-4.0.0.css" rel="stylesheet" type="text/css">
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
	<h4 class="text-center">Client Details Update  Form</h4>
	  <hr>
</div>
<div class="container">
<h5>Client Personal Details</h5>
<form action="updatequary.php" method="post">
	  <div class="form-group">
	    <label for="exampleInputEmail1">Clinet ID</label>
	    <input type="text" class="form-control" id="exampleInputEmail1"  readonly value="<?php echo($row['ID'])?>" name = "id">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputEmail1">Frist Name</label>
	    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="<?php echo($row['fristName'])?>" required name = "fristName">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputEmail1">Last Name</label>
	    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="<?php echo($row['lastName'])?>" required name = "lastname">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputEmail1">Address </label>
	    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="<?php echo($row['address'])?>" required name = "Adress">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputEmail1">Contact Number</label>
	    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="<?php echo($row['contatNo'])?>" required name = "contactNo">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputEmail1">Email</label>
	    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="<?php echo($row['email'])?>" required name = "email">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputEmail1">Password </label>
	    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="<?php echo($row['password'])?>" required name = "password"> 
	  </div>
	  <hr>
	  <h5>Business Details</h5>
	  <div class="form-group">
	    <label for="exampleInputEmail1">Business Type </label>
	    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="<?php echo($row['busType'])?>" required name = "bustype">  
	  </div>
	  <div class="form-group">
	    <label for="exampleInputEmail1">Business Name </label>
	    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="<?php echo($row['busName'])?>" required name = "busname"> 
	  </div>
	  <div class="form-group">
	    <label for="exampleInputEmail1">Business Address </label>
	    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="<?php echo($row['busAddress'])?>" required name = "busaddress"> 
	  </div>
	  <div class="form-group">
	    <label for="exampleInputEmail1">Business Email </label>
	    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="<?php echo($row['busEmail'])?>" required name = "busemail"> 
	  </div>
	  <div class="form-group">
	    <label for="exampleInputEmail1">Office Phoneline </label>
	    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="<?php echo($row['busPhone'])?>" required name = "officePhone"> 
	  </div>
	  <hr>
	  <h5>Payment Details</h5>
	  <div class="form-group">
	    <label for="exampleInputEmail1">Full Payment </label>
	    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="<?php echo($row['fullPayment'])?>" required name = "fullPayment"> 
	  </div>
	  <div class="form-group">
	    <label for="exampleInputEmail1">Discount  </label>
	    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Discount" value="<?php echo($row['discount'])?>" required name = "discount"> 
	  </div>
	  <div class="form-group">
  			<label for="sel1">Paymnet Methord</label>
  			<select class="form-control" id="sel1" required name = "paymentMethord">
					<option>Cash</option>
					<option>Check</option>
				</select>
				<small>Note - Select the Corrct Payment Methord, If you are do not update the payment Methord  select the <b>"Prevously Selected (<?php echo($row['paymnetMethord'])?>)"</b></small>
		</div>
	  <div class="form-group">
	    <label for="exampleInputEmail1">Check Number </label>
	    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="No Check Number" value="<?php echo($row['checkNumber'])?>" required name = "checkNumber"> 
	  </div>
	  <div class="form-group">
  			<label for="sel1">Bank Name</label>
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
				<small>Note - Select the Corrct Bank, If you are do not update the bank select the <b>"Prevously Selected (<?php echo($row['bank'])?>)"</b></small>
		</div>
	  <div class="form-group">
  			<label for="sel1">Paymnet Status </label>
  			<select class="form-control" id="sel1" required name = "paymentStaus">
					<option>Pending</option>
					<option>Complete</option>
				</select>
				<small>Note - Select the Corrct Payment Status , If you are do not update the payment Status  select the <b>"Prevously Selected (<?php echo($row['paymentStatus'])?>)"</b></small>
		</div>
	  <div class="form-group">
	    <label for="exampleInputEmail1">Frist Payment </label>
	    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="<?php echo($row['fristPayment'])?>" required name = "fristPayment"> 
	  </div>
	  <div class="form-group">
	    <label for="exampleInputEmail1">Frist Payment Date  </label>
			<input type="date" class="form-control" id="exampleInputEmail1" placeholder="Enter email" required name = "fristPayDate"> 
			<small>Note - Select the Corrct Date, If you are do not update the Date select the <b>"Prevously Selected (<?php echo($row['fristPaymentDate'])?>)"</b></small>
	  </div>
	  <div class="form-group">
	    <label for="exampleInputEmail1">Due Payment </label>
	    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="<?php echo($row['duePayment'])?>" required name = "duePay"> 
	  </div>
	  <div class="form-group">
	    <label for="exampleInputEmail1">Complete the Due Payment Before </label>
			<input type="date" class="form-control" id="exampleInputEmail1" placeholder="Enter email" required name ="completDueDate"> 
			<small>Note - Select the Corrct Date, If you are do not update the Date select the <b>"Prevously Selected (<?php echo($row['duePaymentComplete'])?>)"</b></small>
	  </div>
	  <hr>
	  <h5>Project Details</h5>
	  <div class="form-group">
	    <label for="exampleInputEmail1">Projct Name </label>
	    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="<?php echo($row['projectName'])?>" required name = "projectName"> 
	  </div>
	  <div class="form-group">
	    <label for="exampleInputEmail1">Project Starts </label>
			<input type="date" class="form-control" id="exampleInputEmail1" placeholder="Enter email" required name = "proStart">
			<small>Note - Select the Corrct Date, If you are do not update the Date select the <b>"Prevously Selected (<?php echo($row['projectStarts'])?>)"</b></small> 
	  </div>
	  <div class="form-group">
  			<label for="sel1">Project Status </label>
  			<select class="form-control" id="sel1" required name = "proStaus">
					<option>Pause</option>
					<option>Running</option>
					<option>Complete</option>
					<option>Waiting for Payments</option>
					<option>Waiting for Modernization Agreement</option>
				</select>
				<small>Note - Select the Corrct Project Status , If you are do not update the Project Status  select the <b>"Prevously Selected (<?php echo($row['projectStatus'])?>)"</b></small>
		</div>
	  <div class="form-group">
	    <label for="exampleInputEmail1">Astimate Delivary Date </label>
			<input type="date" class="form-control" id="exampleInputEmail1" placeholder="Enter email" required name = "proAsstimateTime"> 
			<small>Note - Select the Corrct Date, If you are do not update the Date select the <b>"Prevously Selected (<?php echo($row['astimateDelivaryTime'])?>)"</b></small>
		</div>
		<div class="form-group">
	    <label for="exampleInputEmail1">Project URL </label>
			<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="<?php echo($row['URL'])?>" required name = "url"> 
			<small>Add <b>https:// or http://</b> to infront to the URL</small>
		</div>
	   <p class="text-center text-capitalize">ReCheck the Details and Make suwer all the details are corret and upto date. <br>Click Submit Button to Update Client Details</p>
	  <p class="text-center">
			<button type="submit" class="btn btn-primary">Submit</button>
			<a href = "updateClient.php"><button type="button" class="btn btn-primary">Search</button></a>
		</p>
	  <hr>
  </form>
</div>
<div class = "container">
	<h6 class = "text-center">Please Make Suwer to log out to protect your data</h6>
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