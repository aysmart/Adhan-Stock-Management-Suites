<?php
session_start();
error_reporting(0);
include('includes/config.php');
//include('includes/generateUniqueCodes.php');

if(isset($_POST['Register']))
{
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $email=$_POST['email'];
  $phoneno=$_POST['phoneno'];
  $passw1=$_POST['passw1'];
  $passw2=$_POST['passw2'];
  $sub=$_POST['sub'];
if ($sub=="on")
{
  $sub1=1;
}
else
{
  $sub1=0;
}

if ($passw1==$passw2)
{
  //echo 'the same';
}
else {
  //echo 'not the same';
  $errormsg="<p>Your password and repeat password do not match. Kindly check and try again.</p>";
}

//and UserPassword='".md5($_POST['pass'])."'
$ret=mysqli_query($con,"SELECT * FROM users WHERE UserEmail='".$email."'");
$numcheck=mysqli_num_rows($ret);
if ($numcheck>0)
{
  $errormsg='<p>Email address already exits. Have you forgotten your password? CLick <a href="password-recovery">Password Recovery</a></p>';
}
else {
  

  $uniqid= md5(time());
  $uniqid2= substr(md5(time()), 2, 7 );
  $passw3=md5($passw1);
$regis=mysqli_query($con,"INSERT INTO users(UserFirstName, UserLastName, UserEmail, UserPassword, UserPhone, UserVerificationCode, Subscription, ActivationCode) values('$fname','$lname','$email','$passw3','$phoneno','$uniqid','$sub1', '$uniqid2')");    

if ($regis)
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
																		<td  style="color:#ffffff; font-family:Arial, sans-serif; font-size:16px; line-height:20px; text-transform:uppercase; text-align:left; padding-bottom:15px;">Dear '.$fname.',</td>
																	</tr>
																
																	<tr>
																		<td  style="color:#d2d4ff; font-family: Arial,sans-serif; font-size:14px; line-height:24px; text-align:left; padding-bottom:20px;">Welcome to our online store. We are very glad to have you as part of our custormers. Our wide range of products and dicounted prices are our best offers.</td>
																	</tr>
																	<!-- Button -->
																	<tr>
																		<td align="left">
																			<table width="140" border="0" cellspacing="0" cellpadding="0"> 
																				<tr>
																					<td  style="font-family: Arial,sans-serif; font-size:14px; line-height:18px; text-align:center; text-transform:uppercase; padding:10px; background:#ffffff; color:#f54084; font-weight:bold;"><a href="'.getAddress1().'/users/confirmemail?ecid='.$uniqid.'" target="_blank" style="color:#4e54cb; text-decoration:none;"><span style="color:#4e54cb; text-decoration:none;">Confirm Email</span></a></td>
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

$headers = "From:noreply@floratruworths.com". "\r\n";
//$headers .="CC: smartayorinde@gmail.com". "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

mail($email,$subject, $emailhtml, $headers);

header('location:registration-complete?email='.$email.'&name='.$fname.'&phone='.$phoneno);
$phoneno=$phoneno-0;
$email = "smartayorinde@gmail.com";
$password = "1234wesaY**";
$message = $fname.", welcome. Your activation code is: ".$uniqid2;
$sender_name = "FloraStores";
$recipients = "234".$phoneno;
$forcednd = "1";

$data = array("email" => $email, "password" => $password,"message"=>$message, "sender_name"=>$sender_name,"recipients"=>$recipients,"forcednd"=>$forcednd);
$data_string = json_encode($data);
$ch = curl_init('https://app.multitexter.com/v2/app/sms');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Content-Length: ' . strlen($data_string)));
$result = curl_exec($ch);
$res_array = json_decode($result);
print_r($res_array);
  
}


}




?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Register | Flora Online Stores</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="img/x-icon" href="img/favicon.ico">
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
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"></div>
            <div class="col-md-6 col-md-6 col-sm-6 col-xs-12">
                <div class="text-center custom-login">
                    <h3>Account Registration</h3>
                    <p>Kindly fill in your information accurately</p>
                    <span style="color:red;"><?php echo $errormsg; ?> </span>
                </div>
                <div class="hpanel">
                    <div class="panel-body">
                        <form action="#" method="post" id="loginForm">
                            <div class="row">
                            <div class="form-group col-lg-6">
                                    <label>First Name</label>
                                    <input name="fname" required class="form-control">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Last Name</label>
                                    <input name="lname" required class="form-control">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Email Address</label><span id="Verify"></span>
                                    <input  name="email" required type="email" class="form-control emailcheck">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Phone No.</label>
                                    <input name="phoneno" required type="number" class="form-control">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Password</label>
                                    <input name="passw1" required type="password" class="form-control">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Repeat Password</label>
                                    <input name="passw2" required type="password" class="form-control">
                                </div>

                                <div class="checkbox col-lg-12">
                                    <input name="sub" type="checkbox" class="i-checks" checked> Sign up for our newsletter
                                </div>
                                <div class="checkbox col-lg-12">
                                    <input required  type="checkbox" class="i-checks"> I have read and agree to the <a href="#" class="agree"><b>Privacy Policy</b></a>
                                </div>
                            
                            </div>
                            <div class="text-center">
                                <button name="Register" style="background: #192958;" class="btn btn-success loginbtn">Register</button>
                                <button class="btn btn-default">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"></div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <p>Copyright &copy; 2020 <a href="../index">Flora Truworth Limited</a> All rights reserved.</p>
            </div>
        </div>
    </div>


<script>
 $(document).ready(function(){  


  function checkemail()
{
  var emailcheck = document.getElementById("email").value; 
          alert(emailcheck);
}


        $("#emailcheck").on("change", ".emailcheck", function(){
          
          
          var emailcheck = document.getElementById("email").value; 
          alert(emailcheck);
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