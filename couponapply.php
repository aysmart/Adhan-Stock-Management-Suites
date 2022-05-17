<?php 
  include('includes/config.php');
  $CouponCode= $_POST["CouponCode"];
  $UserID=$_SESSION['id'];

  
$query2=mysqli_query($con, "SELECT * FROM couponsdetails WHERE CouponCode='".$CouponCode."' AND UserID='".$UserID."'");
$numrow=mysqli_num_rows($query2);
$query=mysqli_query($con, "SELECT * FROM couponinfos WHERE CouponCode='".$CouponCode."'");
$row=mysqli_fetch_array($query);


if($numrow>0)
{
    echo 'Coupon has been applied already by you before now. Kindly try another coupon code. Thanks!';
}
elseif(isset($row['ExpireyDate']) && $row['ExpireyDate']>date('Y-m-d h:i:s'))
{
    $CouponValue=$row['CouponAmount'];
    $CouponExpire=$row['ExpireyDate'];

  //  echo $CouponValue."  ".$CouponExpire."  ".$UserID."          ";
    mysqli_query($con,"INSERT INTO couponsdetails(UserID, CouponCode, CouponAmount, ExpireyDate, UsedCoupon) values('$UserID','$CouponCode','$CouponValue','$CouponExpire','Unused')");    
    $last_id = mysqli_insert_id($con);
    if($last_id>0)
    {
        echo 'Coupon was successfully Applied. Kindly refresh your page.';
    }
    else
    {
        echo 'Coupon was not successfully Applied. Kindly reach out to the administrator.';
    }
}
else
{
    echo 'The coupon you are applying is either expired or does not exist. Kindly try another coupon code. Thanks!';
}
  ?>
