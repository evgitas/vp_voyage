<?php

/* Template Name: Member Register */

get_header();

?>

<!-- Start Point -->
		<div id="customer">
			<div class="widthcontainer">
				<div class="row center">
					<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
						<h4>Customer Login</h4>
					</div>
				</div>
				<div class="row justify_center">
					<div class="col-xs-12 col-md-4">
						<h3>Login Form</h3>
						<ul class="contact-info">

						 <div class="container">
						    <h1>Register</h1>
						    <p>Please fill in this form to create an account.</p>
						    <hr>
						    <label for="email"><b>Email</b></label>
						    <input type="text" placeholder="Enter Email" name="email" required>
						    <label for="psw"><b>Password</b></label>
						    <input type="password" placeholder="Enter Password" name="psw" required>
						    <label for="psw-repeat"><b>Repeat Password</b></label>
						    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
						    <hr>
						    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
						    <button type="submit" class="registerbtn">Register</button>
						  </div>

						  <div class="container signin">
						    <p>Already have an account? <a href="#">Sign in</a>.</p>
						  </div>
						</form>





							
							<li><?php  echo "1"; ?></li>
							<li><?php  echo "2"; ?></li>
							<li><?php  echo "3"; ?></li>
						</ul>
					</div>
				</div>
			</div>
		</div>

<?php get_footer(); ?>