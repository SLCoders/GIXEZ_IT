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
<title>All Client's Data Table</title>
<link href="css/bootstrap-4.0.0.css" rel="stylesheet" type="text/css">
<link href="css/dash.css" rel="stylesheet" type="text/css">

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
<div class="container-fluid"><br>
	<p class="text-center">
	<img src="images/logo.png" class="img-fluid" alt="Placeholder image" style="width: 200px"> 
	</p>
	<h1 class="text-center">Admin Dashboard</h1>
	  <hr>
</div>
<div class="container-fluid">
  <h5 class="text-center"><strong>All Client's Data Table</strong></h5>
	<br>
	<?php
		$conn = mysqli_connect("localhost","gixezcom_admin","0757003662","gixezcom_gixez");
		$q = "SELECT * FROM userlogin";
		$result = mysqli_query($conn,$q);
 echo "<table width='1150' border='1' class= 'table-responsive table-hover table-sm'>";
  echo "<tbody>";
   echo "<tr class='table-primary'>".
      "<td align='center'>"."<b>"."Client ID"."</b>"."</td>".
      "<td align='center'>"."<b>"."Frist Name"."</b>"."</td>".
      "<td align='center'>"."<b>"."Last Name"."</b>"."</td>".
      "<td align='center'>"."<b>"."Address"."</b>"."</td>".
      "<td align='center'>"."<b>"."Contact Number"."</b>"."</td>".
      "<td align='center'>"."<b>"."Email "."</b>"."</td>".
      "<td align='center'>"."<b>"."Password"."</b>"."</td>".
			"<td align='center'>"."<b>"."Business Type"."</b>"."</td>".
			"<td align='center'>"."<b>"."Business Name"."</b>"."</td>".
			"<td align='center'>"."<b>"."Business Address"."</b>"."</td>".
			"<td align='center'>"."<b>"."Business Email"."</b>"."</td>".
			"<td align='center'>"."<b>"."Office Phoneline"."</b>"."</td>".
			"<td align='center'>"."<b>"."Full Payment"."</b>"."</td>".
			"<td align='center'>"."<b>"."Discount"."</b>"."</td>".
			"<td align='center'>"."<b>"."Payment Methord"."</b>"."</td>".
			"<td align='center'>"."<b>"."Bank Name"."</b>"."</td>".
			"<td align='center'>"."<b>"."Check Number"."</b>"."</td>".
			"<td align='center'>"."<b>"."Payment Status"."</b>"."</td>".
			"<td align='center'>"."<b>"."Frist Payment"."</b>"."</td>".
			"<td align='center'>"."<b>"."Frist Payment Date"."</b>"."</td>".
			"<td align='center'>"."<b>"."Due Payment"."</b>"."</td>".
			"<td align='center'>"."<b>"."Complete the Due Payment Before"."</b>"."</td>".
			"<td align='center'>"."<b>"."Project Name"."</b>"."</td>".
			"<td align='center'>"."<b>"."Project Start"."</b>"."</td>".
			"<td align='center'>"."<b>"."Project Status"."</b>"."</td>".
			"<td align='center'>"."<b>"."Astimate Delivary Date"."</b>"."</td>".
			"<td align='center'>"."<b>"."Project URL"."</b>"."</td>".
		"</tr>";
		while($row=mysqli_fetch_assoc($result)){
			$id=$row["ID"];
    echo "<tr>";
    echo "<td align='center'>".$row["ID"]."</td>";
		echo "<td align='center'>".$row["fristName"]."</td>";
		echo "<td align='center'>".$row["lastName"]."</td>";
		echo "<td align='center'>".$row["address"]."</td>";
		echo "<td align='center'>".$row["contatNo"]."</td>";
		echo "<td align='center'>".$row["email"]."</td>";
		echo "<td align='center'>".$row["password"]."</td>";
		echo "<td align='center'>".$row["busType"]."</td>";
		echo "<td align='center'>".$row["busName"]."</td>";
		echo "<td align='center'>".$row["busAddress"]."</td>";
		echo "<td align='center'>".$row["busEmail"]."</td>";
		echo "<td align='center'>".$row["busPhone"]."</td>";
		echo "<td align='center'>".$row["fullPayment"]."</td>";
		echo "<td align='center'>".$row["discount"]."</td>";
		echo "<td align='center'>".$row["paymnetMethord"]."</td>";
		echo "<td align='center'>".$row["bank"]."</td>";
		echo "<td align='center'>".$row["checkNumber"]."</td>";
		echo "<td align='center'>".$row["paymentStatus"]."</td>";
		echo "<td align='center'>".$row["fristPayment"]."</td>";
		echo "<td align='center'>".$row["fristPaymentDate"]."</td>";
		echo "<td align='center'>".$row["duePayment"]."</td>";
		echo "<td align='center'>".$row["duePaymentComplete"]."</td>";
		echo "<td align='center'>".$row["projectName"]."</td>";
		echo "<td align='center'>".$row["projectStarts"]."</td>";
		echo "<td align='center'>".$row["projectStatus"]."</td>";
		echo "<td align='center'>".$row["astimateDelivaryTime"]."</td>";
		echo "<td align='center'>".$row["URL"]."</td>";
		echo "</tr>";
	}
  echo "</tbody>";
echo "</table>";
?>

</div><br>
<div class="container">
  <div class="row">
	  <div class="col-xl-4"></div>
	  <div class="col-xl-4">
  	   <h6 class="text-center">Click here to Update the Clinet details<br><br>
				<a href = "updateClient.php"><button type="submit" class="btn btn-primary">Update Details</button></a><br><br>
				Please Make Suwer to log out to protect data 
			</h6>
	  </div>
	  <div class="col-xl-4"></div>
  </div>
</div>
<div class="container">
<hr>
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