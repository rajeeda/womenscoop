<footer class="footer sec-padding1">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-6">
					<div class="footer-widget about-widget">
						<a href="#">
							<img src="<?php echo base_url(); ?>assets/img/resources/logo.png" alt="Awesome Image" />
						</a>
						
						<ul class="contact">
							<li><i class="fa fa-map-marker"></i> <span>5th Floor FSCT Building, </br>No. 199 Nakornin Rd.(Rama V), Bangsrithong </br>
							Sub- District,Bangkruay District,Nonthaburi Province 11130</span></li>
							<li><i class="fa fa-phone"></i> <span> +662-496-1262 / +662-496-1264</span></li>
							<li><i class="fa fa-fax"></i> <span> +662-496-1263</span></li>
							<li><i class="fa fa-envelope-o"></i> <span>aaccumail@aaccu.coop</span></li>
						</ul>
						<ul class="social">
							<li><a href="https://www.facebook.com/accu.thailand" target="_blank" ><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" target="_blank" ><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" target="_blank" ><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#" target="_blank" ><i class="fa fa-pinterest"></i></a></li>
							<li><a href="#" target="_blank" ><i class="fa fa-youtube"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="footer-widget quick-links">
						<h3 class="title">Pages</h3>
						<ul>
							<li><a href="<?php echo base_url(); ?>index.php/About">About Us</a></li>
							<li><a href="<?php echo base_url(); ?>index.php/Members">services</a></li>
							<li><a href="<?php echo base_url(); ?>index.php/News/getallnews">News and Events</a></li>
							<li><a href="<?php echo base_url(); ?>index.php/Gallery/photos">Photo Gallery</a></li>
							<li><a href="<?php echo base_url(); ?>index.php/Gallery/vedio">Video Gallery</a></li>							
							<li><a href="<?php echo base_url(); ?>index.php/Contact">Contact</a></li>
						</ul>
					</div>
				</div>
				
				<div class="col-md-5 col-sm-6">
					<div class="footer-widget contact-widget">
						<h3 class="title">Contact Form</h3>
						<form action="inc/sendemail.php" class="contact-form" id="footer-cf">
							<input type="text" name="name"  placeholder="Full Name">
							<input type="text" name="email" placeholder="Email Address" >
							<textarea name="message" placeholder="Your Message"></textarea>
							<button type="submit">Send</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</footer>
