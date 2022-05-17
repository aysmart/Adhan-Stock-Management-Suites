<?php
session_start();
error_reporting(0);
include('includes/config.php');
//include('includes/generateUniqueCodes.php');

if(isset($_POST['Register']))
{
  $email=$_POST['email'];
$ret=mysqli_query($con,"SELECT * FROM users WHERE UserEmail='".$email."'");
$num=mysqli_fetch_array($ret);
$uniqid= md5(time());

$confirma=mysqli_query($con,"UPDATE users SET UserVerificationCode='".$uniqid."' WHERE UserEmail='".$email."'");
if (mysqli_affected_rows($con) >0 )
{
$emailhtml='
<html> 
<body style="padding:0 !important; margin:0 !important; display:block !important; min-width:100% !important; width:100% !important; background:#333545; -webkit-text-size-adjust:none;">
	<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#333545">
		<tr>
			<td align="center" valign="top">
				<!-- Main -->
				<table width="100%" border="0" cellspacing="0" cellpadding="0">
					<tr>
						<td align="center" style="padding:0px 0px 20px 0px;">
							<table width="650" border="0" cellspacing="0" cellpadding="0" >
								<tr>
									<td  style="width:650px; min-width:650px; font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;">
									<!-- Header -->
										<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ffffff">
											<tr>
												<td style="padding: 30px 0px 30px 30px;">
													<table width="100%" border="0" cellspacing="0" cellpadding="0" dir="rtl" style="direction: rtl;">
														<tr>
															
															<th width="1" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;"></th>
															<th  dir="ltr" width="200" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; direction:ltr;">
																<table width="100%" border="0" cellspacing="0" cellpadding="0">
																	<tr>
																		<td  style="font-size:0pt; line-height:0pt; text-align:center;"><img src="http://floratruworthsltd.com/sociologo/FloraPolythene.png" width="240" height="70" border="0" alt="" /></td>
																	</tr>
																</table>
															</th>
														</tr>
													</table>
												</td>
											</tr>
										</table>
										<!-- END Header -->

										<!-- Intro -->
										<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#192958">
											<tr>
												<th  width="325" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;">
													<table width="100%" border="0" cellspacing="0" cellpadding="0">
														<tr>
															<td style="font-size:0pt; line-height:0pt; text-align:left;"><img src="https://wvyd0g.am.files.1drv.com/y4mVva3bxxBwmFzLCNrYIsYFvKBNDEz3uVX2ZC7qRA93byIQEtvNbHW8wpJK7VnLNORhMDShGy-REWKNiugeg_4AAvNGehjqmjlnpqFvbjcIHX33TJzIxWechEkjlE3lzVXaZemTtOyF8Yx1oQFirMKHGLpAmVBPMXn6nxVrbNhA5_R6wm5axWzJLegdpWL-TfYXj7u0lciVZ3torDPqeBERg?width=325&height=400&cropmode=none" width="325" height="400" border="0" alt="" /></td>
														</tr>
													</table>
												</th>
												<th width="325" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;">
													<table width="100%" border="0" cellspacing="0" cellpadding="0">
														<tr>
															<td  style="padding:30px 50px;">
																<table width="100%" border="0" cellspacing="0" cellpadding="0">
																	<tr>
																		<td  style="color:#ffffff; font-family:Arial, sans-serif; font-size:16px; line-height:20px; text-transform:uppercase; text-align:left; padding-bottom:15px;">Dear '.$num['UserFirstName'].',</td>
																	</tr>
																
																	<tr>
																		<td  style="color:#d2d4ff; font-family: Arial,sans-serif; font-size:14px; line-height:24px; text-align:left; padding-bottom:20px;">You can easily reset your account password with the recovery button below.</td>
																	</tr>
																	<!-- Button -->
																	<tr>
																		<td align="left">
																			<table width="140" border="0" cellspacing="0" cellpadding="0"> 
																				<tr>
																					<td  style="font-family: Arial,sans-serif; font-size:14px; line-height:18px; text-align:center; text-transform:uppercase; padding:10px; background:#ffffff; color:#f54084; font-weight:bold;"><a href="'.getAddress1().'/flora/users/password-recovery-change?pid='.$uniqid.'" target="_blank" style="color:#4e54cb; text-decoration:none;"><span style="color:#4e54cb; text-decoration:none;">Reset Your Password</span></a></td>
																				</tr>
																			</table>
																		</td>
																	</tr>
																	<!-- END Button -->
																</table>
															</td>
														</tr>
													</table>
												</th>
											</tr>
										</table>
										<!-- END Intro -->

										<!-- Three Products -->
										<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ffffff">
											<tr>
												<td  style="padding: 60px 30px;">
													<table width="100%" border="0" cellspacing="0" cellpadding="0">
														<tr>
															<td  style="color:#000000; font-family: Georgia, serif; font-size:14px; line-height:20px; text-align:center; padding-bottom:40px; text-transform:uppercase;">p o p u l a r &nbsp; P R O D U C T S</td>
														</tr>
														<tr>
															<td>
																<table width="100%" border="0" cellspacing="0" cellpadding="0">
																	<tr>
																		<th  width="190" bgcolor="#ffffff" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;">
																			<table width="100%" border="0" cellspacing="0" cellpadding="0">
																				<tr>
																					<td  style="font-size:0pt; line-height:0pt; text-align:center; padding-bottom:20px;"><img src="https://wvzhsq.am.files.1drv.com/y4mO4xvuhptTuUG9eDEllSjmKh91Vk6wuiBZukxtwzuA3CpFtyZTimJK7R3UCEixYka5HH4WUlBhc0wYmXPGjiVb7r-WCpfMk5meRwcajKPvXz77Ec8egR84SS0X8ApwQ1BFtJY4PikgvNn6IWyf3bF6eVGFOYRLmJEaj1R91nJtjrRkKt1WdQKc6ovCRR4OC8uXyyvB-7Gzz3JnDBgAV9aBw?width=444&height=486&cropmode=none" width="190" height="240" border="0" alt="" /></td>
																				</tr>
																				<tr>
																					<td style="color:#000000; font-family: Georgia, serif; font-size:20px; line-height:24px; text-align:left; padding-bottom:15px;">Clear Essence</td>
																				</tr>
																				<tr>
																					<td style="color:#585858; font-family: Arial,sans-serif; font-size:12px; line-height:20px; text-align:left; padding-bottom:20px;">Clear Essence is our no1 brand and we have products that suits you.</td>
																				</tr>
																				<tr>
																					<td style="color:#000000; font-family: Georgia, serif; font-size:14px; line-height:18px; text-align:left; padding-bottom:20px;">Price starts from ₦ 200.00 </td>
																				</tr>
																				<!-- Button -->
																				<tr>
																					<td align="left">
																						<table  width="140" border="0" cellspacing="0" cellpadding="0" style="text-align:center;">
																							<tr>
																								<td  style="font-family: Arial,sans-serif; font-size:14px; line-height:18px; text-align:center; text-transform:uppercase; padding:10px; background:transparent; border:1px solid #000000; color:#000000;"><a href="'.getAddress1().'/flora/shop?bname=Clear%20Essence" target="_blank"  style="color:#000001; text-decoration:none;"><span style="color:#000001; text-decoration:none;">view more</span></a></td>
																							</tr>
																						</table>
																					</td>
																				</tr>
																				<!-- END Button -->
																			</table>
																		</th>
																		<th width="10" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;"></th>
																		<th  width="190" bgcolor="#ffffff" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;">
																			<table width="100%" border="0" cellspacing="0" cellpadding="0">
																				<tr>
																					<td style="font-size:0pt; line-height:0pt; text-align:center; padding-bottom:20px;"><img src="https://wvwxmw.am.files.1drv.com/y4mNhPxyfe_63MnC75KYUZswXs6whWCTzk3cZaTkp56VkYkoASxMt7IoBoNSkwtgvwRPujyeTsqj4xWDZIKTJw4sikHmDSq05xYwkPQORJ0wfaYfdMwQ3sQkRjAyQyEpl0xw5c1ZyHlXOu_ZWfC518rto9oiEQUIaWl2WEAxSksp7RLM1amaQiPB16zg0Wl-YWyW7-PXyEIoAVg72dgTkWXqg?width=640&height=640&cropmode=none" width="190" height="240" border="0" alt="" /></td>
																				</tr>
																				<tr>
																					<td  style="color:#000000; font-family: Georgia, serif; font-size:20px; line-height:24px; text-align:left; padding-bottom:15px;">ORS Olive Oil</td>
																				</tr>
																				<tr>
																					<td  style="color:#585858; font-family: Arial,sans-serif; font-size:12px; line-height:20px; text-align:left; padding-bottom:20px;">We have a variety of ORS Olive Oil Products that will suit you well</td>
																				</tr>
																				<tr>
																					<td  style="color:#000000; font-family: Georgia, serif; font-size:14px; line-height:18px; text-align:left; padding-bottom:20px;">Price starts from ₦ 200.00   </td>
																				</tr>
																				<!-- Button -->
																				<tr>
																					<td align="left">
																						<table  width="140" border="0" cellspacing="0" cellpadding="0" style="text-align:center;">
																							<tr>
																								<td  style="font-family: Arial,sans-serif; font-size:14px; line-height:18px; text-align:center; text-transform:uppercase; padding:10px; background:transparent; border:1px solid #000000; color:#000000;"><a href="'.getAddress1().'/flora/shop?bname=ORS%20Olive%20Oil" target="_blank"  style="color:#000001; text-decoration:none;"><span style="color:#000001; text-decoration:none;">view more</span></a></td>
																							</tr>
																						</table>
																					</td>
																				</tr>
																				<!-- END Button -->
																			</table>
																		</th>
																		<th width="10" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;"></th>
																		<th width="190" bgcolor="#ffffff" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;">
																			<table width="100%" border="0" cellspacing="0" cellpadding="0">
																				<tr>
																					<td  style="font-size:0pt; line-height:0pt; text-align:center; padding-bottom:20px;"><img src="https://wvxg1q.am.files.1drv.com/y4m2qaLBTwrfO_mV5rxH-m7lx7UAP6RMa0qTIU6C9x7z5zEjuc0BubOZwzN1Wpe_6P4bdHhqX0KsphlBCltC-9OucDoPiCYb8n952tb63qPSS9k6fIF15EcLhHxMIII6__fvqty2cTKLpDspHFcZWWK5xDxLLXZx8NR4LH_TAzlfAM317Qv4ybcGtYLEdcmfz5qwvBhiVq5xdQOlCKggEtRmA?width=2700&height=2700&cropmode=none" width="190" height="240" border="0" alt="" /></td>
																				</tr>
																				<tr>
																					<td  style="color:#000000; font-family: Georgia, serif; font-size:20px; line-height:24px; text-align:left; padding-bottom:15px;">Dark & Lovely</td>
																				</tr>
																				<tr>
																					<td  style="color:#585858; font-family: Arial,sans-serif; font-size:12px; line-height:20px; text-align:left; padding-bottom:20px;">We have lots of products from Dark & Love and you should see them.</td>
																				</tr>
																				<tr>
																					<td  style="color:#000000; font-family: Georgia, serif; font-size:14px; line-height:18px; text-align:left; padding-bottom:20px;">Prices starts from ₦ 400.00  </td>
																				</tr>
																				<!-- Button -->
																				<tr>
																					<td align="left">
																						<table width="140" border="0" cellspacing="0" cellpadding="0"  style="text-align:center;"> 
																							<tr>
																								<td style="font-family: Arial,sans-serif; font-size:14px; line-height:18px; text-align:center; text-transform:uppercase; padding:10px; background:transparent; border:1px solid #000000; color:#000000;"><a href="'.getAddress1().'/flora/shop?bname=Dark%20&%20Lovely" target="_blank"  style="color:#000001; text-decoration:none;"><span  style="color:#000001; text-decoration:none;">view more</span></a></td>
																							</tr>
																						</table>
																					</td>
																				</tr>
																				<!-- END Button -->
																			</table>
																		</th>
																	</tr>
																</table>
															</td>
														</tr>
													</table>
												</td>
											</tr>
										</table>
										<!-- END Three Products -->

										<!-- Footer -->
										<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#192958">
											<tr>
												<td style="padding:60px 30px;">
													<table width="100%" border="0" cellspacing="0" cellpadding="0">
														<tr>
															<td  style="color:#ffffff; font-family: Arial, sans-serif; font-size:14px; line-height:22px; text-align:center; text-transform:uppercase; padding-bottom:30px;">f o l l o w &nbsp; u s</td>
														</tr>
														<tr>
															<td  align="center" style="padding-bottom:30px;">
																<table border="0" cellspacing="0" cellpadding="0">
																	<tr>
																		<td  width="50" style="font-size:0pt; line-height:0pt; text-align:left;"><a href="#" target="_blank"><img src="http://floratruworthsltd.com/sociologo/t_white_ico_facebook.png" width="40" height="40" border="0" alt="" /></a></td>
																		<td width="50" style="font-size:0pt; line-height:0pt; text-align:left;"><a href="#" target="_blank"><img src="http://floratruworthsltd.com/sociologo/t_white_ico_twitter.png" width="40" height="40" border="0" alt="" /></a></td>
																		<td width="50" style="font-size:0pt; line-height:0pt; text-align:left;"><a href="#" target="_blank"><img src="http://floratruworthsltd.com/sociologo/t_white_ico_gplus.png" width="40" height="40" border="0" alt="" /></a></td>
																		<td width="50" style="font-size:0pt; line-height:0pt; text-align:left;"><a href="#" target="_blank"><img src="http://floratruworthsltd.com/sociologo/t_white_ico_youtube.png" width="40" height="40" border="0" alt="" /></a></td>
																		<td  width="50" style="font-size:0pt; line-height:0pt; text-align:left;"><a href="#" target="_blank"><img src="http://floratruworthsltd.com/sociologo/t_white_ico_pinterest.png" width="40" height="40" border="0" alt="" /></a></td>
																		<td  width="40" style="font-size:0pt; line-height:0pt; text-align:left;"><a href="#" target="_blank"><img src="http://floratruworthsltd.com/sociologo/t_white_ico_linkedin.png" width="40" height="40" border="0" alt="" /></a></td>
																	</tr>
																</table>
															</td>
														</tr>
														<tr>
															<td  style="border-bottom:1px solid #5e63d3;"></td>
														</tr>
														<tr>
															<td  style="color:#a9ace3; font-family: Arial,sans-serif; font-size:12px; line-height:20px; text-align:center; padding-top:30px;">Copyright &copy; 2020 Flora Truworths Limited <br />Shop 5, Wilberforce house,180/182, Broad Street,Lagos (On Issa Williams street)<br> +2348081145350 - Broad Street, +2349035442580 - TradeFair</td>
														</tr>
													</table>
												</td>
											</tr>
										</table>
										<!-- END Footer -->
										
										<!-- Footer Bar -->
										<table width="100%" border="0" cellspacing="0" cellpadding="0">
											<tr>
												<td  style="padding:35px 15px;">
													<table width="100%" border="0" cellspacing="0" cellpadding="0">
														<tr>
															<td  style="color:#85868d; font-family: Arial,sans-serif; font-size:12px; line-height:20px; text-align:center;">You are receiving this email because you have subscribed to receive updates from us. <br />Should you wish to cancel your subscription, please <a href="#" target="_blank"  style="color:#c3c3c3; text-decoration:underline;"><span style="color:#c3c3c3; text-decoration:underline;">click here to unsubscribe</span></a>.</td>
														</tr>
													</table>
												</td>
											</tr>
										</table>
										<!-- END Footer Bar -->
									</td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
				<!-- END Main -->
			</td>
		</tr>
	</table>
</body>
</html>
';


$subject ="Email Confirmation - Flora Truworths Online Stores";

$headers = "From:From: noreply@floratruworths.com". "\r\n";
$headers .="CC: smartayorinde@gmail.com". "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

mail($email,$subject, $emailhtml, $headers);

header('location:password-recovery-confirm');
{

}
  
}


}




