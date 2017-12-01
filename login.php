<?php
include "header.php";
?>
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="page-header">
          <h2>Login</h2>
        </div>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" class="form-horizontal">
          <div class="form-group">
            <label class="control-label col-md-3" for="username">Username / Email:</label>
            <div class="col-md-9">
              <input type="text" class="form-control" id="username" placeholder="Username" name="username">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3" for="password">Password:</label>
            <div class="col-md-9">
              <input type="text" class="form-control" id="pwd" placeholder="password" name="password">
            </div>
          </div>
          <button type="submit" name="submit" class="btn btn-default pull-right">Submit</button>
          <button type="reset" name="reset" class="btn btn-danger pull-right">Cancel</button>
      </div>

      </form>
    </div>
  </div>
  </div>

<?php
include "footer.php";
?>