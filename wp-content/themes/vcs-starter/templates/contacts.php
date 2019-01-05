<?php

/* Template Name: Contacts page1'as */

get_header();

?>
<h2> esame contacts.php </h2>
<!-- Start Point -->
		<div id="fh5co-contact">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<?php the_content(); ?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 col-md-push-1 animate-box">
					<h3>Our Address</h3>
					<ul class="contact-info">
						<li><i class="icon-location4"></i>198 West 21th Street, Suite 721 New York NY 10016</li>
						<li><i class="icon-phone3"></i>+ 1235 2355 98</li>
						<li><i class="icon-location3"></i><a href="#">info@yoursite.com</a></li>
						<li><i class="icon-globe2"></i><a href="#">www.yoursite.com</a></li>
					</ul>
				</div>
				<div class="col-md-7 col-md-push-1 animate-box">
					<div class="row">
						<?php 
							echo  do_shortcode(get_field('contact_form_shortcode'));
						?>
					</div>
				</div>
			</div>
		</div>

<?php get_footer(); ?>