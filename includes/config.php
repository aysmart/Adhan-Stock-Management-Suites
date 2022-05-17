<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
    error_reporting(0);
    }
    
define('DB_SERVER','127.0.0.1');
define('DB_USER','stockpower');
define('DB_PASS' ,'uQUqSJjmIIS8ou5M');
define('DB_NAME', 'stockpower');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

function getAddress() {
    $protocol = $_SERVER['HTTPS'] == 'on' ? 'https' : 'http';
    return $protocol.'://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
}

function getAddress1() {
    $protocol = $_SERVER['HTTPS'] == 'on' ? 'https' : 'http';
    return $protocol.'://'.$_SERVER['HTTP_HOST'];
}

function getUserIpAddr(){
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        //ip from share internet
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        //ip pass from proxy
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }else{
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

$UserIP= getUserIpAddr();

$queryLoc=@unserialize(file_get_contents('http://ip-api.com/php/'.$UserIP));

if($queryLoc && $queryLoc['status']=='success'){
$UserLoc.="CITY:".$queryLoc['city'];
$UserLoc.=", REGION".$queryLoc['regiom'];
$UserLoc.=", COUNTRY:".$queryLoc['country'];
}
else
$UserLoc="THIS IS LOCAL HOST";

$_SESSION['product_id']=1;
if(strlen($_SESSION['SID'])==0)
  { 
    $query=mysqli_query($con,"insert into sessiondetails(sessionStart, UserIP, UserLocation) values('1','$UserIP','$UserLoc')");
    $_SESSION['SID']= $last_id = mysqli_insert_id($con);
  }
else{
date_default_timezone_set('Asia/Kolkata');// change according timezone
$currentTime = date( 'd-m-Y h:i:s A', time () );
}
?>