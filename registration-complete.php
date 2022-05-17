<?php
session_start();
error_reporting(0);
include('includes/config.php');
//include('includes/generateUniqueCodes.php');

if(isset($_POST['ResendMail']))
{
  $email=$_GET['email'];

//and UserPassword='".md5($_POST['pass'])."'
$ret=mysqli_query($con,"SELECT * FROM users WHERE UserEmail='".$email."'");
$row=mysqli_fetch_array($ret);

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
																		<td  style="font-size:0pt; line-height:0pt; text-align:center;"><img src="https://florastores.com/sociologo/FloraPolythene.png" width="240" height="70" border="0" alt="" /></td>
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
															<td style="font-size:0pt; line-height:0pt; text-align:left;"><img src="http://wvyd0g.am.files.1drv.com/y4mVva3bxxBwmFzLCNrYIsYFvKBNDEz3uVX2ZC7qRA93byIQEtvNbHW8wpJK7VnLNORhMDShGy-REWKNiugeg_4AAvNGehjqmjlnpqFvbjcIHX33TJzIxWechEkjlE3lzVXaZemTtOyF8Yx1oQFirMKHGLpAmVBPMXn6nxVrbNhA5_R6wm5axWzJLegdpWL-TfYXj7u0lciVZ3torDPqeBERg?width=325&height=400&cropmode=none" width="325" height="400" border="0" alt="" /></td>
														</tr>
													</table>
												</th>
												<th width="325" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;">
													<table width="100%" border="0" cellspacing="0" cellpadding="0">
														<tr>
															<td  style="padding:30px 50px;">
																<table width="100%" border="0" cellspacing="0" cellpadding="0">
																	<tr>
																		<td  style="color:#ffffff; font-family:Arial, sans-serif; font-size:16px; line-height:20px; text-transform:uppercase; text-align:left; padding-bottom:15px;">Dear '.$row['UserFirstName'].',</td>
																	</tr>
																
																	<tr>
																		<td  style="color:#d2d4ff; font-family: Arial,sans-serif; font-size:14px; line-height:24px; text-align:left; padding-bottom:20px;">Welcome to our online store. We are very glad to have you as part of our custormers. Our wide range of products and dicounted prices are our best offers.</td>
																	</tr>
																	<!-- Button -->
																	<tr>
																		<td align="left">
																			<table width="140" border="0" cellspacing="0" cellpadding="0"> 
																				<tr>
																					<td  style="font-family: Arial,sans-serif; font-size:14px; line-height:18px; text-align:center; text-transform:uppercase; padding:10px; background:#ffffff; color:#f54084; font-weight:bold;"><a href="'.getAddress1().'/users/confirmemail?ecid='.$row['UserVerificationCode'].'" target="_blank" style="color:#4e54cb; text-decoration:none;"><span style="color:#4e54cb; text-decoration:none;">Confirm Email</span></a></td>
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
																					<td  style="font-size:0pt; line-height:0pt; text-align:center; padding-bottom:20px;"><img src="http://wvzhsq.am.files.1drv.com/y4mO4xvuhptTuUG9eDEllSjmKh91Vk6wuiBZukxtwzuA3CpFtyZTimJK7R3UCEixYka5HH4WUlBhc0wYmXPGjiVb7r-WCpfMk5meRwcajKPvXz77Ec8egR84SS0X8ApwQ1BFtJY4PikgvNn6IWyf3bF6eVGFOYRLmJEaj1R91nJtjrRkKt1WdQKc6ovCRR4OC8uXyyvB-7Gzz3JnDBgAV9aBw?width=444&height=486&cropmode=none" width="190" height="240" border="0" alt="" /></td>
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
																								<td  style="font-family: Arial,sans-serif; font-size:14px; line-height:18px; text-align:center; text-transform:uppercase; padding:10px; background:transparent; border:1px solid #000000; color:#000000;"><a href="'.getAddress1().'/shop?bname=Clear%20Essence" target="_blank"  style="color:#000001; text-decoration:none;"><span style="color:#000001; text-decoration:none;">view more</span></a></td>
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
																					<td style="font-size:0pt; line-height:0pt; text-align:center; padding-bottom:20px;"><img src="http://wvwxmw.am.files.1drv.com/y4mNhPxyfe_63MnC75KYUZswXs6whWCTzk3cZaTkp56VkYkoASxMt7IoBoNSkwtgvwRPujyeTsqj4xWDZIKTJw4sikHmDSq05xYwkPQORJ0wfaYfdMwQ3sQkRjAyQyEpl0xw5c1ZyHlXOu_ZWfC518rto9oiEQUIaWl2WEAxSksp7RLM1amaQiPB16zg0Wl-YWyW7-PXyEIoAVg72dgTkWXqg?width=640&height=640&cropmode=none" width="190" height="240" border="0" alt="" /></td>
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
																								<td  style="font-family: Arial,sans-serif; font-size:14px; line-height:18px; text-align:center; text-transform:uppercase; padding:10px; background:transparent; border:1px solid #000000; color:#000000;"><a href="'.getAddress1().'/shop?bname=ORS%20Olive%20Oil" target="_blank"  style="color:#000001; text-decoration:none;"><span style="color:#000001; text-decoration:none;">view more</span></a></td>
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
																					<td  style="font-size:0pt; line-height:0pt; text-align:center; padding-bottom:20px;"><img src="http://wvxg1q.am.files.1drv.com/y4m2qaLBTwrfO_mV5rxH-m7lx7UAP6RMa0qTIU6C9x7z5zEjuc0BubOZwzN1Wpe_6P4bdHhqX0KsphlBCltC-9OucDoPiCYb8n952tb63qPSS9k6fIF15EcLhHxMIII6__fvqty2cTKLpDspHFcZWWK5xDxLLXZx8NR4LH_TAzlfAM317Qv4ybcGtYLEdcmfz5qwvBhiVq5xdQOlCKggEtRmA?width=2700&height=2700&cropmode=none" width="190" height="240" border="0" alt="" /></td>
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
																								<td style="font-family: Arial,sans-serif; font-size:14px; line-height:18px; text-align:center; text-transform:uppercase; padding:10px; background:transparent; border:1px solid #000000; color:#000000;"><a href="'.getAddress1().'/shop?bname=Dark%20&%20Lovely" target="_blank"  style="color:#000001; text-decoration:none;"><span  style="color:#000001; text-decoration:none;">view more</span></a></td>
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
																		<td  width="50" style="font-size:0pt; line-height:0pt; text-align:left;"><a href="#" target="_blank"><img src="https://floratruworthsltd.com/sociologo/t_white_ico_facebook.png" width="40" height="40" border="0" alt="" /></a></td>
																		<td width="50" style="font-size:0pt; line-height:0pt; text-align:left;"><a href="#" target="_blank"><img src="https://floratruworthsltd.com/sociologo/t_white_ico_twitter.png" width="40" height="40" border="0" alt="" /></a></td>
																		<td width="50" style="font-size:0pt; line-height:0pt; text-align:left;"><a href="#" target="_blank"><img src="https://floratruworthsltd.com/sociologo/t_white_ico_gplus.png" width="40" height="40" border="0" alt="" /></a></td>
																		<td width="50" style="font-size:0pt; line-height:0pt; text-align:left;"><a href="#" target="_blank"><img src="https://floratruworthsltd.com/sociologo/t_white_ico_youtube.png" width="40" height="40" border="0" alt="" /></a></td>
																		<td  width="50" style="font-size:0pt; line-height:0pt; text-align:left;"><a href="#" target="_blank"><img src="https://floratruworthsltd.com/sociologo/t_white_ico_pinterest.png" width="40" height="40" border="0" alt="" /></a></td>
																		<td  width="40" style="font-size:0pt; line-height:0pt; text-align:left;"><a href="#" target="_blank"><img src="https://floratruworthsltd.com/sociologo/t_white_ico_linkedin.png" width="40" height="40" border="0" alt="" /></a></td>
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

$headers = "From:noreply@floratruworths.com". "\r\n";
//$headers .="CC: smartayorinde@gmail.com". "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

mail($email,$subject, $emailhtml, $headers);

//header('location:registration-complete?email='.$email.'&name='.$fname);
}

