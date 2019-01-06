<!-- Holiday type start -->
<section id="holiday_type" class="holiday_type">
		<div class="holiday_type_container">
			<div class="widthcontainer">
				<div><h3>Holidays Type</h3><h4>get explore your dream to travel the world!</h4></div>
				<!-- <div class="widthcontainer"> -->
					<div class="row">
						<div class="col-6 col-md-4 col-lg-2 center">
							<div class="holiday_type_content"><a href="#"><i class="fas fa-ship circle"></i><h4>Cruise</h4></a></div>
						</div>
						<div class="col-6 col-md-4 col-lg-2 center">
							<div class="holiday_type_content"><a href="#"><i class="fas fa-city circle"></i><h4>City Breaks</h4></a></div>
						</div>
						<div class="col-6 col-md-4 col-lg-2 center">
							<div class="holiday_type_content"><a href="#"><i class="fas fa-kiss-wink-heart circle"></i><h4>Honeymoon</h4></a></div>
						</div>
						<div class="col-6 col-md-4 col-lg-2 center">
							<div class="holiday_type_content"><a href="#"><i class="far fa-compass circle"></i><h4>Adventure</h4></a></div>
						</div>
						<div class="col-6 col-md-4 col-lg-2 center">
							<div class="holiday_type_content"><a href="#"><i class="fas fa-car circle"></i><h4>Safari</h4></a></div>
						</div>
						<div class="col-6 col-md-4 col-lg-2 center">
							<div class="holiday_type_content"><a href="#"><i class="fas fa-umbrella-beach circle"></i><h4>Beach</h4></a></div>
						</div>
					</div>			
				<!-- </div> -->
			</div>
		</div>
	</section>
<!-- Holiday type end -->


<!-- Holiday type start -->
<section id="holiday_type" class="holiday_type">
		<div class="holiday_type_container">
			<div class="widthcontainer">
				<div><h3>Holidays Type</h3><h4>get explore your dream to travel the world!</h4></div>
				<!-- <div class="widthcontainer"> -->
					<div class="row">
							<?php 
								if(have_rows('ho_type_repeater')):
								    while (have_rows('ho_type_repeater')) : the_row();
								    	$link = get_sub_field('link');
								    	if($link['target']){
								    		$target = 'target="'.$link['target'].'"';
								    	} else {
								    		$target = '';
								    	}
								    	?>
											<div class="col-6 col-md-4 col-lg-2 center">
												<div class="holiday_type_content"><a href="<?php echo $link['url']; ?>"><?php  the_sub_field('icon'); ?><h4><?php  the_sub_field('title'); ?></h4></a></div>
											</div>

										<?php 
								    endwhile;
								endif;
							?>

					</div>			
				<!-- </div> -->
			</div>
		</div>
	</section>
<!-- Holiday type end -->