<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
	<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php wp_title(); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php  wp_head(); ?>
</head>
<body>
	<!-- header top start -->
	<section id="header_top" class="top">
		<div>
			<div class="header-top">
		      <div class="widthcontainer">
		        <form action="#">
		          <div id="search">
		          <input type="text" placeholder="Enter search keyword here ......" name="s" id="top_search" style="display: inline-block;">
		          <button type="submit">
		            <i class="fa fa-search"></i>
		          </button>
		        </div>
		        </form>
		      </div>
		    </div>
			<div class="widthcontainer">
				<div class="flex-container flex_wraping">
					<div>
						<ul class="flex-container">                        
							<li><a href="<?php bloginfo('url'); echo '/customer-login/'; ?>">Agent Login</a></li>
							<li><a href="<?php bloginfo('url'); echo '/customer-login/'; ?>">Customer Login</a></li>
							<li><a href="<?php bloginfo('url'); echo '/member-register/'; ?>">Not a Member? <span> Register</span></a></li>
							<li><a href="tel://<?php  the_field('io_phone', 'option'); ?>">Call Us Now: <?php  the_field('io_phone', 'option'); ?></a></li>
						</ul>
					</div>
					<div>
						<ul class="flex-container">
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
	</section>
	<!-- navigation start -->
	<header class="header">
		<div class="widthcontainer">
			<div class="flex-container">
				<div>
				  <a href="<?php bloginfo('url'); ?>" class="logo">V<span>O</span>YAGE</a>
				</div>
				 <div class="flex-container">
				 	<div>
						  <input class="menu-btn" type="checkbox" id="menu-btn" />
						  <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
							<?php
							$args = [
								'manu_class' => 'ul-klase kita-klase',
								'container' => false,
								'theme_location' => 'primary-navigation'
							];
							wp_nav_menu($args);
							?>  
					</div>
					<div>
						<a href="#" id="search-icon"><i class="fas fa-search circle"></i></a>
					</div>
				 </div>
			</div>
		</div>
	</header>
	<!-- Navigation  end -->

			<?php
		if(is_front_page()){
			//esame tituliniame puslapyje
			get_template_part('partials/homepage-hero');
		}else if (is_archive()){
			//jei archyvas
			get_template_part('partials/archive-hero');
		}else{
			//esame vidiniame puslapyje
			get_template_part('partials/inner-hero');
		}
