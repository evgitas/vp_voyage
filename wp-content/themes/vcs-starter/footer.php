<!-- FOOTER start -->

<footer id="contacs" class="footer_on">
		<div>
			<div class="widthcontainer">
					<div class="row">
						<div class="col-12 col-md-6 col-lg-3 ">
							<div class="footer_content">
								<div><h3>Newsletter</h3></div>
								<div><h4>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore.</h4>
								<input type="text" id="newsletter" name="newletter" value="" placeholder="Subscribes...">
								<span class="search_content btn">Go</span></div>
							</div>
						</div>
						<div class="col-12 col-md-6 col-lg-3 ">
							<div class="footer_content">
								<div><h3>Latest News</h3></div>
								<?php 
									//kuriame uzklausos parametrus
										$query = [
											'cat' => get_field('news_category'),
											'posts_per_page' => get_field('limit')
										];
										//vykdome uzklausa i DB pagal nurodytus parametrus
										$result = new WP_Query($query);
										//dump($result);
										$i=0;
										if ($result->have_posts()):
											while ($result->have_posts()):
												$result->the_post();
												?>
												<div class="latest_news_content">
													<div class="flex_container_latest_news">
														<div><img src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="News"></div>
														<div class="flex_container_latest_news_msg">
															<a href="<?php the_permalink(); ?>">
																<h4><?php the_title(); ?>
															</a><span><br><?php echo get_the_date('M. jS Y H:i'); ?></span></h4>
															<h4><?php echo get_the_category_list(' '); ?></h4>
														
														</div>
													</div>
												</div>
								<?php
								//break;//nutraukiame cikla po pirmos iteracijos nes norime isvesti tik viena pagrindine naujiena
								$i++;
								if ($i>1){
									break;
								}
								endwhile; // end while
								endif; // end if
								wp_reset_postdata();
								?>
							</div>
						</div>
						<div class="col-12 col-md-6 col-lg-3 ">
							<div class="footer_content">
								<div><h3>Tags</h3></div>
								<div class="">
										<ul class="flex-container_tags wrap">

										<?php 
											if(have_rows('t_tag_repeater', 'option')):
											    while (have_rows('t_tag_repeater', 'option')) : the_row();
											    	$link = get_sub_field('link');
											    	?>
										  				<li class="flex-item">
										  					<a class="tags" href="<?php echo $link['url']; ?>">
										  						<?php  the_sub_field('t_new_tag'); ?></a></li>
													<?php 
											    endwhile;
											endif;
										?>
										</ul>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6 col-lg-3 ">
							<div class="footer_content">
								<div><h3>Address</h3></div>
								<div class=""><h4><?php  the_field('ai_description', 'option'); ?> 
									<span>E-mail:</span><a href="mailto:<?php  the_field('io_email', 'option'); ?>"> <?php  the_field('io_email', 'option'); ?></h4></a>
									<ul class="social flex-container">
										<?php 
											if(have_rows('so_social_menu_repeater', 'option')):
											    while (have_rows('so_social_menu_repeater', 'option')) : the_row();
											    	$link = get_sub_field('link');
											    	if($link['target']){
											    		$target = 'target="'.$link['target'].'"';
											    	} else {
											    		$target = '';
											    	}
											    	?>
														<li>
															<a href="<?php echo $link['url']; ?>" <?php echo $target; ?>>
																<i class="<?php  the_sub_field('icon'); ?>"></i>
															</a>
														</li>
													<?php 
											    endwhile;
											endif;
										?>
								</ul>
								</div>
							</div>
						</div>
					</div>	
			<!-- </div> -->
		</div>
		<div class="footer_top_border">
			<div class="container">
				<div class="footer_copyright"><h4>Copyright @voyage. All Right Reserved</h4></div>
				<div class="footer_triangle_to_top"><a href="#header_top"><i class="triangle"></i></a></div>
			</div>
		</div>
	</footer>
<!-- FOOTER stop -->
	
	<?php  wp_footer(); ?>
	</body>
</html>

