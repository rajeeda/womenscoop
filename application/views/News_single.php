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
					<div class="single-blog-post">
						<?php foreach($news as $row){
					        $location = $row->location_name; 
					        $date = strtotime($row->news_date); 	        	
					        $description = stripslashes($row->description); 
					        $img = $row->news_img; 
					        $newsdate = date("d",$date);
					        $newsmonth=date("F",$date);
					        $newsid = $row->news_id;
					        $newsname =  $row->news_name;
					    ?>
						<div class="img-box">
                        
							<img src="<?php echo base_url(); ?>upload_images/News_images/<?php echo $row->news_img ; ?>"  height="398" width="777" alt="">
						</div>
                        <br>
                        <div class="img-box">
                         <div class="row">
                          <?php 
						   foreach($news_rel_images as $nimages)
						   {
						  ?>
							<div class="col-md-6">
                             <img src="<?php echo base_url(); ?>upload_images/News_images/<?php echo $nimages->news_image ; ?>"   alt="">
                            </div>
                            
                           <?php
                           }
						   ?> 
                          </div> 
						</div>
                       
						<div class="content-box">
                        <br><br>
							<div class="date-box">
								<div class="inner">
                                 
									<div class="date">
										<b><?php echo $newsdate ?></b>
										<?php echo $newsmonth ?>
									</div>
									<div class="comment">
										<i class="flaticon-interface-1"></i> 8
									</div>
								</div>
							</div>
							<div class="content">
								<a href="#"><h3><?php echo $newsname; ?></h3></a>
								<ul class="list-inline">
	                                <li>Date : <?php echo date("l F d, Y",$date); ?></li>
	                                <li class="text-thm">Venue : <?php echo $location; ?></li>
	                            </ul>
								<p><?php echo $description; ?></p>
								<div class="bottom-box clearfix">
									<span class="pull-left">Related Documents: 
										<?php foreach ($nrdfiles as $file) {?> 
											<tr>
					                            <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
					                                <tr>
					                                  <td width="1%">&nbsp;</td>
					                                  <td width="2%"><img src="/images/arrow_01.jpg" width="23" height="20" /></td>
					                                  <td width="97%" class="aboutus_text"> <a <?php if($file->file_name !=''){ ?> href="download.php?path_id=3&publication_name=<?php echo $file->file_name; }?>"> <span class="aboutus_text"><?php echo $file->file_name; ?></span></a></td>
					                                </tr>
					                            </table></td>
					                        </tr>
					                        <?php }
									        if(count($nrdfiles) === 0){ ?>
					                          <tr>
					                            <td><table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
					                                <tr>
					                                  <td width="11%" class="aboutus_text"> &nbsp;&nbsp;No Related Documents</td>
					                                </tr>
					                              </table>				                            
					                            </td>
					                          </tr>
					                          <?php } ?>

										<?php } ?>

										</span>
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
					
					<div class="comment-form contact-content">
						<h2>Leave a Comment</h2>
						<form action="inc/sendemail.php" class="contact-form row" id="contact-page-contact-form">
							<div class="col-md-6">
								<input type="text" name="name" placeholder="Name">
								<input type="text" name="email" placeholder="Email">
								<input type="text" name="phone" placeholder="Phone">
								<button class="thm-btn" type="submit">Send</button>
							</div>
							<div class="col-md-6">
								<textarea name="message" placeholder="Message" cols="30" rows="10"></textarea>
							</div>
						</form>
					</div>

				</div>
				<div class="col-md-4 pull-right">
					<div class="side-bar-widget">
						<div class="single-sidebar-widget search">
							<form action="#">
								<input type="text" placeholder="News Search">
								<button type="submit"><i class="fa fa-search"></i></button>
							</form>
						</div>
						
						<div class="single-sidebar-widget popular-post">
							<h3 class="title">Popular News</h3>
							<?php 
							$i=0;
							foreach ($latestnews as $row) {
								$i=$i+1;
								if($i==13){
									break;
								}
								?>
							<ul>
								<li>
									<div class="content-box">
										<a href="<?php echo base_url(); ?>index.php/News/getonenews?id=<?php echo $row->news_id ?>"><h4><?=$row->news_name;?></h4></a>
										<span><?=$row->news_date;?></span>
									</div>
								</li>
							</ul>
							<?php }?>
							
						</div>
						<div class="single-sidebar-widget archive">
							<h3 class="title">News Archive</h3>
							<ul>
								<li><a href="#">Appril 2017</a></li>
								<li><a href="#">March 2017</a></li>
								<li><a href="#">February 2017</a></li>
								<li><a href="#">January 2017</a></li>
								<li><a href="#">december 2016</a></li>
								<li><a href="<?php echo base_url(); ?>index.php/News/getOldNews">Old News</a></li>
							</ul>
						</div>						
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



</body>
</html>
