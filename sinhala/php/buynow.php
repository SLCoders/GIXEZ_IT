<?php 

$name = $_POST["name"];
$email = $_POST["email"] ;
$phone = $_POST["phone"];
$package = $_POST["packages"];
$message = $_POST["message"] ;

$conn = mysqli_connect("localhost","gixezcom_admin","0757003662","gixezcom_gixez");
$query = "INSERT INTO buynow (Name,Email,Phone,Package,Message) VALUES('$name','$email','$phone','$package','$message')";
$run = mysqli_query($conn,$query);

if($run){
	header('location: connection_pages/done.html');
}else{
	header('location: connection_pages/error.html');
}
?>