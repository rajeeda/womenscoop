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
<style>
#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  border: none;
  outline: none;
  background-color: blue;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 0px;
}

#myBtn:hover {
  background-color: #555;
}
</style>


</head>
<body>
<?php include_once 'Header.php';?>
	
	<button onClick="topFunction()" id="myBtn" title="Go to top" class="owl-prev">Top</button>	
	
	<section class="blog-home sec-padding blog-page blog-details">

		<div class="container" id="Regular_Members">
			<h3><b>Our Services</b></h3>
		<?php
				foreach($members as $val){
					if($val->member_type_id==1){?>
				
			<div class="row">
				<div class=" pull-left">
					
					<div class="admin-info">
						<div class="col-md-6">
						<div class="img-box  ">
							<div class="inner-box">
								<img src="<?php echo base_url(); ?>upload_images/member_logos/<?=$val->member_sign;?>" alt="Awesome Image" style="height: 350px !important"/>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="content ">
							                            
                                 <h3><?=$val->member_name;?></h3>                           

							<p><?=$val->Address;?>						
							</p>
						</div>
					</div>
                        <br><br><br>
					</div>
				</div>
			</div>
			<?php
			}
		}?>
		</div>
		
		
		
		
		
	</section>
	<?php include_once 'Footer.php';?>
	


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
// When the user scrolls down 20px from the top of the document, show the button
	window.onscroll = function() {scrollFunction()};

	function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
	}

// When the user clicks on the button, scroll to the top of the document
	function topFunction() {
  	  document.body.scrollTop = 0;
   	 document.documentElement.scrollTop = 0;
	}
	</script>


</body>
</html>
