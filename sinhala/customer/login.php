<?php
    session_start();
    $email = $_POST['email'];
    $password = $_POST['password'];

    $link = mysqli_connect('localhost','root','','gixez');
	$q = "SELECT email,password FROM userlogin WHERE email = '$email' AND password = '$password' ";
	$run = mysqli_query($link,$q);
	
	if($row=mysqli_fetch_assoc($run)){
		$_SESSION["currentUserDetails"] = array(
			"email"=> $row["email"],
			"password"=> $row["password"],
		);
		header("location: dash.php");
	}else{
		header("location: connection_pages/errorlogin.php");
	}



    //var_dump($uname,$password);
?>