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
	<!-- landing top start -->
	<section class="top">
		<div>
			<div class="header-top">
		      <div class="widthcontainer">
		        <form action="">
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
							<li><a href="#">Agent Login</a></li>
							<li><a href="#">Custome Login</a></li>
							<li><a href="#">Not a Member? <span> Register</span></a></li>
							<li><a href="tel://3704567920">Call Us Now: +3704567920</a></li>
						</ul>
					</div>
					<div>
							<ul class="flex-container">
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
	</section>
	<!-- navigation start -->
<!-- 	<section class="navigation">
		<div class="container">
			<div class="flex-container">
				<div class="logo">V<span>O</span>YAGE</div>
				<div class="flex-container main_navigation">
					<div class="">
						<ul class="flex-container">                        
						<li><a href="#">Home</a></li>
						<li><a href="#offers">Special</a></li>
						<li><a href="#holiday_type">Holidays</a></li>
						<li><a href="#contacs">Contacts</a></li>
						<li><a href="#clients">Clients</a></li>
						<li><a href="#">Blog</a></li>
						</ul>
					</div>
					<div class=""><a href="#" id="search-icon"><i class="fas fa-search circle"></i></a></div>
				</div>
			</div>
		</div>
	</section> -->
	<!-- Navigation end -->

	<!-- Navigation test -->
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
		<!-- Navigatio test end -->

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
