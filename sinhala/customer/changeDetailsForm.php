<?php 
//var_dump($_POST);
    $id = $_POST['ID'];
    $fname = $_POST['fristName'];
    $lname = $_POST['lastName'];
    $address = $_POST['address'];
    $ContactNumber = $_POST['contactNumber'];
    $email = $_POST['email'];
    $NewPassword =$_POST['password'];
    $link = mysqli_connect('localhost','root','','gixez');
    $sqlQuery = "UPDATE userlogin SET fristName='$fname', lastName = '$lname', address = '$address', contatNo = '$ContactNumber', email = '$email', password = '$NewPassword' WHERE ID=$id";
    $r = mysqli_query($link, $sqlQuery);
if($r){
	header('location: connection_pages/done.php');
}else{
	header('location: connection_pages/error.php');
}
?>