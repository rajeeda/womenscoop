<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>womenscoop</title>
	<!--<meta name="AUTHOR" content="Rajeeda Holdings" />-->
	<meta name="COPYRIGHT" content="Copyright (c) 2017 -  ::: Association Of Asia Confederation Credit Union :::" />
	<meta name="KEYWORDS" content="Association, Asia, Confederation, Credit Union" />

	<!-- responsive meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- master stylesheet -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
	<!-- responsive stylesheet -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/responsive.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/slick.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/slick-theme.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="//use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">	
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">



</head>
<body>

<?php include_once 'Header.php';?>
	<section class="rev_slider_wrapper">
		<?php include_once 'Slideshow.php';?>
	</section>
<br/><br/>
	<!-- news -->
	<section class="news-feature sec-padding pb_20" data-bg-color="#fafafa">
		<div class="container">
			<div class="sec-title colored text-center">
				<h2>News and Events</h2>
				<!-- news -->
<span class="decor">
					<span class="inner"></span>
				</span>
			</div>

			<div class="row ">
				<div class="news-carousel" id="slick1">

	        	<?php
	        	$i=1;
	        	 foreach($latestnews as $row){
	        	$location = $row->location_name;
	        	$date = strtotime($row->news_date);
	        	$description = $row->description;
	        	$img = $row->news_img;
	        	$newsdate = date("d",$date);
	        	$newsmonth=date("F",$date);
	        	$newsid = $row->news_id;
	        	$newsname =  $row->news_name;
				$newsname = substr($newsname, 0,50);
				$i=$i+1;


	        ?>
				<div class="item">
				<div class="col-sm-12 col-md-12">
	              <div class="news border-1px mb_30">

	                <div class="row ">
	                  <div class="col-sm-12">
	                    <div class="news-thumb" >
	                      <div class="thumb">
	                        <img class="full-width" src="<?php echo base_url(); ?>upload_images/News_images/<?php echo $row->news_img ; ?>" height="247" onerror=this.onerror=null;this.src="<?php echo base_url(); ?>assets/img/event/event.png">
	                      </div>
	                      <ul class="news-date">
	                        <li class="date"><?php echo $newsdate ?></li>
	                        <li class="month"><?php echo $newsmonth ?></li>
	                      </ul>
	                    </div>
	                  </div>
	                  <div class="col-sm-12">
	                    <div class="news-content p_20">
	                      <h4 class="news-title"><a href="<?php echo base_url(); ?>index.php/News/getonenews?id=<?php echo $row->news_id ?> "><?php echo $newsname; ?></a></h4>
	                      <ul class="news-held list-inline">
	                        <!--<li class="mr-10" data-text-color="#555"><i class="fa fa-clock-o"></i> 6.00 pm - 8.30 pm</li> -->
	                        <li data-text-color="#555"> <i class="fa fa-map-marker"></i> <?=$row->location_name?></li>
	                      </ul>
	                     <!-- <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi expedita perspiciatis soluta quidem, recusandae sapiente.</p>-->
	                      <a href="<?php echo base_url(); ?>index.php/News/getonenews?id=<?php echo $row->news_id ?>" class="text-thm " > Read More </a>
	                    </div>
	                  </div>
	                </div>
	              </div>
	              </div>
	           		</div>
	            <?php

	             } ?>


		</div>
		<div class="pull-right"><a href="<?php echo base_url(); ?>index.php/News/getallnews" class="thm-btn small inverse mt-sm-15">View All</a></div>

		</div>
	</section>
    <!-- end of news -->

	<section class="recent-causes sec-padding" id="vedio_gallery">
		<div class="container">
			<div class="sec-title colored text-center">
				<h2>Video Galary</h2>
				<span class="decor">
					<span class="inner"></span>
				</span>
			</div>

			<div class="row">

            <!--Image Box-->
            <div class="vedio-carousel owl-carousel owl-theme">
            <?php
            foreach ($vedios as $key => $value) {?>
            <div class="item">
            <div class="">
	            <div class="clearfix">
	            <div class="causes sm-col-center">
	              <div class="thumb">
                 <iframe width="365" height="279" src="<?=$value->video_url;?>" frameborder="0" allowfullscreen></iframe>
             </div>
            </div>
            </div>
	          </div>
	          </div>
            <?php }?>
           </div>
	            </div>
		</div>

	</section>
	<section class="recent-causes sec-padding" id="photo_gallery">
		<div class="container">
			<div class="sec-title colored text-center">
				<h2>Image Gallery</h2>
				<!-- image_gallary_catogry -->
				<span class="decor">
					<span class="inner"></span>
				</span>
			</div>

			<div class="row">

            <!--Image Box-->
            <div class="photos-carousel" id="slick2">
            <?php foreach ($photos as $key => $value4) {?>
            <div class="item">
	            <div class="clearfix">
	            <div class="causes sm-col-center">

	              <div class="thumb" >
                  <a href="<?php echo base_url(); ?>index.php/Gallery/alubm?id=<?=$value4->Category_name;?>"><img class="full-width" src="<?php echo base_url(); ?>upload_images/Gallary/<?=$value4->Category_image_name;?>" height="247" onerror=this.onerror=null;this.src="<?php echo base_url(); ?>assets/img/event/event.png">
            	<div class="photos-content p_20">
	                      <h4 class="photos-title img-title"><?=$value4->Category_name;?></h4>

	                </div></a>
             </div>
            </div>
            </div>
	          </div>
            <?php }?>
           </div>
	            </div>
		</div>

	</section>

	


	</br>
	<section class="sec-padding testimonials-wrapper parallax-section">
		<div class="container">
			<div class="sec-title colored text-center">
				<h2>Testimonials</h2>
				<span class="decor">
					<span class="inner"></span>
				</span>
			</div>
			<div class="testimonaials-carousel owl-carousel owl-theme">
				<?php foreach ($testimonials as $key => $value) {?>
					<div class="item">
					<div class="single-testimonaials">
						<div class="qoute-box">
							<i class="qoute">“</i>
						</div>
						<p><?=$value->t_message;?></p>
						</div>
						<div class="testimonaials-names">
						<h3><?=$value->t_writter;?><br><br>
						<span><?=$value->t_heading;?></span></h3>
						</div>


				</div>
				<?php }?>
			</div>
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
	<script src="<?php echo base_url(); ?>assets/js/jquery-parallax.js"></script>
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
	<script src="<?php echo base_url(); ?>assets/js/owl.rows.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/slick.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/slick.min.js"></script>
	<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<!-- gmap main script -->

	<script src="<?php echo base_url(); ?>assets/js/gmap.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/modernizr.custom.72111"></script>
	<!-- isotope script -->
	<script src="<?php echo base_url(); ?>assets/js/isotope.pkgd.min.js"></script>
	<!-- jQuery ui js -->
	<script src="<?php echo base_url(); ?>assets/js/jquery-ui-1.11.4/jquery-ui.js"></script>

	<!-- revolution scripts -->

	<script src="<?php echo base_url(); ?>assets/revolution/js/jquery.themepunch.tools.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/revolution/js/jquery.themepunch.revolution.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/revolution/js/extensions/revolution.extension.migration.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/revolution/js/extensions/revolution.extension.video.min.js"></script>


	<!-- thm custom script -->
	<script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
<script>
            $(document).ready(function() {
              $('#owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                responsiveClass: true,
                responsive: {
                  0: {
                    items: 1,
                    nav: true
                  },
                  600: {
                    items: 5,
                    nav: false
                    loop: true,
                  },
                  1000: {
                    items: 8,
                    nav: true,
                    loop: true,
                    margin: 20
                  }
                }
              })
            })
          </script>

</body>
</html>
