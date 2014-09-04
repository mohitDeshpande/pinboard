<!DOCTYPE html>
<html>

	<?php
	
	$title = "Sign Up";
	require 'layouts/head.php';	

	?>

	<body>
		<?php include 'layouts/navbar.php'; ?>

		<div class="container">

			<!-- Sign-up Hero-unit -->
			<div class="hero-unit">
				
				<h1 class="text-center">Sign Up for Pinboard</h1>
				<form class="form-horizontal">
  				<div class="control-group">
    				<label class="control-label" for="inputName">Name</label>
    				<div class="controls">
      				<input type="text" id="inputName" placeholder="Full Name
      				">
    				</div>
  				</div>
  				<div class="control-group">
    				<label class="control-label" for="email">Email</label>
    				<div class="controls">
      				<input type="text" id="email" placeholder="Email">
    				  <span class="text-error" id="emailErr">A valid email address is required</span>
            </div>
  				</div>
  				<div class="control-group">
    				<label class="control-label" for="password">Password</label>
    				<div class="controls">
      				<input type="password" id="password" placeholder="Password">
    				</div>
  				</div>
  				<div class="control-group">
    				<label class="control-label" for="confirmPassword">Confirm Password</label>
    				<div class="controls">
      				<input type="password" id="confirmPassword" placeholder="Confirm Password">
    				</div>
  				</div>
  				<div class="control-group">
    				<div class="controls">
      				<button type="submit" class="btn">Sign Up</button>
    				</div>
  				</div>
				</form>
			
			</div><!-- Sign-up Hero-unit -->

		</div><!-- container -->

		<?php include 'layouts/footer.php'; ?>
	</body>

</html>