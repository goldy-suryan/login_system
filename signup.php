<?php
include_once "header.php";
?>
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="page-header">
          <h2>Signup</h2>
        </div>
        <form action="db/db.signup.php" method="post" class="form-horizontal">

          <div class="form-group">
            <label class="control-label col-md-3" for="first">First Name:</label>
            <div class="col-md-9">
              <input type="text" class="form-control" id="first" placeholder="First Name" name="first">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3" for="last">Last Name:</label>
            <div class="col-md-9">
              <input type="text" class="form-control" id="last" placeholder="Last Name" name="last">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3" for="username">Username:</label>
            <div class="col-md-9">
              <input type="text" class="form-control" id="username" placeholder="Username" name="username">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3" for="email">Email:</label>
            <div class="col-md-9">
              <input type="email" class="form-control" id="email" placeholder="Email" name="email">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3" for="password">Password:</label>
            <div class="col-md-9">
              <input type="password" class="form-control" id="pwd" placeholder="password" name="password">
            </div>
          </div>
          <button type="submit" name="submit" class="btn btn-default pull-right">Submit</button>
      </div>

      </form>
    </div>
  </div>
  </div>

<?php
include_once "footer.php";
?>