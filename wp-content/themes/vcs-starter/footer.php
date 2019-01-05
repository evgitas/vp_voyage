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
										  <li class="flex-item"><a class="tags" href="#">Agent Login</a></li>
										  <li class="flex-item"><a class="tags" href="#">Customer Login</a></li>
										  <li class="flex-item"><a class="tags" href="#">Not a Member?</a></li>
										  <li class="flex-item"><a class="tags" href="#">Contact</a></li>
										  <li class="flex-item"><a class="tags" href="#">New Horozons</a></li>
										  <li class="flex-item"><a class="tags" href="#">Lanscape</a></li>
										  <li class="flex-item"><a class="tags" href="#">Tags</a></li>
										  <li class="flex-item"><a class="tags" href="#">Nice</a></li>
										  <li class="flex-item"><a class="tags" href="#">Some</a></li>
										  <li class="flex-item"><a class="tags" href="#">Portrait</a></li>
										</ul>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6 col-lg-3 ">
							<div class="footer_content">
								<div><h3>Address</h3></div>
								<div class=""><h4>DieSachbearbeiter Schönhauser Allee 167c,10435 Berlin Germany 
									<span>E-mail:</span><a href="mailto:info@yoursite.com"> moin@generator.de</h4></a>
									<ul class="social flex-container">
									<li>
										<a href="http://facebook.com" target="_blank">
											<i class="fab fa-facebook-f"></i>
										</a>
									</li>
									<li>
										<a href="http://pinterest.com" target="_blank">
											<i class="fab fa-pinterest-p"></i>
										</a>
									</li>
									<li>
										<a href="http://twitter.com" target="_blank">
											<i class="fab fa-twitter"></i>
										</a>
									</li>
									<li>
										<a href="http://linkedin.com" target="_blank">
											<i class="fab fa-linkedin-in"></i>
										</a>
									</li>
								</ul>
								</div>
							</div>
						</div>
					</div>	
			<!-- </div> -->
		</div>
		<div class="footer_nav_top_border">
			<div class="container">
				<div>
					<div class="footer_nav">
						<ul class="flex-container">                        
						<li><a href="#">Home</a></li>
						<li><a href="#">Destinations</a></li>
						<li><a href="#">Cruises</a></li>
						<li><a href="#">Special</a></li>
						<li><a href="#">Holidays</a></li>
						<li><a href="#">Blog</a></li>
						</ul>
					</div>
				</div>
				<div class="footer_copyright"><h4>Copyright @voyage. All Right Reserved</h4></div>
				<div class="footer_triangle_to_top"><a href="#" target="_top"><i class="triangle"></i></a></div>
			</div>
		</div>
	</footer>


<!-- FOOTER stop -->

<!-- 	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>
	 -->
	
	<?php  wp_footer(); ?>
	</body>
</html>

