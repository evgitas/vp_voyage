<!-- Offers test section start -->
	<section id="offers" class="offers_test">
		<!-- <div class="flex-container"> -->
			<div class=""><h3><?php the_field('ho_offer_title'); ?></h3>
						<h4><?php the_field('ho_offer_slogan'); ?></h4>
			</div>
			<div class="widthcontainer">
				<div class="row">
					<?php 
					if( have_rows('ho_offer_content_repeater') ):
					 	// loop through the rows of data
					    while ( have_rows('ho_offer_content_repeater') ) : the_row();
								$link = get_sub_field('ho_offer_link');
							   	//dump($link);
									if($link['target']){
							    		$target = 'target="'.$link['target'].'"';
							    	} else {
							    		$target = '';
							    	}
								$image = get_sub_field('ho_offer_image');
					    ?>
							<div class="col-6 col-md-4 col-lg-2 center">
								<a href="<?php echo $link['url']; ?>" <?php echo $target; ?> >
								<div class="offer_content_test">
									<img src="<?php echo $image['sizes']['medium']; ?> " alt="<?php  the_sub_field('ho_offer_content_text'); ?>">
									<h5><?php  the_sub_field('ho_offer_content_text'); ?></h5>
									<h5><?php  the_sub_field('ho_offer_content_extra_text'); ?></h5>
								</div>
								</a>
							</div>
					<?php
					    endwhile;
					endif;
					?>
			</div>
		<!-- </div> -->
	</section>

<!-- test end -->