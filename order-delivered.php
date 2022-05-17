<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])=="")
  { 
header('location:../login');
}
else{
date_default_timezone_set('WAT');// change according timezone
$currentTime = date( 'd-m-Y h:i:s A', time () );



}

?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>To Be Shipped Orders | Flora Truworths Online Stores</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  

    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <?php include('includes/sidebar.php'); ?>
    <!-- Start Welcome area -->
    <?php include('includes/header.php'); ?>
            <!-- Mobile Menu start -->
            <?php include('includes/mobilemenu.php'); ?>
            <!-- Mobile Menu End -->

            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcome-heading">
                                            <form role="search" class="">
                                                <input type="text" placeholder="Search..." class="form-control">
                                                <a href=""><i class="fa fa-search"></i></a>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Unpaid Orders</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Static Table Start -->
        <div class="static-table-area mg-t-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col"> <!--    -->
                        <div class="sparkline8-list">
                            <div class="sparkline8-hd">
                                <div class="main-sparkline8-hd">
                                    <h1>Delivered Orders Information</h1>
                                </div>
                            </div>
<?php
$query=mysqli_query($con,"select * from orders WHERE OrderUserID='".$_SESSION['id']."' AND OrderStatus='Delivered'");
if ($query){
while($row=mysqli_fetch_array($query))
{
?>
                        <h5> Status:<span style="color:Green;">&nbsp;Delivered</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                            <br><span>Tracking No: <?php echo htmlentities($row['OrderTrackingNumber']) ?></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <br><span>Order Amount: ₦ <?php echo htmlentities(number_format($row['OrderAmount'])).".00" ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                            <br><span>Shipping Cost: ₦ <?php echo htmlentities(number_format($row['OrderShipping'])).".00" ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                            <br><span>Date Of Order: <?php echo htmlentities($row['OrderDate']) ?></h5>

                            <div class="sparkline8-graph">
                                <div class="static-table-list">
                                    <table class="table">
                                        <thead>
                                            <th>#</th>
                                                <th>Product ID</th>
                                                <th>Product Name</th>
                                                <th>Product Price</th>
                                                <th>Product Qty</th>
                                                <th>Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody id="unpaid-table">
<?php
$query2=mysqli_query($con,"select * from orderdetails WHERE DetailOrderID='".$row['OrderID']."'");
$numCount=1;   
while($row2=mysqli_fetch_array($query2))
{
?>

                                              <tr>
                                                <td><?php echo htmlentities($numCount) ?></td>
                                                <td><?php echo htmlentities($row2['DetailProductID']) ?></td>
                                                <td><?php echo htmlentities($row2['DetailName']) ?></td>
                                                <td><?php echo htmlentities(number_format($row2['DetailPrice'])).".00" ?></td>
                                                <td><?php echo htmlentities($row2['DetailQuantity']) ?></td>
                                                <td><?php echo htmlentities(number_format($row2['DetailPrice']*$row2['DetailQuantity'])).".00" ?></td>
                                              </tr>


<?php } ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <h4>Shipping Information</h4>
                            <h5> <?php echo htmlentities($row['OrderShipName']) ?></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                            <br><span><?php echo htmlentities($row['OrderShipAddress']) ?></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php if($row['OrderShipAddress2']!="" ){ echo '<br>'; echo htmlentities($row['OrderShipAddress2']);}?>
                            <br><span><?php echo htmlentities($row['OrderCity'].",  ".$row['OrderState']) ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                            <br><span><?php echo htmlentities($row['OrderZip'].",  ".$row['OrderCountry']) ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                            <br><span><?php echo htmlentities($row['OrderPhone']) ?></h5>

<?php }}

if ($numCount<1)
{
  echo '<br><br><div style="text-align:center;"> No Information Found! </div>';
}
?>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Static Table End -->

           <?php include('includes/footer.php'); ?>
           <?php include('includes/productmodal.php'); ?>
    </div>

<!--    
<script>  
//for cart preview
//for cart preview
$(document).ready(function(){  
   var UserID = '//php echo $_SESSION['id'];?>';
   $.ajax({  
        url:"upload-unpaid-table.php",  
        method:"post",
        data:{UserID:UserID},
        success:function(data){  
             $('#unpaid-table').html(data);  
        }  
});  
});  


$(document).ready(function(){  

$("div").on("click", ".static-table-list .del-Item", function(){
  var cartid = $(this).attr("cartID");  
  var userid = $(this).attr("userID");  
     //alert(session_id +"   "+ product_id);
     $.ajax({  
          url:"delete-from-unpaid.php",  
          method:"post",  
          data:{cartid:cartid, userid:userid},  
          success:function(data){  
            var UserID = 'php //echo $_SESSION['id'];?>';
            $.ajax({  
        url:"upload-unpaid-table.php",  
        method:"post",
        data:{UserID:UserID},
        success:function(data){  
             $('#unpaid-table').html(data);  
        }  
    }); 
               $('#product_details').html(data);  
               $('#product_modal').modal("show");  
          }  
     });  

});  


});  
//end of delete

</script> -->
    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="js/metisMenu/metisMenu.min.js"></script>
    <script src="js/metisMenu/metisMenu-active.js"></script>
    <!-- peity JS
		============================================ -->
    <script src="js/peity/jquery.peity.min.js"></script>
    <script src="js/peity/peity-active.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/sparkline-active.js"></script>
    <!-- tab JS
		============================================ -->
    <script src="js/tab.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
</body>

</html>