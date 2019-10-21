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
	<section class="event-feature sec-padding" data-bg-color="#fafafa">
		<div class="container">
			<div class="row">
				
				<div class="col-sm-12">
		              <div class="event">
		                <div class="row">
		                  <div class="col-xs-11">
		                    <div class="event-content p_20 pl_0 pt_0">
		                      <h3 class="event-title"><a href="#Regular_Members">Regular Members</a></h3>
		                      <ul class="event-held list-inline font-13 mb_20">
		                        <li class="mr-10" data-text-color="#555"><i class="fa fa-users"></i>  <?php foreach($membersType as $val2){if($val2->member_type_id==1){echo $val2->sum;}}?> Members</li>
		                      </ul>
		                      <p class="mb_20">The membership is open to national federation of credit unions/cooperatives/savings and credit cooperatives representing at least 20,000 individual members or 2% of the country's population. The membership is minimum of US$ 2,000 and maximum US$ 5,000 per year computed based on the aggregated movement's assets.</p>
		                    </div>
		                  </div>
		                </div>
		              </div>
				</div>
				
				<div class="col-sm-12">
		              <div class="event">
		                <div class="row">
		                  <div class="col-xs-11">
		                    <div class="event-content p_20 pl_0 pt_0">
		                      <h3 class="event-title"><a href="#Associate_Members">Associate Members</a></h3>
		                      <ul class="event-held list-inline font-13 mb_20">
		                        <li class="mr-10" data-text-color="#555"><i class="fa fa-users"></i> <?php foreach($membersType as $val2){if($val2->member_type_id==2){echo $val2->sum;}}?>     Members</li>
		                      </ul>
		                      <p class="mb_20">The membership is open to national organization or credit union league or federation which is not yet qualified to become a regular member. Annular due is US$ 1,500</p>
		                    </div>
		                  </div>
		                </div>
		              </div>
				</div>
				
				<div class="col-sm-12">
		              <div class="event">
		                <div class="row">
		                  <div class="col-xs-11">
		                    <div class="event-content p_20 pl_0 pt_0">
		                      <h3 class="event-title"><a href="#Affiliate_Member">Affiliate Member</a></h3>
		                      <ul class="event-held list-inline font-13 mb_20">
		                        <li class="mr-10" data-text-color="#555"><i class="fa fa-users"></i>   <?php foreach($membersType as $val2){if($val2->member_type_id==3){echo $val2->sum;}}?>    Members</li>
		                      </ul>
		                      <p class="mb_20">The membership is open to organizations from both local and abroad promoting and supporting credit union development. The annual dues is US$ 1,000.</p>
		                    </div>
		                  </div>
		                </div>
		              </div>
				</div>
				
				<div class="col-sm-12">
		              <div class="event">
		                <div class="row">
		                  <div class="col-xs-11">
		                    <div class="event-content p_20 pl_0 pt_0">
		                      <h3 class="event-title"><a href="#Supporter_Members">Supporter Members</a></h3>
		                      <ul class="event-held list-inline font-13 mb_20">
		                        <li class="mr-10" data-text-color="#555"><i class="fa fa-users"></i>   <?php foreach($membersType as $val2){if($val2->member_type_id==4){echo $val2->sum;}}?>    Members</li>
		                      </ul>
		                      <p class="mb_20">Open to any primary credit union willing to participate for international development. The membership would allow accelerated access to information, networking, cooperation among cooperatives and experience sharing at international level. The annual dues is US$ 500.</p>
		                    </div>
		                  </div>
		                </div>
		              </div>
				</div>
				
				<div class="col-sm-12">
		              <div class="event">
		                <div class="row">
		                  <div class="col-xs-11">
		                    <div class="event-content p_20 pl_0 pt_0">
		                      <h3 class="event-title"><a href="#ACCU_Development_Partners">Accu Development Partners</a></h3>
		                      <ul class="event-held list-inline font-13 mb_20">
		                        <li class="mr-10" data-text-color="#555"><i class="fa fa-users"></i>    <?php foreach($membersType as $val2){if($val2->member_type_id==5){echo $val2->sum;}}?>    Members</li>
		                      </ul>
		                      <p class="mb_20">ACCU Development Partners</p>
		                    </div>
		                  </div>
		                </div>
		              </div>
				</div>
				
				<div class="col-sm-12">
		              <div class="event">
		                <div class="row">
		                  <div class="col-xs-11">
		                    <div class="event-content p_20 pl_0 pt_0">
		                      <h3 class="event-title"><a href="#Strategic_Partners">Strategic Partners</a></h3>
		                      <ul class="event-held list-inline font-13 mb_20">
		                        <li class="mr-10" data-text-color="#555"><i class="fa fa-users"></i>    <?php foreach($membersType as $val2){if($val2->member_type_id==6){echo $val2->sum;}}?>     Members</li>
		                      </ul>
		                      <p class="mb_20">Strategic Partners</p>
		                    </div>
		                  </div>
		                </div>
		              </div>
	            </div>
	        </div>
		</div>
	</section>
	<section class="blog-home sec-padding blog-page blog-details">

		<div class="container" id="Regular_Members">
			<h3><b>Regular Members</b></h3>
		<?php
				foreach($members as $val){
					if($val->member_type_id==1){?>
				
			<div class="row">
				<div class="col-md-8 pull-left">
					
					<div class="admin-info">
						<div class="img-box">
							<div class="inner-box">
								<img src="<?php echo base_url(); ?>upload_images/member_logos/thumb/<?=$val->member_sign;?>" alt="Awesome Image"/>
							</div>
						</div>
						<div class="content">
							<?php
                             $url=$val->url;
                             if($url==""){

                             ?>
                                 <h3><?=$val->country_name;?> - <?=$val->member_name;?></h3>
                             <?php
                             }else{
                             ?>
                                 <h3><a href="http://<?php echo $val->url;?>" target="_blank"><?=$val->country_name;?> - <?=$val->member_name;?></a></h3>
                             <?php
                             }
                            ?>

							<p class="member_p">Address:-<?=$val->Address;?></br>
							Tel:-<?=$val->phone_no;?></br>
							Email:-<?=$val->email;?></br>
							Web : - <?=$val->url;?></p>
						</div>
                        <br><br><br>
					</div>
				</div>
			</div>
			<?php
			}
		}?>
		</div>
		<div class="container" id="Associate_Members">
			<h3><b>Associate Members</b></h3>
		<?php
				foreach($members as $val){
					if($val->member_type_id==2){?>
				
			<div class="row">
				<div class="col-md-8 pull-left">
					
					<div class="admin-info">
					


						<div class="img-box">
							<div class="inner-box">
								<img src="<?php echo base_url(); ?>upload_images/member_logos/thumb/<?=$val->member_sign;?>" alt="Awesome Image"/>
							</div>
						</div>
	
						<div class="content">
							
							<h3><?=$val->country_name;?> - <?=$val->member_name;?></h3>
							<p>Address:-<?=$val->Address;?></br>
							Tel:-<?=$val->phone_no;?></br>
							Email:-<?=$val->email;?></p>
							
						</div>
					</div>
				</div>
			</div>
			<?php
			}
		}?>
		</div>
		<div class="container" id="Affiliate_Member">
			<h3><b>Affiliate Member</b></h3>
		<?php
				foreach($members as $val){
					if($val->member_type_id==3){?>
				
			<div class="row">
				<div class="col-md-8 pull-left">
					
					<div class="admin-info">
						<div class="img-box">
							<div class="inner-box">
								<img src="<?php echo base_url(); ?>upload_images/member_logos/thumb/<?=$val->member_sign;?>" alt="Awesome Image"/>
							</div>
						</div>
						<div class="content">
							
							<h3><?=$val->country_name;?> - <?=$val->member_name;?></h3>
							<p>Address:-<?=$val->Address;?></br>
							Tel:-<?=$val->phone_no;?></br>
							Email:-<?=$val->email;?></p>
							
						</div>
					</div>
				</div>
			</div>
			<?php
			}
		}?>
		</div>
		<div class="container" id="Supporter_Members">
			<h3><b>Supporter Members</b></h3>
		<?php
				foreach ($country as $key => $value) {?>
					<h3><?=$value->country_name;?></h3>
				<?php foreach($members as $val){
					
						
					if($val->member_type_id==4){
						if ($val->country_id==$value->country_id){
					?>
				
			<div class="row">
				<div class="col-md-8 pull-left">
					
					<div class="admin-info">
						
						<div class="content">
							
							<h3><?=$val->member_name;?></h3>
							<p>Address:-<?=$val->Address;?></br>
							Tel:-<?=$val->phone_no;?></br>
							Email:-<?=$val->email;?></p>
							
						</div>
					</div>
				</div>
			</div>
			<?php
		}
		}
			}
		}?>
		</div>
		<div class="container" id="ACCU_Development_Partners">
			<h3><b>ACCU Development Partners</b></h3>
		<?php
				foreach($members as $val){
					if($val->member_type_id==5){?>
				
			<div class="row">
				<div class="col-md-8 pull-left">
					
					<div class="admin-info">
						<div class="img-box">
							<div class="inner-box">
								<img src="<?php echo base_url(); ?>upload_images/member_logos/thumb/<?=$val->member_sign;?>" alt="Awesome Image"/>
							</div>
						</div>
						<div class="content">
							
							<h3><?=$val->country_name;?> - <?=$val->member_name;?></h3>
							<p>Address:-<?=$val->Address;?></br>
							Tel:-<?=$val->phone_no;?></br>
							Email:-<?=$val->email;?></p>
							
						</div>
					</div>
				</div>
			</div>
			<?php
			}
		}?>
		</div>
		<div class="container" id="Strategic_Partners">
			<h3><b>Strategic Partners</b></h3>
		<?php
				foreach($members as $val){
					if($val->member_type_id==6){?>
				
			<div class="row">
				<div class="col-md-8 pull-left">
					
					<div class="admin-info">
						<div class="img-box">
							<div class="inner-box">
								<img src="<?php echo base_url(); ?>upload_images/member_logos/thumb/<?=$val->member_sign;?>" alt="Awesome Image"/>
							</div>
						</div>
						<div class="content">
							
							<h3><?=$val->country_name;?> - <?=$val->member_name;?></h3>
							<p>Address:-<?=$val->Address;?></br>
							Tel:-<?=$val->phone_no;?></br>
							Email:-<?=$val->email;?></p>
							
						</div>
					</div>
				</div>
			</div>
			<?php
			}
		}?>
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
