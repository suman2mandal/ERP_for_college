<?php include('Header.php');?>

<form class="row g-3" method="POST" action="login.php">
    <legend>Log In</legend>
  <div class="col-md-6">
    <label for="username" class="form-label">Username:</label>
    <input type="text" name="username" class="form-control" id="username">
  </div>
  <div class="col-md-6">
    <label for="password" class="form-label">Password:</label>
    <input type="password"  name="password" class="form-control" id="password">
  </div>

  <div class="col-12">
    <button type="submit" class="btn btn-primary" value="login">Sign in</button>
  </div>
</form>


<?php include('Footer.php');?>