if(isset($_POST['activate']))
{
	$confirma=mysqli_query($con,"UPDATE users SET UserEmailVerified='1' WHERE ActivationCode='".$_POST['act_code']."'");
if (mysqli_affected_rows($con) >0 )
{
$ret=mysqli_query($con,"SELECT * FROM users WHERE ActivationCode='".$_POST['act_code']."'");
$num=mysqli_fetch_array($ret);
$_SESSION['ConfirmVar']="done";
$_SESSION['uName']=$num['UserFirstName']." ".$num['UserLastName'];
$extra="users";//
$_SESSION['alogin']=$num['UserEmail'];
$_SESSION['id']=$num['UserID'];
$ErrorMsg='<p style="text-align:center;">Dear '.$num['UserFirstName'].', your account has been confirmed and activated.
</p><a href="index"> <button class="btn btn-success btn-block" type="submit" style="background: #192958;">My Account</button> </a>';
}
else
{
$ErrorMsg='<p style="color:red; text-align:center;">Invalid activation code. check and try again!</p>';
}

}
?>



<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta https-equiv="x-ua-compatible" content="ie=edge">
    <title>Password Recevery | Flora Online Stores</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="http://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
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
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="httpssss://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <div class="color-line"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="back-link back-backend">
                    <a href="../login" style="background: #192958;" class="btn btn-primary">Back to login</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
            <div class="col-md-4 col-md-4 col-sm-4 col-xs-12">
                <div class="text-center ps-recovered">
                    <h3 style="color:green;">CONGRATULATIONS!!!</h3>
                </div>
				<div class="hpanel">
                    <div class="panel-body poss-recover">
                        <?php echo $ErrorMsg;?>
                    </div>
                </div>
                <div class="hpanel">
                    <div class="panel-body poss-recover">
                        <p>
                            <?php echo 'Dear '.$_GET["name"].", a confirmation email has been sent to ".$_GET["email"].". Click on the confirmation link in your email to activate your account. An alternative Activation Pin was also sent to ".$_GET["phone"]." via sms."?>
                        </p>
                        <form href="#" method="post">
                        <br>

                        <p>Confirmation email not received? Check your spam or click on resend email button bellow. </p>

						<p>Activate through Activation Pin sent via text ?</p>
						<div class="form-group col-lg-6">
                            <label>Activation Pin</label>
                            <input name="act_code" class="form-control">
                        </div>
						<br>
						<button name="activate" style="background: #192958;" class="btn btn-success loginbtn">Activate</button>

                            <button name="ResendMail" class="btn btn-success btn-block" style="background: #192958;">Resend Email</button>
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