<?php

/* Template Name: Customer Login */

get_header();

?>
<!-- Start Customer Login -->
		<div id="customer_login">
			<div class="widthcontainer">
				<div class="row justify_center">
					<div class="col-xs-12 col-md-4">
						 <h4>Please enter you credencials</h4>
						    <hr>
						    <form action="action_page.php">	
						    <h4><label for="email"><b>Email</b></label>
						    <input type="text" placeholder="Enter Email" name="email" required></h4>
						    <h4><label for="psw"><b>Password</b></label>
						    <input type="password" placeholder="Enter Password" name="psw" required></h4>
						    <h4><button type="submit" class="btnn">Login</button></h4>
						  </form>
					</div>
				</div>
			</div>
		</div>
<!-- End Customer Login -->
<?php get_footer(); ?>