<?php 
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])!="")
{ 
  $_SESSION['alogin']="";
  $_SESSION['uName']="";
  $_SESSION['errmsg']="";
  unset($_SESSION['SID']);
  session_destroy();
  header('index');
}

?>