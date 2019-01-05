<?php

/* Template Name: Contacts page1'as */

get_header();

?>

<!-- Start Point -->
		<div id="contact">
			<div class="widthcontainer">
				<div class="row center">
					<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
						<h4><?php the_content(); ?></h4>
					</div>
				</div>
				<div class="row justify_center">
					<div class="col-xs-12 col-md-4">
						<h3>Our Address</h3>
						<ul class="contact-info">
							<li><i <?php  the_field('icon_description', 'option'); ?>
								<?php  the_field('ai_description', 'option'); ?></li>
							<li><i <?php  the_field('io_icon_phone', 'option'); ?></i>
								<a href="tel://<?php  the_field('io_phone', 'option'); ?>"><?php  the_field('io_phone', 'option'); ?></a></li>
							<li><i <?php  the_field('io_icon_email', 'option'); ?></i>
								<a href="mailto:<?php  the_field('io_email', 'option'); ?>">  <?php  the_field('io_email', 'option'); ?></a></li>
							<li><i <?php  the_field('io_icon_site', 'option'); ?></i>
								<a href="<?php  bloginfo('url'); ?>"><?php  the_field('io_site', 'option'); ?></a></li>
						</ul>
					</div>
					<div class="col-xs-12 col-md-4">
						<div class="row">
							<?php 
								echo  do_shortcode(get_field('contact_form_shortcode'));
							?>
						</div>
					</div>
				</div>
			</div>
		</div>

<?php get_footer(); ?>