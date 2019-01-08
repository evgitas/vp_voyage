<?php

/* Template Name: Member Register */

get_header();

?>
<!-- Start Member Register -->
		<div id="member_register">
			<div class="widthcontainer">
				<div class="row justify_center">
					<div class="col-xs-12 col-md-6">
						    <h4>Please fill in this form to create an account.</h4>
						    <hr>
						    <form action="#">
						    <h4><label for="name"><b>Name</b></label>
						    <input type="text" placeholder="Enter Your Name" name="name" required></h4>	
						    <h4><label for="surname"><b>Surname</b></label>
						    <input type="text" placeholder="Enter Your Surename" name="surname" required></h4>	
						    <h4><label for="email"><b>Email</b></label>
						    <input type="text" placeholder="Enter Email" name="email" required></h4>
						    <h4><label for="psw"><b>Password</b></label>
						    <input type="password" placeholder="Enter Password" name="psw" required></h4>
						    <h4><label for="psw-repeat"><b>Repeat Password</b></label>
						    <input type="password" placeholder="Repeat Password" name="psw-repeat" required></h4>
						    <h4>By creating an account you agree to our <a href="<?php bloginfo('url'); echo '/privacy-policy/'; ?>">Terms & Privacy</a>.</h4>
						    <h4><button type="submit">Register</button></h4>
						  </form>
					</div>
				</div>
			</div>
		</div>
<!-- End Member Register -->
<?php get_footer(); ?>