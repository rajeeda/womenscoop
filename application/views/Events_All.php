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
	<section class="event-feature sec-padding pb_60" data-bg-color="#fafafa">
		<div class="container">
			<div class="row">
				<div class="sec-title colored text-center">
					<h2>Events</h2>
					<span class="decor">
						<span class="inner"></span>
					</span>
			</div>
			<div class="row">
				<?php 
				$ix=0;
				$pg=1;
				foreach($events as $key){
	            		$dateTime = new DateTime($key->event_starting_date);
	            		$ix=$ix+1;
	            		if($ix==12){
	            			$pg=2;
	            		}
	            		?>
							<div class="col-sm-6 col-md-4">
	              <div class="event border-1px mb_30">
	                <div class="row">
	                  <div class="col-sm-12">
	                    <div class="event-thumb">
	                      <div class="thumb">
	                        <img class="full-width" href="<?php echo base_url(); ?>assets/img/event/1.jpg" alt="">
	                      </div>
	                      <ul class="event-date">
	                        <li class="date"><?=$dateTime->format('d');?></li>
	                        <li class="month"><?=$dateTime->format('M');?></li>
	                        <li class="month"><?=$dateTime->format('Y');?></li>
	                      </ul>
	                    </div>
	                  </div>
	                  <div class="col-sm-12">
	                    <div class="event-content p_20">
	                      <h4 class="event-title"><a href="<?php echo base_url(); ?>Index.php/Event/get_event/<?=$key->event_id;?>"><?=$key->event_name;?></a></h4>
	                      <ul class="event-held list-inline">
	                        <li class="mr-10" data-text-color="#555"><i class="fa fa-clock-o"></i> 6.00 pm - 8.30 pm</li>
	                        <li data-text-color="#555"> <i class="fa fa-map-marker"></i><?=$key->location_description;?></li>
	                      </ul>
	                    </div>
	                  </div>
	                </div>
	              </div>
	            </div>
	            <?php }?>
					</div>
					
				
			<div class="col-sm-12">
				<!--Pagination-->
				<div class="pager-outer clearfix text-center mt_30 mb_0">
				    <ul class="pagination mb_0">
				        <li><a href="#">Prev</a></li>
				        <li class="active"><a href="#">1</a></li>
				        <li><a href="#">2</a></li>
				        <li><a href="#">3</a></li>
				        <li><a href="#">-</a></li>
				        <li><a href="#">4</a></li>
				        <li><a href="#">5</a></li>
				        <li><a href="#">Next</a></li>
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
	<script href="<?php echo base_url(); ?>assets/js/jquery-1.11.1.min.js"></script>
	<!-- bootstrap -->
	<script href="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	<!-- bx slider -->
	<script href="<?php echo base_url(); ?>assets/js/jquery.bxslider.min.js"></script>
	<!-- owl carousel -->
	<script href="<?php echo base_url(); ?>assets/js/owl.carousel.min.js"></script>
	<!-- validate -->
	<script href="<?php echo base_url(); ?>assets/js/validate.js"></script>
	<!-- mixit up -->
	<script href="<?php echo base_url(); ?>assets/js/jquery.mixitup.min.js"></script>
	<!-- fancybox -->
	<script href="<?php echo base_url(); ?>assets/js/jquery.fancybox.pack.js"></script>
	<!-- easing -->
	<script href="<?php echo base_url(); ?>assets/js/jquery.easing.min.js"></script>
	<!-- circle progress -->
	<script href="<?php echo base_url(); ?>assets/js/circle-progress.js"></script>
	<!-- appear js -->
	<script href="<?php echo base_url(); ?>assets/js/jquery.appear.js"></script>
	<!-- count to -->
	<script href="<?php echo base_url(); ?>assets/js/jquery.countTo.js"></script>
	<!-- gmap helper -->
	<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<!-- gmap main script -->
	<script href="<?php echo base_url(); ?>assets/js/gmap.js"></script>

	<!-- isotope script -->
	<script href="<?php echo base_url(); ?>assets/js/isotope.pkgd.min.js"></script>
	<!-- jQuery ui js -->
	<script href="<?php echo base_url(); ?>assets/js/jquery-ui-1.11.4/jquery-ui.js"></script>


	<!-- thm custom script -->
	<script href="<?php echo base_url(); ?>assets/js/custom.js"></script>



</body>
</html>