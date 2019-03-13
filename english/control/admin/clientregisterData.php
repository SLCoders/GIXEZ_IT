<?php

  $Fname = $_POST['fristName'];
  $Lname = $_POST['lastname'];
  $Address = $_POST['Adress'];
  $ContactNum = $_POST['contactNo'];
  $Email = $_POST['email'];
  $Password = $_POST['password'];
  $BusType = $_POST['bustype'];
  $BusName = $_POST['busname'];
  $BusAddress = $_POST['busaddress'];
  $BusEmail = $_POST['busemail'];
  $OfficePhone = $_POST['officePhone'];
  $FullPayment = $_POST['fullPayment'];
  $Discount = $_POST['discount'];
  $PaymentMehoord = $_POST['paymentMethord'];
  $CheckNumber = $_POST['checkNumber'];
  $Bank = $_POST['bank'];
  $PaymentStaus = $_POST['paymentStaus'];
  $FristPay = $_POST['fristPayment'];
  $FristPayDate = $_POST['fristPayDate'];
  $DuePay = $_POST['duePay'];
  $CompleteDue = $_POST['completDueDate'];
  $ProjectName = $_POST['projectName'];
  $ProStart = $_POST['proStart'];
  $ProStatus = $_POST['proStaus'];
  $ProAsstimateTime = $_POST['proAsstimateTime'];
  $Url = $_POST['url'];

  $link = mysqli_connect('localhost','root','','gixez'); // DB connection

  $sqlQuery = "INSERT INTO `userlogin` (`ID`, `fristName`, `lastName`, `address`, `contatNo`, `email`, `password`, `busType`, `busName`, `busAddress`, `busEmail`, 
  `busPhone`, `fullPayment`, `discount`, `paymnetMethord`, `bank`, `checkNumber`, `paymentStatus`, `fristPayment`, `fristPaymentDate`, `duePayment`, `duePaymentComplete`, 
  `projectName`, `projectStarts`, `projectStatus`, `astimateDelivaryTime`, `URL`) 
  VALUES (NULL, '$Fname', '$Lname', '$Address', '$ContactNum', '$Email', '$Password', '$BusType', '$BusName', '$BusAddress', '$BusEmail', '$OfficePhone', '$FullPayment', 
  '$Discount', '$PaymentMehoord', '$Bank', '$CheckNumber', '$PaymentStaus', '$FristPay', '$FristPayDate', '$DuePay', '$CompleteDue', '$ProjectName', '$ProStart', '$ProStatus',
    '$ProAsstimateTime', '$Url')";

$r = mysqli_query($link, $sqlQuery);
if($r){
	header('location: connection_pages/done.php');
}else{
	header('location: connection_pages/error.php');
}
?>