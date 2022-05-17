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
    <title>Notification Settings || Flora Truworths Online Stores</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
     <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="css/form/all-type-forms.css">
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
                                            <li><span class="bread-blod">Notification Settings</span>
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
<br>
          <div class="login-form-area adminpro-pd mg-tb-15">
            <div class="container-fluid">
                <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="tab-content-details shadow-reset">
                          <h4>Notification Settings</h4>
                          <br>	<br>	
                          <?php $query6=mysqli_query($con,"SELECT * FROM notifications WHERE UserID='".$_SESSION['id']."'"); 
        $row6=mysqli_fetch_array($query6);
        ?>

        <?php if($row6['smsalert']==1) {?>
                          <input id="sms" type="checkbox" checked value=""> <i></i> SMS Alerts &nbsp;&nbsp;&nbsp;&nbsp;
        <?php } else {?>  
          <input id="sms" type="checkbox" value=""> <i></i> SMS Alerts &nbsp;&nbsp;&nbsp;&nbsp;
          <?php } ?> 
          <?php if($row6['newsletter']==1) {?>
                          <input id="newsltr" checked type="checkbox" value=""> <i></i> Newsletters &nbsp;&nbsp;&nbsp;&nbsp;
          <?php } else {?>   
            <input id="newsltr" type="checkbox" value=""> <i></i> Newsletters &nbsp;&nbsp;&nbsp;&nbsp;
            <?php } ?> 
            <?php if($row6['einvoice']==1) {?>
                          <input id="invoice" checked type="checkbox" value=""> <i></i> E-Invoice &nbsp;&nbsp;&nbsp;&nbsp;
            <?php } else {?> 
              <input id="invoice" type="checkbox" value=""> <i></i> E-Invoice &nbsp;&nbsp;&nbsp;&nbsp;
              <?php } ?> 
                          <br>	<br>	<br>	
                          
                          

                                                       
                                                                    
    <div class="modal-area-button">
    <a id="update-notify" class="Warning Warning-color" style="background: #192958;" href="#">Update Settings</a>
        </div>         
  </div>
        </div>
        </div>
          </div>

          <div id="ChangeInformation" class="modal modal-adminpro-general Customwidth-popup-WarningModal fade" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-close-area modal-close-df">
                                        <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                    </div>
                                    <div class="modal-body">
                                        <span class="adminpro-icon adminpro-warning-danger modal-check-pro information-icon-pro"></span>
                                        <h2>Change Billing Information!</h2>
                                        <div class="form-group-inner">
                                          <div class="row">
                                            
                                              <label>Address</label> <br>
                                            
                                            <div class="col-xs-12">
                                              <input type="text" id="billingAddress" required placeholder="Street address"  class="form-control" /><br>
                                              <input type="text" id="billingAddress2" required placeholder="Apartment, suite, unit etc. (optional)" class="form-control" />
                                          </div>

                                          
                                        </div>
                                      <div>
                                          <label >State</label>
                                        
                                        <select id="StateSel" class="form-control custom-select-value" required name="sStates">
                                        <option class="StateOpt" value="State">Select State</option>                                                    <?php
$query2=mysqli_query($con,"SELECT * from states ORDER BY State ASC");     
while($row2=mysqli_fetch_array($query2))
{
                                                    ?>
                                                        <option class="StateOpt" value="<?php echo htmlentities($row2['State']); ?>"><?php echo htmlentities($row2['State']); ?></option>
<?php } ?>
															            			</select>
                                             </div>
                                             <div>
                                          <label >Local Government Area</label>
                                        
                                        <select id="lgaSel" class="form-control custom-select-value" required name="LocalG">
					          													
															            			</select>
                                             </div>

                                    <div class="modal-footer">
                                        <a data-dismiss="modal" href="#">Cancel</a>
                                        <a id="process-change" class="process-change" href="#">Process</a>

                                      </div>
                                </div>
                            </div>
                        </div>


        </div>
        </div>
      
        <?php include('includes/footer.php'); ?>

    </div>

    <script>
 $(document).ready(function(){  
      $('#update-notify').click(function(){  
        var smscheck = document.getElementById("sms");     
            var newsltrcheck= document.getElementById("newsltr");     
            var invoicecheck = document.getElementById("invoice");  

            if(smscheck.checked)
            {
              smsupd = 1;
            }
            else
            {
              smsupd = 0;
            }

            if(newsltrcheck.checked)
            {
              newsltrupd = 1;
            }
            else
            {
              newsltrupd = 0;
            }
            if(invoicecheck.checked)
            {
              invoiceupd = 1;
            }
            else
            {
              invoiceupd = 0;
            }

               // alert(smsupd+"    "+newsltrupd+"    "+invoiceupd);
                  // return false;
        $.ajax({  
                url:"update-notifications.php",  
                method:"post",
                data:{smsupd:smsupd, newsltrupd:newsltrupd, invoiceupd:invoiceupd},
                success:function(data){  
                  window.location.href = "";
                }  
           });
      
      
      });

 });


//Populate the Local Government SelectBox


var select = document.querySelector('#StateSel');

select.addEventListener('change',function(){
    var opt = select.options[select.selectedIndex];
        var optVal=opt.value;
       //alert(optVal);
  
        $.ajax({  
                url:"../lgaSel.php",  
                method:"post",
                data:{optVal:optVal},
                success:function(data){  
                     $('#lgaSel').html(data);  
                }  
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
    <!-- morrisjs JS
		============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/jquery.charts-sparkline.js"></script>
    <!-- calendar JS
		============================================ -->
    <script src="js/calendar/moment.min.js"></script>
    <script src="js/calendar/fullcalendar.min.js"></script>
    <script src="js/calendar/fullcalendar-active.js"></script>
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