<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">

      <!-- Brand -->
      <a class="brand" href="index.php">Pinboard</a>

      <ul class="nav pull-right">
        <li class="<?php echo $title == "Home" ? "active" : ""; ?>" ><a href="index.php">Home</a></li>
        <li class="<?php echo $title == "User" ? "active" : ""; ?>"><a href="User.php">User</a></li>
        <li>
          <p class="navbar-btn">
            <!-- Triggers the log in modal -->
            <a class="btn btn-primary" href="#pinItModal" role="button" data-toggle="modal">Pin Image</a>
          </p>
        </li>
        <li>
        	<p class="navbar-btn">
            <!-- Triggers the log in modal -->
        		<a class="btn btn-danger" href="#">Sign out</a>
        	</p>
        </li>
      </ul>
      
  	</div>
  </div>
</div><!-- Navbar -->

<!-- Pin It Modal -->
<div id="pinItModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="pinItModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></button>
    <h3 id="pinItModalLabel">Pin Image</h3>
  </div>
  <div class="modal-body">
    <form class="form-inline modal-form">
      <input type="text" class="span6" placeholder="Paste image url here">
      <button type="submit" class="btn btn-primary">Pin It</button>
    </form>
    <hr>
    <h4>How to Pin images from another website?</h4>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
  </div>
</div><!-- Pin It Modal -->
