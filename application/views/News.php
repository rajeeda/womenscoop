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
					<h2>News</h2>
					<span class="decor">
						<span class="inner"></span>
					</span>
				</div>

				<div class="row">
				 	<?php
				 	if($allnews){				 

					foreach ($allnews as $news) {
					 	$location = $news->location_name; 
					    $date = strtotime($news->news_date); 	        	
					    $description = $news->description; 
					    $img = $news->news_img; 
					    $newsdate = date("d",$date);
					    $newsmonth=date("F",$date);
					    $newsid = $news->news_id;
					    $newsname =  $news->news_name;
					    $newsname = substr($newsname, 0,50);
					    ?>
					<div class="col-sm-6 col-md-4">
		              <div class="event border-1px mb_30">
		                <div class="row">
		                  <div class="col-sm-12">
		                    <div class="event-thumb">
		                      <div class="thumb">
		                        <img class="full-width" src="<?php echo base_url(); ?>upload_images/News_images/<?php echo $news->news_img ; ?>" height="247"  onerror=this.onerror=null;this.src="<?php echo base_url(); ?>assets/img/event/event.png">
		                      </div>
		                      <ul class="event-date">
		                        <li class="date"><?php echo $newsdate ?></li>
		                        <li class="month"><?php echo $newsmonth?></li>
		                      </ul>
		                    </div>
		                  </div>
		                  <div class="col-sm-12">
		                    <div class="event-content p_20">
		                      <h4 class="event-title"><a href="<?php echo base_url(); ?>index.php/News/getonenews?id=<?php echo $news->news_id ?>"><?php echo $newsname; ?></a></h4>
		                      <ul class="event-held list-inline">
		                        <li class="mr-10" data-text-color="#555"><i class="fa fa-clock-o"></i> <?php echo date("l F d, Y",$date); ?></li></br>
		                        <li data-text-color="#555"> <i class="fa fa-map-marker"></i> <?php echo $location ?></li>
		                      </ul>
		                    </div>
		                  </div>
		                </div>
		              </div>
		            </div>
	           		<?php } } ?>	
				</div>
						 
			</div>

			
				<!--Pagination-->
				<div class="pager-outer clearfix text-center mt_30 mb_0">
				    <ul class="pagination mb_0">
							    <li> <?php echo $links; ?></li>    
						
				    </ul>
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