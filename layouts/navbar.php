<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">

      <!-- Brand -->
      <a class="brand" href="index.php">Pinboard</a>
      
      <ul class="nav pull-right">
        <li>
        	<p class="navbar-btn">
            <!-- Triggers the log in modal -->
        		<a class="btn btn-primary" href="#logInModal" role="button" data-toggle="modal">Log In</a>
        	</p>
        </li>
      </ul>
      
  	</div>
  </div>
</div><!-- Navbar -->

<!-- Log In Modal -->
<div id="logInModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="logInModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></button>
    <h3 id="logInModalLabel">Log In</h3>
  </div>
  <div class="modal-body">
    <form class="form-inline modal-form" >
      <label>Email</label>
      <input type="text" class="input-medium" placeholder="Email">
      <label>Password</label>
      <input type="password" class="input-medium" placeholder="Password">
      <label class="checkbox">
        <input type="checkbox"> Remember me
      </label>
      <button type="submit" class="btn btn-primary">Log in</button>
    </form>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
  </div>
</div><!-- Log in Modal -->
