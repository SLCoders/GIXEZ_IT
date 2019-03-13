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
<meta http-equiv="refresh" content="30">
<link rel="shortcut icon" href="images/icon.png" type="image/x-icon">
<title>Quote Table</title>
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
<div class="container-fluid"><br>
	<p class="text-center">
	<img src="images/logo.png" class="img-fluid" alt="Placeholder image" style="width: 200px"> 
	</p>
	<h1 class="text-center">Admin Dashboard</h1>
	  <hr>
</div>
	<div class="container-fluid">
  <h5 class="text-center"><strong>All Client's Quote Table</strong></h5>
	<br>
	<?php
		$conn = mysqli_connect("localhost","root","","gixez");
		$q = "SELECT * FROM quote";
		$result = mysqli_query($conn,$q);
 echo "<table width='1150' border='1' class= 'table-responsive table-hover table-sm'>";
  echo "<tbody>";
   echo "<tr class='table-primary'>".
      "<td align='center'>"."<b>"."Company Name"."</b>"."</td>".
      "<td align='center'>"."<b>"."Business Type"."</b>"."</td>".
      "<td align='center'>"."<b>"."Number Of Pages"."</b>"."</td>".
      "<td align='center'>"."<b>"."User Account Facility"."</b>"."</td>".
      "<td align='center'>"."<b>"."Refer Website"."</b>"."</td>".
      "<td align='center'>"."<b>"."Do You Have Website"."</b>"."</td>".
      "<td align='center'>"."<b>"."Contact Name"."</b>"."</td>".
			"<td align='center'>"."<b>"."Email Address"."</b>"."</td>".
			"<td align='center'>"."<b>"."Contact Number"."</b>"."</td>".
			"<td align='center'>"."<b>"."Message"."</b>"."</td>".
		"</tr>";
		while($row=mysqli_fetch_assoc($result)){
			$id=$row["Company_Name"];
    echo "<tr>";
    
		echo "<td align='center'>".$row["Company_Name"]."</td>";
		echo "<td align='center'>".$row["Business_Type"]."</td>";
		echo "<td align='center'>".$row["Number_of_Pages"]."</td>";
		echo "<td align='center'>".$row["user_account_facility"]."</td>";
		echo "<td align='center'>".$row["refer_website"]."</td>";
		echo "<td align='center'>".$row["Do_you_have_web_site"]."</td>";
		echo "<td align='center'>".$row["Contact_Name"]."</td>";
		echo "<td align='center'>".$row["Email_Address"]."</td>";
		echo "<td align='center'>".$row["Contact_No"]."</td>";
		echo "<td align='center'>".$row["Message"]."</td>";
		echo "</tr>";
	}
  echo "</tbody>";
echo "</table>";
?>

</div><br>
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