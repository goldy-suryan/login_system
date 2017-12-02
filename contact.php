<?php
include_once "header.php";
?>

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <img src="https://placeholdit.co//i/1500x500?bg=cccccc" class="img-responsive">
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="text-center">Get in touch with us</h2>
      </div>
      <div class="col-md-12">
        <h4 class="text-center">Ask expert how can we help</h4>
      </div>
      <div class="col-md-8 col-md-offset-2">
        <form action="db/db.contact.php" method="POST" id="contact">
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" name="product" class="form-control" placeholder="*Select a product">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" name="username" class="form-control" placeholder="*Username">
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <textarea rows="10" name="query" class="form-control" placeholder="*How may I help you?"></textarea>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" name="firstname" class="form-control" placeholder="*First Name">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" name="lastname" class="form-control" placeholder="*Last Name">
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <input type="text" name="address" class="form-control" placeholder="*Address">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input type="email" name="email" class="form-control" placeholder="*Email">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" name="phone" class="form-control" placeholder="*phone">
            </div>
          </div>
          <p><small class="pull-left">* fields are mandatory</small></p>
          <button type="submit" name="submit" class="btn btn-lg btn-success pull-right">Submit</button>
        </form>
      </div>
    </div>
  </div>

<?php
    include_once "footer.php";
?>