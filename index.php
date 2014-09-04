<!DOCTYPE html>
<html>

	<?php
	
	$title = "Home";
	require 'layouts/head.php';	

	?>

	<body>
		<?php include 'layouts/logged_in_navbar.php'; ?>

		<div class="container">

			<!-- Hero-Unit -->
			<div class="hero-unit">
  			<h1>Pinboard</h1>
  			<p>A visual-discovery tool</p>
  			<p>
    			Sign up now!
    			<a class="btn btn-primary btn-large" href="signup.php">
      			Sign Up
    			</a>
  			</p>
			</div><!-- Hero-Unit -->

		</div><!-- container -->

		<?php include 'layouts/footer.php'; ?>
	</body>

</html>