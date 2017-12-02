<?php
  session_start();
  include_once "functions.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <title>php</title>
</head>

<body>

  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">PHP PROJECT</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li <?=selectClass("index")?>><a href="index.php">Home</a></li>
          <li <?=selectClass("about")?>><a href="about.php">About</a></li>
          <li <?=selectClass("blog")?>><a href="blog.php">Blog</a></li>
          <li <?=selectClass("contact")?>><a href="contact.php">Contact Us</a></li>
        </ul>
        <?php
          if(isset($_SESSION["username"])) {
            echo '<form action="db/db.logout.php" method="POST" id="logout">
                    <button type="submit" name="submit" class="btn btn-default"><span class="glyphicon glyphicon-log-out"></span> Logout</button>
                  </form>';
          } else {
            echo '<ul class="nav navbar-nav navbar-right">
                    <li '.selectClass("signup").'><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li '.selectClass("login").'><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                  </ul>';
          }
        ?>
      </div>
    </div>
  </nav>