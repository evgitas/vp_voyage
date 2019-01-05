<?php get_header(); ?>
		<div id="archive">
			<div class="widthcontainer">
				<div class="row">
					<?php
						if(have_posts()):
							while (have_posts()):
								the_post();
					?>
					<div class="col-xs-12 col-md-4">
						<div class="fh5co-blog">
							<a href="<?php the_permalink(); ?>" class="blog-bg" style="background-image: url(<?php the_post_thumbnail_url('medium_large'); ?>);"></a>
							<div class="blog-text">
								<h4><?php echo get_the_date('M. jS Y H:i'); ?></h4>
								<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
								<h5><?php the_excerpt(); ?></h5>
								<div>
									<h5><a href="<?php the_permalink(); ?>">
									<?php _e('Read More', 'vcs-starter'); ?>
									</a></h5>
								</div>
							</div> 
						</div>
					</div>

					<?php 
						endwhile;
					endif;
					?>

				</div>
					<div class="rows center">
						<div class="col-xs-12">
							<h5><?php echo paginate_links(); ?></h5>
						</div>
					</div>
			</div>
		</div>
<?php get_footer(); ?>