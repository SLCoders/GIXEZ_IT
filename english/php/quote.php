<?php
$Company_Name = $_POST["companyname"];
$Business_Type = $_POST["businesstype"];
$Number_of_Pages = $_POST["pages"];
$user_account_facility = $_POST["youraccount"];
$refer_website = $_POST["refer"];
$Do_you_have_web_site = $_POST["website"];
$Contact_Name = $_POST["name"];
$Email_Address = $_POST["email"];
$Contact_No = $_POST["phone"];
$Message = $_POST["message"];

$conn = mysqli_connect("localhost","gixezcom_admin","0757003662","gixezcom_gixez");
$query = "INSERT INTO quote (Company_Name,Business_Type,Number_of_Pages,user_account_facility,refer_website,Do_you_have_web_site,Contact_Name,Email_Address,Contact_No,Message)
          VALUES('$Company_Name','$Business_Type','$Number_of_Pages','$user_account_facility','$refer_website','$Do_you_have_web_site','$Contact_Name','$Email_Address','$Contact_No','$Message')";
$run = mysqli_query($conn,$query);
if($run){
	header('location: connection_pages/done.html');
}else{
	header('location: connection_pages/error.html');
}
?>