<?php
 
  $id = $_POST['id'];
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


  $link = mysqli_connect("localhost","gixezcom_admin","0757003662","gixezcom_gixez"); // DB connection
  
  $sqlQuery = "UPDATE userlogin SET fristName='$Fname', lastName = '$Lname', address = '$Address', contatNo = '$ContactNum', email = '$Email', password = '$Password',
  busType = '$BusType', busName = '$BusName', busAddress ='$BusAddress', busEmail = '$BusEmail', busPhone = '$OfficePhone', fullPayment = '$FullPayment',
  discount = '$Discount', paymnetMethord = '$PaymentMehoord', bank = '$Bank', checkNumber = '$CheckNumber', paymentStatus = '$PaymentStaus', fristPayment = '$FristPay',
  fristPaymentDate = '$FristPayDate', duePayment = '$DuePay', duePaymentComplete = '$CompleteDue', projectName = '$ProjectName', projectStarts = '$ProStart', 
  projectStatus = '$ProStatus', astimateDelivaryTime = '$ProAsstimateTime', URL = '$Url' WHERE ID=$id";

$r = mysqli_query($link, $sqlQuery);
if($r){
	header('location: connection_pages/done.php');
}else{
	header('location: connection_pages/error.php');
}
 // var_dump($id,$BusAddress,$FristPay);
?>