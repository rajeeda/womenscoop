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


	<section class="sec-padding faq-home faq-page pt_90">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-push-1">
					<div class="accrodion-grp" data-grp-name="faq-accrodion">
						<?php foreach ($cu_solution as $key => $value) {
						?>
						<div class="accrodion" id="<?=preg_replace('/\s+/', '_', $value->solution_name)?>">
							<div class="accrodion-title">
								<h4>
									<img src="<?php echo base_url(); ?>upload_images/Credit_Union_Solution/thumb/<?=$value->image_file;?>" onerror=this.onerror=null;this.src="<?php echo base_url(); ?>assets/img/event/event.png">
									<span class="text"><?=$value->solution_name;?></span>
								</h4>
							</div>
							<div class="accrodion-content">
								<p><?=$value->description?> </p>
								<?php foreach ($cu_solution_doc as $key => $doc_value) {
									if($doc_value->record_id==$value->solution_id){
									
								?>
								<h5 class="event-title"><a href="<?php echo base_url(); ?>upload_images/Credit_Union_Solution/<?=$doc_value->file_data?>"  class="text-thm" ><?=$doc_value->file_name?></a></h5>
								<?php }}?>
							</div>
						</div>
						<?php }?>
						
					</div>
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
	<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<!-- gmap main script -->
	<script src="<?php echo base_url(); ?>assets/js/gmap.js"></script>

	<!-- isotope script -->
	<script src="<?php echo base_url(); ?>assets/js/isotope.pkgd.min.js"></script>
	<!-- jQuery ui js -->
	<script src="<?php echo base_url(); ?>assets/js/jquery-ui-1.11.4/jquery-ui.js"></script>


	<!-- thm custom script -->
	<script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
	<script>
	$(document).ready(function() {
		jQuery('.click_link').click(function(){
			var contentPanelId = jQuery(this).attr("href");
  		jQuery('.accrodion').removeClass("active");
  		jQuery(contentPanelId).addClass("active");

		});
	});
	</script>


</body>
</html>