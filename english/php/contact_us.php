<?php
$name = $_POST["name"];
$email = $_POST["email"] ;
$phone = $_POST["phone"];
$message = $_POST["message"] ;

$conn = mysqli_connect("localhost","root","","gixez");
$query = "INSERT INTO contact_us (Name,Email,Phone,Message) VALUES('$name','$email','$phone','$message')";
$run = mysqli_query($conn,$query);

if($run){
	header('location: connection_pages/done.html');
}else{
	header('location: connection_pages/error.html');
}
?>