?>


<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Recover Password | Flora Truworths Ltd</title>
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
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="css/form/all-type-forms.css">
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
    <div class="color-line"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="back-link back-backend">
                    <a href="../login" style="background: #192958;" class="btn btn-primary">Back to Sign In</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
            <div class="col-md-4 col-md-4 col-sm-4 col-xs-12">
                <div class="text-center ps-recovered">
                    <h3>PASSWORD RECOVERY</h3>
                    <p>Please fill the form to recover your password</p>
                </div>
                <div class="hpanel">
                    <div class="panel-body poss-recover">
                        <p>
                            Enter your email address and a password reset link will be emailed to you.
                        </p>
                        <form action="#" id="loginForm" method="post">
                            <div class="form-group">
                                <label class="control-label" for="username">Email</label>
                                <input type="email" required placeholder="example@gmail.com" title="Please enter you email adress" required="" value="" name="email" id="username" class="form-control">
                                <span class="help-block small">Your registered email address</span>
                            </div>

                            <button name="Register" style="background: #192958;" class="btn btn-success loginbtn">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
        </div>
        <div class="row">
            <div class="col-md-12 col-md-12 col-sm-12 col-xs-12 text-center login-footer">
            <p>Copyright &copy; 2020 <a href="../index">Flora Truworth Limited</a> All rights reserved.</p>
            </div>
        </div>
    </div>
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
    <!-- tab JS
		============================================ -->
    <script src="js/tab.js"></script>
    <!-- icheck JS
		============================================ -->
    <script src="js/icheck/icheck.min.js"></script>
    <script src="js/icheck/icheck-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
</body>

</html>