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


	<section class="blog-home sec-padding blog-page blog-details">
		<div class="container">
			<div class="row">
				<div class="col-md-8 pull-left">
	<?php foreach($events_des as $key){
	            		$dateTime = new DateTime($key->event_starting_date);
	            		?>
	              <div class="single-blog-post">
						<div class="img-box">
	                        <img class="full-width" src="<?php echo base_url(); ?>assets/img/event/event1.jpg" alt="">
	                      </div>
	                      <div class="content-box">
							<div class="date-box">
								<div class="inner">
									<div class="date">

	                        <?=$dateTime->format('d');?>
	                        <b><?=$dateTime->format('M');?></b>
	                        <?=$dateTime->format('Y');?>
	                    </div>
									<div class="comment">
										<i class="flaticon-interface-1"></i> 8
									</div>
								</div>
							</div>
							<div class="content">
	                      	<H3><a href="<?php echo base_url(); ?>index.php/Event/get_event/<?=$key->event_id;?>"><?=$key->event_name;?></a></H3>
	                      
	                      <ul class="list-inline">
	                               
	                                <li class="text-thm"><?=$key->location_description;?></li>
								</ul>
								<ul class="event-held list-inline font-13 mb_20">
		                           <li class="mr-10" data-text-color="#555"><i class="fa fa-clock-o"></i> 6.00 pm - 8.30 pm</li>
		                        </ul>
	                      <p class="mb-0"> <?=$key->description;?></p>
	                      <?php foreach($events_doc as $events_docs){ ?>
	                      <p><a href="<?php echo base_url(); ?>upload_images/event_image/<?=$events_docs->file_data;?>"><?=$events_docs->file_name;?></a></p>
	                      <?php }?>
	                      <div class="bottom-box clearfix">
									<span class="pull-left"><a href="#">Register</a></span>
									<ul class="pull-right share">
										<li><span>Share: </span></li>
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									</ul>
								</div>
	                    </div>
						</div>
					</div>

				</div>
				<div class="col-md-4 pull-right">
					<div class="side-bar-widget">
						<div class="single-sidebar-widget search">
							<form action="#">
								<input type="text" placeholder=" Event Search">
								<button type="submit"><i class="fa fa-search"></i></button>
							</form>
						</div>
						
						<div class="single-sidebar-widget popular-post">
							<h3 class="title">UPCOMING EVENT</h3>
							<ul>
								<?php foreach ($events as $key => $value) {?>
								<li>
									<div class="content-box">
										<a href="<?php echo base_url(); ?>index.php/Event/get_event/<?=$value->event_id;?>"><h4><?=$value->event_name?></h4></a>
										<span><?=$value->event_starting_date?></span>
									</div>
								</li>
								<?php }?>
								
							</ul>
							
						</div>
											
					</div>
				</div>
			</div>
		</div>
	              <?php }?>
		
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
	<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
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