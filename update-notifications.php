<?php
include('includes/config.php');

$SmsAlert=$_POST['smsupd'];
$Newsletr=$_POST['newsltrupd'];
$Invoice=$_POST['invoiceupd'];
$uid=$_SESSION['id'];

mysqli_query($con,"UPDATE notifications SET smsalert='".$SmsAlert."',newsletter='".$Newsletr."', einvoice='".$Invoice."' WHERE UserID='".$uid."'");

?>