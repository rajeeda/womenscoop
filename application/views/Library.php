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
	<section class="blog-home sec-padding blog-page blog-details" >
		<div class="container">
			<div class="row">

				<div class="col-md-8 pull-left" >
                
                    <?php foreach ($PublicationsType as $PublicationsType){

                        ?>
                    <div class="title" id='publication_id<?=$PublicationsType->publication_cat_id;?>'>
					   <h2><?=$PublicationsType->pub_cat_name;?></h2>
				    </div>
                    <hr>
                    
                    
                    <?php foreach ($techReports as $techReport) {
                    	if($PublicationsType->publication_cat_id==$techReport['publication_cat_id']){
                        if (count($techReport['data']) > 0) {
                            ?>

                            <div id="name<?= $techReport['id'] ?>" class="title">
                                <h4><?= $techReport['name'] ?></h4>
                            </div>
                            <hr>
                            <?php foreach ($techReport['data'] as $data) {
                                $date = $data->add_date;
                                ?>
                                <div class="single-blog-post">
                                    <div class="content-box" id="tech<?= $data->pub_doc_id ?>">
                                         <div class="col-sm-1">
	                    <div class="event-thumb">
	                      <div class="thumb">
	                        <img class="full-width" src="<?php echo base_url(); ?>upload_images/Publication/<?= $data->pub_image ?>" onerror=this.onerror=null;this.src="<?php echo base_url(); ?>assets/img/event/event.png">
	                      </div>
	                      
	                    </div>
	                  </div>
                                        <div class="content">
                                            <a href="<?= base_url() ?>upload_images/publication_Documents/<?= $data->pub_doc_file ?>">
                                                <h3><span class="report"><?= $data->pub_doc_name ?></span></h3></a>
                                            <p><?= $data->pub_doc_description ?></p> <br>
                                        </div>
                                    </div>
                                </div>

                            <?php }

                        }}
                    }?>
                    <?php  }?>
				</div>
				<div class="col-md-4 pull-right">
					<div class="side-bar-widget">
						<div class="single-sidebar-widget search">
							<form action="#">
								<input type="text" placeholder="Search">
								<button type="submit"><i class="fa fa-search"></i></button>
							</form>
						</div>
						<div class="single-sidebar-widget category">
							<h3 class="title">Catagories</h3>
							<ul>
								<?php foreach ($PublicationsCategory as $PublicationsCategories){

                        ?>
								<li><a href="#publication_id<?=$PublicationsCategories->publication_cat_id;?>"><?=$PublicationsCategories->pub_cat_name;?></a></li>
								<?php }?>
							</ul>
						</div>
						<!-- <div class="single-sidebar-widget popular-post">
							<h3 class="title">Popular Posts</h3>
							<ul>
								<li>
									<div class="img-box">
										<div class="inner-box">
											<img src="assets/img/blog-page/s1.jpg" alt="">
										</div>
									</div>
									<div class="content-box">
										<a href="#"><h4>Lorem Ipsum is simply dumm textand somthing more here</h4></a>
										<span>17 jun, 2015</span>
									</div>
								</li>
								<li>
									<div class="img-box">
										<div class="inner-box">
											<img src="<?php //echo base_url(); ?>assets/img/blog-page/s2.jpg" alt="">
										</div>
									</div>
									<div class="content-box">
										<a href="#"><h4>Lorem Ipsum is simply dumm textand somthing more here</h4></a>
										<span>17 jun, 2015</span>
									</div>
								</li>
								<li>
									<div class="img-box">
										<div class="inner-box">
											<img src="<?php //echo base_url(); ?>assets/img/blog-page/s3.jpg" alt="">
										</div>
									</div>
									<div class="content-box">
										<a href="#"><h4>Lorem Ipsum is simply dumm textand somthing more here</h4></a>
										<span>17 jun, 2015</span>
									</div>
								</li>
								<li>
									<div class="img-box">
										<div class="inner-box">
											<img src="<?php //echo base_url(); ?>assets/img/blog-page/s4.jpg" alt="">
										</div>
									</div>
									<div class="content-box">
										<a href="#"><h4>Lorem Ipsum is simply dumm textand somthing more here</h4></a>
										<span>17 jun, 2015</span>
									</div>
								</li>
							</ul>
						</div> -->
						<!--<div class="single-sidebar-widget archive">
							<h3 class="title">Technical Reports</h3>
							<ul>
                                <?php foreach ($publications as $publication) { ?>
								<li><a href="#name<?=$publication->publication_id?>"><?=$publication->document_name?></a></li>

                                <?php } ?>
							</ul>
						</div>-->
						<!-- <div class="single-sidebar-widget tags">
							<h3 class="title">Keywords</h3>
							<ul>
								<li><a href="#">Child</a></li>
								<li><a href="#">Charity</a></li>
								<li><a href="#">Sponsorship</a></li>
								<li><a href="#">Volunteers</a></li>
								<li><a href="#">Feed</a></li>
							</ul>
						</div> -->
					</div>
				</div>
			</div>
		</div>
	</section>


	<!-- <section class="p_40" data-bg-color="#eee">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="clients-carousel owl-carousel owl-theme">
						<div class="item">
							<div class="img-box">
								<img src="<?php //echo base_url(); ?>assets/img/clients/logo-6.png" alt="">
							</div>
						</div>
						<div class="item">
							<div class="img-box">
								<img src="<?php //echo base_url(); ?>assets/img/clients/logo-7.png" alt="">
							</div>
						</div>
						<div class="item">
							<div class="img-box">
								<img src="<?php //echo base_url(); ?>assets/img/clients/logo-8.png" alt="">
							</div>
						</div>
						<div class="item">
							<div class="img-box">
								<img src="<?php //echo base_url(); ?>assets/img/clients/logo-9.png" alt="">
							</div>
						</div>
						<div class="item">
							<div class="img-box">
								<img src="<?php //echo base_url(); ?>assets/img/clients/logo-10.png" alt="">
							</div>
						</div>
						<div class="item">
							<div class="img-box">
								<img src="<?php //echo base_url(); ?>assets/img/clients/logo-7.png" alt="">
							</div>
						</div>
						<div class="item">
							<div class="img-box">
								<img src="<?php //echo base_url(); ?>assets/img/clients/logo-7.png" alt="">
							</div>
						</div>
						<div class="item">
							<div class="img-box">
								<img src="<?php //echo base_url(); ?>assets/img/clients/logo-10.png" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->
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