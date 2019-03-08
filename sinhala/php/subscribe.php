<?php 
$subemail = $_POST["email"];

$conn = mysqli_connect("localhost","root","","gixez");
$query = "INSERT INTO subscribe (subemail) VALUES('$subemail')";
$run = mysqli_query($conn,$query);
if($run){
	header('location: subscribe_pages/done.html');
}else{
	header('location: subscribe_pages/error.html');
}

?>