<!-- Holiday type start -->
<section id="holiday_type" class="holiday_type">
		<div class="holiday_type_container">
			<div class="widthcontainer">
				<div><h3>Holidays Type</h3>
					 <h4>get explore your dream to travel the world!</h4>
				</div>
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
			</div>
		</div>
	</section>
<!-- Holiday type end -->