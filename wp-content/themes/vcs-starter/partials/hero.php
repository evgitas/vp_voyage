<!-- Hero picture with search start -->
	<section class="landing_picture">
		<div>
			<div class="flex-container">
				<div class="slogan_container">
					<div class="widthcontainer">
						<div class="flex-container2">
							<div>
								<h1><?php  the_field('hs_slogan'); ?></h1>
								<h2><?php  the_field('hs_slogan_description'); ?></h2>
							</div>
							<div>
								<?php 
								//galima su loop'u ir repeater'iu, bet cia taip reikia :)
								$button_one = get_field('hs_button_one_link');
								$button_two = get_field('hs_button_two_link');
									if($button_one['target']){
							    		$target_one = 'target="'.$button_one['target'].'"';
							    	} else {
							    		$target_one = '';
							    	}

							    	if($button_two['target']){
							    		$target_two = 'target="'.$button_two['target'].'"';
							    	} else {
							    		$target_two = '';
							    	}
								?>

								<a class="btn" href="<?php echo $button_one['url']; ?>" <?php echo $target_one; ?>><?php  the_field('hs_button_one'); ?></a>
								<a class="btn" href="<?php echo $button_two['url']; ?>" <?php echo $target_two; ?>><?php  the_field('hs_button_two'); ?></a>
							</div>
						</div>
					</div>
				</div>
				<div class="search_container">
					<div class="widthcontainer">
						<form action="">
						<div class="flex-container4">
							<div class="search_content h7">FIND YOUR <br><span>HOLYDAYS</span></div>
							<div class="search_content h7">Where</div>
							<div class="search_content"><input type="text" id="find" name="find" value="" placeholder="destination"></div>
							<div class="search_content h7">When</div>
							<div class="search_content"><input type="date" id="date" name="date" value="" placeholder="select date"></div>
							<div class="search_content"><button type="submit"  class="submit_btn">Search</button></div>
						</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Landing picture with search end -->