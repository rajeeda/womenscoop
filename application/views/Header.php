
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
								<li><a href="https://www.facebook.com/accu.thailand" target="_blank"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
								<!-- <li><a href="#" target="_blank"><i class="fa fa-pinterest"></i></a></li> -->
						<?php if($this->session->userdata('login')){?>
						<li><b><a href="<?php echo base_url(); ?>index.php/Logout">Logout</a></b></li>
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
	<nav class="mainmenu-area stricky style="height: 54px;"" >
		<div class="container" >
			<div class="navigation" style="text-align: center;">
				<div class="nav-header">
					<ul>
						<li class="dropdown">
							<a href="<?php echo base_url(); ?>index.php">Home</a>
							
						</li>
						<li class="dropdown">
							<a href="<?=base_url('index.php/About')?>">About Us</a>
							    
						</li>						
									
						<li class="dropdown">
							<a href="<?php echo base_url(); ?>index.php/Members">services</a>
						
						</li>
						<li class="dropdown">
							<a href="<?php echo base_url(); ?>index.php/News/getallnews">News and Events</a>
								
						</li>
						<li class="dropdown">
							<a href="#">Gallery</a>
							 <ul class="submenu">
								<li><a href="<?php echo base_url(); ?>index.php/Gallery/photos">Photo Gallery</a></li>
								<li><a href="<?php echo base_url(); ?>index.php/Gallery/vedio">Video Gallery</a></li>
							</ul> 
						</li>
						
						<li><a href="<?php echo base_url(); ?>index.php/Contact">Contact</a></li>
						
					</ul>
				</div>
				<div class="nav-footer">
					<button><i class="fa fa-bars"></i></button>
				</div>
			</div>
			<!-- <div class="search-box pull-right">
				<form action="#" style="height: 48px;">
					<input type="text" placeholder="Search...">
				</form>
			</div> -->
		</div>
	</nav> <!-- /.mainmenu-area -->



	