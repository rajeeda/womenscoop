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
	<section class="inner-header">
		<div class="container">
			<div class="row">
				<div class="col-md-12 sec-title colored text-center">
					<h3><b>Event Registration Form</b></h3>
					
					<span class="decor"><span class="inner"></span></span>
				</div>
			</div>
		</div>
	</section>
	<div class="comment-form contact-content">
						<div class="causes-details clearfix p_30">
							<div class="space-6"></div>
                                                <?php
                                                if($error['status']=='error'){
                                                ?>
                                                    <div class="alert alert-danger">
                                                        <?=$error['msg']?>
                                                    </div>
                                                <?php
                                                } elseif($error['status']=='success'){
                                                ?>
                                                    <div class="alert alert-success">
                                                        <?=$error['msg']?>
                                                    </div>
							<?php
                                }
                                echo form_open('Event_registration/eventRegister', array('name' => 'myform','class'=>'contact-form row'));    
                                 ?>
								
							<div class="col-md-6">
								<input type="text" name="name" id="name" placeholder="Name">
								<?php echo form_error('name');?>
								<input type="text" name="contact" id="contact" placeholder="Contact Number">
								<?php echo form_error('contact');?>
								<select name="society" id="society" placeholder="Name of Member">
									<option value="">Name of Member</option>
									<?php foreach ($members as $key => $value) {?>
										<option value="<?=$value->member_id;?>"><?=$value->member_name;?></option>
									<?php }?>
									
								</select>
								
								<?php echo form_error('society');?>
								<br>
								<button class="thm-btn pull-right" type="submit">Submit </button>
							</div>
							<div class="col-md-6">
								<input type="text" name="address" id="address" placeholder="Address">
								<?php echo form_error('address');?>
								<input type="text" name="email" id="email" placeholder="E-mail">
								<?php echo form_error('email');?>
								<select name="event" id="event" placeholder="Event">
									<option value="">Event</option>
									<?php foreach ($events as $key => $value) {?>
										<option value="<?=$value->event_id;?>"><?=$value->event_name;?></option>
									<?php }?>
									
								</select>
								<?php echo form_error('event');?>
								
								<br>
								<button class="thm-btn " type="reset">Cancel </button>

							</div>
							<?php echo form_close(); ?>
						</div>
					</div>


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