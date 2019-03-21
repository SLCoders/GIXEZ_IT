<?php 

	session_start();
	if(!isset($_SESSION["currentUserDetails"])){
		header("location:index.html");
	}
	
	$log= $_SESSION['currentUserDetails']["email"];
	$link = mysqli_connect("localhost","gixezcom_admin","0757003662","gixezcom_gixez");
	$q = "SELECT*FROM userlogin WHERE email = '$log'";
	$run = mysqli_query($link,$q);
	$row=mysqli_fetch_assoc($run);
	//var_dump($row);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="images/icon.png" type="image/x-icon">
<title>Update Form</title>
<link href ="css/bootstrap-4.0.0.css" rel="stylesheet" type="text/css">
<style>
#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: #191970;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 100px;
}

#myBtn:hover {
  background-color: #555;
}
</style>
</head>

<body style="padding-top: 70px">
<script language="JavaScript">
             
                window.onload = function() {
                  document.addEventListener("contextmenu", function(e){
                    e.preventDefault();
                  }, false);
                  document.addEventListener("keydown", function(e) {
                  //document.onkeydown = function(e) {
                    // "I" key
                    if (e.ctrlKey && e.shiftKey && e.keyCode == 73) {
                      disabledEvent(e);
                    }
                    // "J" key
                    if (e.ctrlKey && e.shiftKey && e.keyCode == 74) {
                      disabledEvent(e);
                    }
                    // "S" key + macOS
                    if (e.keyCode == 83 && (navigator.platform.match("Mac") ? e.metaKey : e.ctrlKey)) {
                      disabledEvent(e);
                    }
                    // "U" key
                    if (e.ctrlKey && e.keyCode == 85) {
                      disabledEvent(e);
                    }
                    // "F12" key
                    if (event.keyCode == 123) {
                      disabledEvent(e);
                    }
                  }, false);
                  function disabledEvent(e){
                    if (e.stopPropagation){
                      e.stopPropagation();
                    } else if (window.event){
                      window.event.cancelBubble = true;
                    }
                    e.preventDefault();
                    return false;
                  }
                };
              </script>
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light" style="background: linear-gradient(to bottom, #4169E1, MidnightBlue)"> <a class="navbar-brand" href="http://www.gixez.com/" style="color: aliceblue">GIXEZ IT</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation" style="background:aliceblue"> <span class="navbar-toggler-icon"></span> </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent1">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active"> <a class="nav-link" href="dash.php" style="color: aliceblue">Dashboard <span class="sr-only">(current)</span></a> </li>
      <li class="nav-item"> <a class="nav-link" href="changeDetails.php" style="color: aliceblue">Update Details</a> </li>
			<li class="nav-item"> <a class="nav-link" href="http://www.gixez.com/english/contact_us.html" style="color: aliceblue">Contact Us</a> </li>
	  	<li class="nav-item"> <a class="nav-link" href="logout.php" style="color: aliceblue">Log Out</a> </li>
      <!--<li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Dropdown </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown1"> <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a> </div>
      </li>
      <li class="nav-item"> <a class="nav-link disabled" href="#">Disabled</a> </li>-->
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
	<h1 class="text-center">Customer Dashboard</h1>
	  <hr>
</div>
<div class="container">
		<h5>Update Your Personal Details</h5><br>
  <form action="changeDetailsForm.php" method="post">
	 
	    <input type="text" class="form-control" id="exampleInputEmail1" name="ID" value="<?php echo($row['ID'])?>" readonly hidden="">
	 
	  <div class="form-group">
	    <label for="exampleInputEmail1">Frist Name</label>
	    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Your Frist Name" required name="fristName" value="<?php echo($row['fristName'])?>">
	  </div>
    <div class="form-group">
	    <label for="exampleInputEmail1">Last Name</label>
	    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Your Last Name" required name="lastName" value="<?php echo($row['lastName'])?>">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputEmail1">Address</label>
	    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Your Address" required name="address" value="<?php echo($row['address'])?>">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputEmail1">Contact Number</label>
	    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Eg - +9412312312" required name="contactNumber" value="<?php echo($row['contatNo'])?>">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputEmail1">Email</label>
	    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Eg - abc@example.com" required name="email" value="<?php echo($row['email'])?>">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">New Password</label>
	    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Your New Password" required name="password" minlength="8">
    </div>
	<h6 class="text-center">Click here to Update the Personal Details<br><br>
	<button type="submit" class="btn btn-primary">Update Details</button></h6>
  </form>

  <hr>
</div>


<div class = "container">
	<h6 class = "text-center">Please Make Sure to Log Out to Protect Your Data</h6>
</div>
<footer>
<div class="container-fluid" style="background: #2E2E2E; padding-bottom: 3px ;padding-top: 3px;">
	<h6 style="color: aliceblue;text-align: center; padding-top: 5px;">GIXEZ IT Customer  Dashboard 2019 <sup>©</sup></h6>
	</div>
</footer>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap-4.0.0.js"></script>
<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("myBtn").style.display = "block";
  } else {
    document.getElementById("myBtn").style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
</body>
</html>