<?php
    session_start();
    $email = $_POST['email'];
    $password = $_POST['password'];

    $link = mysqli_connect('localhost','root','','gixez');
	$q = "SELECT adminEmail,adminPassword FROM admin WHERE adminEmail = '$email' AND adminPassword = '$password' ";
	$run = mysqli_query($link,$q);
	
	if($row=mysqli_fetch_assoc($run)){
		$_SESSION["currentUserDetails"] = array(
			"email"=> $row["adminEmail"],
			"password"=> $row["adminPassword"],
		);
		header("location: dash.php");
	}else{
		header("location: connection_pages/errorlogin.php");
	}



    //var_dump($uname,$password);
?>