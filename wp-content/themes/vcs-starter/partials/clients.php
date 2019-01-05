<!-- Happy clients section start -->
	<section id="clients" class="happy_clients">
		<!-- <div class="flex-container"> -->
			<div class=""><h3><?php the_field('hc_clients_title'); ?></h3>
						<h4><?php the_field('hc_clients_slogan'); ?></h4>
			</div>
			<div class="card-carousel">
			  
					<?php 
					if( have_rows('hc_clients_content_repeater') ):
					 	// loop through the rows of data
					    while ( have_rows('hc_clients_content_repeater') ) : the_row();
								$link = get_sub_field('hc_clients_content_link');
							   	//dump($link);
									if($link['target']){
							    		$target = 'target="'.$link['target'].'"';
							    	} else {
							    		$target = '';
							    	}
					    ?>
					    	<div class="my-card">	
							 	<div class="happy_clients_content">
									<div class="happy_clients_content talk-bubble tri-right border round btm-left-in">
											<h4><?php  the_sub_field('hc_clients_content_text'); ?></h4>
											<span><a href="<?php echo $link['url']; ?>" <?php echo $target; ?>>
											 <?php the_sub_field('hc_clients_content_name'); ?></a></span>
											<h5><?php  the_sub_field('hc_clients_content_country'); ?></h5>
									</div>
								</div>
							</div> <!--  class = my-card end -->
					<?php
					    endwhile;
					endif;
					?>			  
			</div>
	</section>