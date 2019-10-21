
<header class="header">
		<div class="container">
			<div class="logo pull-left">
				<a href="<?php echo base_url(); ?>index.html">
					<img src="<?php echo base_url(); ?>assets/img/resources/logo.png" alt="Awesome Image" />
				</a>
			</div>
			<div class="header-right-info pull-right clearfix">
					<div class="social-icons pull-right">
							<ul>

								<!-- <li><a href="#" target="_blank"><i class="fa fa-pinterest"></i></a></li> -->
						<?php if($this->session->userdata('login')){?>
						<li><b><a href="<?php echo base_url(); ?>index.php/Bm_logout_ctrl">Logout</a></b></li>
					<?php }?>
							</ul>
						</div> 
				<!-- <div class="single-header-info">
					<div class="icon-box">
						<div class="inner-box">
							<i class="flaticon-interface-2"></i>
						</div>
					</div>
					<div class="content">
						<h3>EMAIL</h3>
						<p>info@aaccu.asia</p>
					</div>
				</div> -->
				<!-- <div class="single-header-info">
					<div class="icon-box">
						<div class="inner-box">
							<i class="fa fa-facebook"></i>
						</div>
					</div>
					<div class="content">
						<h3>Call Now</h3>
						<p><b>(66)-2-7044253-54</b></p>
					</div>
				</div> -->
				<div class="single-header-info">
	                
				</div>
			</div>
			
		</div>
	</header> <!-- /.header -->



	