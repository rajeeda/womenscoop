<?php
if(isset($_POST['sendmail']))
{
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$sendermail = 'accumail@aaccu.coop';

          $msg = "From : ".$email." \n"."subject : ".$subject."\n". "message : ".$name."\n".$message;
		  $msg = wordwrap($msg,70);//meka optional..onenam yawanna ona limited words tika meke daanna
		  mail($sendermail,"Mail From AACCU web",$msg);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>womenscoop</title>
	<!--<meta name="AUTHOR" content="Dhanushka Baranasuriya" />-->
	<meta name="COPYRIGHT" content="Copyright (c) 2017 -  ::: Association Of Asia Confederation Credit Union :::" />
	<meta name="KEYWORDS" content="Association, Asia, Confederation, Credit Union" />

	<!-- responsive meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- master stylesheet -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
	<!-- responsive stylesheet -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/responsive.css">



</head>
<body>
<?php include_once 'Header.php';?>

	<!-- <section class="inner-header">
		<div class="container">
			<div class="row">
				<div class="col-md-12 sec-title colored text-center">
					<h2>Contact</h2>
					<ul class="breadcumb">
						<li><a href="index.html">Home</a></li>
						<li><i class="fa fa-angle-right"></i></li>
						<li><span>Contact</span></li>
					</ul>
					<span class="decor"><span class="inner"></span></span>
				</div>
			</div>
		</div>
	</section> -->


	<section class="contact-content sec-padding">
		<div class="container">
			<div class="sec-title text-center">
				<p>Since Its Birth On 28 April 1971 To Date, We Serve More Than 21,947 Credit Unions With 38.1 Million Individual Members In 26 Countries In The Region Along With 34 Affiliates Promoting Credit Unionism In Asia.</p>
			</div>
			<!--<div class="google-map" id="contact-page-google-map" data-icon-path="<?php echo base_url(); ?>assets/img/resources/map-marker.png" data-map-lat="13.759261" data-map-lng="100.649840" data-map-zoom="15" data-map-title="Envato HQ"></div>!-->
            <div class="google-map" id="contact-page-google-map"><iframe src="https://maps.google.com/maps?q=Federation%20of%20Savingsand%20Credit%20Coop.%20of%20th%20%E0%B8%8A%E0%B8%B8%E0%B8%A1%E0%B8%99%E0%B8%B8%E0%B8%A1%E0%B8%AA%E0%B8%AB%E0%B8%81%E0%B8%A3%E0%B8%93%E0%B9%8C%E0%B8%AD%E0%B8%AD%E0%B8%A1%E0%B8%97%E0%B8%A3%E0%B8%B1%E0%B8%9E%E0%B8%A2%E0%B9%8C%E0%B9%81%E0%B8%AB%E0%B9%88%E0%B8%87%E0%B8%9B%E0%B8%A3%E0%B8%B0%E0%B9%80%E0%B8%97%E0%B8%A8%E0%B9%84%E0%B8%97%E0%B8%A2%20%E0%B8%88%E0%B8%B3%E0%B8%81%E0%B8%B1%E0%B8%94&t=&z=13&ie=UTF8&iwloc=&output=embed" width="1200" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>


            
			<div class="row">
				<div class="col-md-8">
					<h2>Contact Form</h2>
					<form action="" class="contact-form row" id="contact-page-contact-form" method="post">
						<div class="col-md-6">
							<input type="text" name="name" placeholder="Name">
							<input type="email" name="email" placeholder="Email">
							<input type="text" name="subject" placeholder="subject">	 
						</div>
						<div class="col-md-6">
							<textarea name="message" placeholder="Message" cols="30" rows="30"></textarea>
						</div>
						<div class="col-md-4"><button class="thm-btn" type="submit" name="sendmail" value="Send email">SEND</button></div>
					</form>
				</div>
				<div class="col-md-4">
					<h2>Address</h2>
					<ul class="contact-info">
						<li>
							<div class="icon-box">
								<div class="inner">
									<i class="fa fa-map-marker"></i>
								</div>
							</div>
							<div class="content-box">
								<h4>Address</h4>
								<p>	Bangkok 10250 - Thailand</p>
							</div>
						</li>
						<li>
							<div class="icon-box">
								<div class="inner">
									<i class="fa fa-phone"></i>
								</div>
							</div>
							<div class="content-box">
								<h4>Phone</h4>
								<p>(66)-2-375-3225</p>
								<p>(66)-2-375-3226</p>
							</div>
						</li>
						<li>
							<div class="icon-box">
								<div class="inner">
									<i class="fa fa-envelope-o"></i>
								</div>
							</div>
							<div class="content-box">
								<h4>Email</h4>
								<p>accumail@aaccu.coop</p>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<?php include_once 'Footer.php';?>
	<section class="footer-bottom">
		<div class="container text-center">
			<p>© 2017 Association of Asian Confederation of Credit Unions - All Rights Reserved <a href="#">Association of Asian Confederation</a></p>

		</div>
	</section>


	<!-- main jQuery -->
	<script src="<?php echo base_url(); ?>assets/js/jquery-1.11.1.min.js"></script>
	<!-- bootstrap -->
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	<!-- bx slider -->
	<script src="<?php echo base_url(); ?>assets/js/jquery.bxslider.min.js"></script>
	<!-- owl carousel -->
	<script src="<?php echo base_url(); ?>assets/js/owl.carousel.min.js"></script>
	<!-- validate -->
	<script src="<?php echo base_url(); ?>assets/js/validate.js"></script>
	<!-- mixit up -->
	<script src="<?php echo base_url(); ?>assets/js/jquery.mixitup.min.js"></script>
	<!-- fancybox -->
	<script src="<?php echo base_url(); ?>assets/js/jquery.fancybox.pack.js"></script>
	<!-- easing -->
	<script src="<?php echo base_url(); ?>assets/js/jquery.easing.min.js"></script>
	<!-- circle progress -->
	<script src="<?php echo base_url(); ?>assets/js/circle-progress.js"></script>
	<!-- appear js -->
	<script src="<?php echo base_url(); ?>assets/js/jquery.appear.js"></script>
	<!-- count to -->
	<script src="<?php echo base_url(); ?>assets/js/jquery.countTo.js"></script>
	<!-- gmap helper -->
	<script src="http://maps.google.com/maps/api/js?key=AIzaSyAMXC-Pf0_AsU3x19JKJ4oxgphZYvwUHyA"></script>
	<!-- gmap main script -->
	<script src="<?php echo base_url(); ?>assets/js/gmap.js"></script>

	<!-- isotope script -->
	<script src="<?php echo base_url(); ?>assets/js/isotope.pkgd.min.js"></script>
	<!-- jQuery ui js -->
	<script src="<?php echo base_url(); ?>assets/js/jquery-ui-1.11.4/jquery-ui.js"></script>


	<!-- thm custom script -->
	<script src="<?php echo base_url(); ?>assets/js/custom.js"></script>



</body>
</html>
