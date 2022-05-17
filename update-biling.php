<?php
include('includes/config.php');

$BillingAddy=$_POST['baddress'];
$BillingAddy2=$_POST['baddress2'];
$BillingCity=$_POST['bcity'];
$BillingState=$_POST['bstate'];
$uid=$_SESSION['id'];

mysqli_query($con,"UPDATE users SET UserAddress='".$BillingAddy."', UserAddress2='".$BillingAddy2."', UserCity='".$BillingCity."', UserState='".$BillingState."', UserCountry='Nigeria' WHERE UserID='".$uid."'");

?>