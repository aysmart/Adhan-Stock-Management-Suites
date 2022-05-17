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
    <title>Coupon Account | Flora Truworths Online Stores</title>
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
    <link rel="stylesheet" href="css/modals.css">
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
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
                                            <li><span class="bread-blod">Coupon Account</span>
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
      
        <div class="login-form-area adminpro-pd mg-tb-15">
            <div class="container-fluid">
              
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div id="ChangeInformation" class="modal modal-adminpro-general default-popup-PrimaryModal fade" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-close-area modal-close-df">
                                        <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                    </div>
                                    <div class="modal-body quick-mark" id="InfoFill" >
                                        
                                    </div>
                                    <div class="modal-footer">
                                        <a data-dismiss="modal" href="#">Cancel</a>
                                        <a href="#" class="update-infomation" prod-id="<?php echo $row['ProductID']; ?>">Update</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="Del-Information" class="modal modal-adminpro-general default-popup-PrimaryModal fade" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-close-area modal-close-df">
                                        <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                    </div>
                                    <div class="modal-body quick-mark" id="InfoFill" >
                                    <h2>Delete Product!</h2>
                                    <p>Are you sure you want to delete this </p>
                                    <input type="text" id="del-id" hidden>
                                    </div>
                                    <div class="modal-footer">
                                        <a data-dismiss="modal" href="#">No Don't</a>
                                        <a href="#" id="del-infomation">Yes Please</a>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div id="InformationproModalalert" class="modal modal-adminpro-general fullwidth-popup-InformationproModal fade" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-close-area modal-close-df">
                                        <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                    </div>
                                    <div class="modal-body">
                                        <span class="adminpro-icon adminpro-informatio modal-check-pro information-icon-pro"> </span>
                                        <h2>Information!</h2>
                                        <div id="update-info">
                                        
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <a data-dismiss="modal" href="#">Cancel</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div id="AddNewInformation" class="modal modal-adminpro-general Customwidth-popup-WarningModal fade" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-close-area modal-close-df">
                                        <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                    </div>
                                    <div class="modal-body">
                                        <span class="adminpro-icon adminpro-warning-danger modal-check-pro information-icon-pro"></span>
                                        <h2>Add New Product Information!</h2>
                                        <div class="form-group-inner">
                                          <div class="row">
                                            
                                            <div class="col-xs-12">
                                            <label>Product SKU</label>
                                              <input type="text" id="CouponCode" style="text-align:center;" required placeholder="Product SKU"  class="form-control" /><br>
                                             </div>
                                             <div class="modal-footer col-xs-12">
                                        <a data-dismiss="modal" href="#">Cancel</a>
                                        <a id="add-prod-infomation" class="apply-coupon" href="#">Process</a>

                                      </div>
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
                                    <h1>Your Coupons</h1>
                                    <div class="add-product">
                                      <button href="#" id="AddNew" style="float:right;" data-toggle="modal" data-target="#AddNewInformation">Apply Coupon Code</button>
                                    </div>
                                </div>
                            </div>
                            <div class="sparkline8-graph">
                                <div class="static-table-list">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Coupon ID</th>
                                                <th>Coupon Amount</th>
                                                <th>Coupon Code</th>
                                                <th>ExperingDate</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody id="unpaid-table">

                                        <?php 
$query=mysqli_query($con,"select * from couponsdetails WHERE UserID='".$_SESSION['id']."' ORDER BY ExpireyDate DESC");
$numCount=1;   
while($row=mysqli_fetch_array($query))
{
?>
                                            <tr>
                                                <td><?php echo htmlentities($numCount) ?></td>
                                                <td><?php echo htmlentities($row['CouponID']) ?></td>
                                                <td><?php echo htmlentities(number_format($row['CouponAmount'])) ?></td>
                                                <td><?php echo htmlentities($row['CouponCode']) ?></td>
                                                <td><?php echo htmlentities($row['ExpireyDate']) ?></td>
                                                <td>
                                                  <?php 
                                                  if ($row['UsedCoupon']=='Used'){
                                                    echo '<span style="color:blue;">Used</span>';
                                                  }
                                                  elseif($row['ExpireyDate']<date('Y-m-d h:i:s'))
                                                  {
                                                    echo '<span style="color:red;">Expired</span>';
                                                    
                                                  }
                                                  else
                                                  {
                                                    echo '<span style="color:green;">Active</span>';
                                                  }?></td>
                                            </tr>
<?php $numCount+=1;} 

if ($numCount<1)
{
  echo '<br><br><div style="text-align:center;"> No Information Found! </div>';
}
?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Static Table End -->

           <?php include('includes/footer.php'); ?>
           <?php include('includes/productmodal.php'); ?>
    </div>


    <script>
       //To Add New Product Information
 $(document).ready(function(){  
  $('.apply-coupon').click(function(){  
    
    var CouponCode = document.getElementById("CouponCode").value;
           $.ajax({  
                url:"couponapply.php",  
                method:"post", 
                data:{CouponCode:CouponCode},  
                success:function(data){  
                     $('#update-info').html(data);  
                     $('#AddNewInformation').modal("hide");  
                     $('#InformationproModalalert').modal("show");  
                  //   location.reload();
                }  
           });  
      });  
 });  

    </script>
 
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