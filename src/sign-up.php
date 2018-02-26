<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Sign Up - Arkitu</title>
  <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
  <meta content="Arkitu" name="description">
  <meta content="arkitu" name="keywords">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" rel="stylesheet">
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
  <link href="style.css" rel="stylesheet">
  <link href="img/web logo1.png" rel="shortcut icon">
  <link href="img/web logo1.png" rel="apple-touch-icon">
  <script src="https://wchat.freshchat.com/js/widget.js">
  </script>
</head>
<body>
  <nav class="navbar navbar-toggleable-md navbar-light" style="background-color: #00D5C8;">
    <button class="navbar-toggler navbar-toggler-right" data-target="#navbarNav" data-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button> <a class="navbar-brand" href="index"><img height="35" src="img/arkitulogo.png"></a>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="user">For Users</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="vendor">For Vendors</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="live-map">Live Vendor Map</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="support">Support</a>
        </li>
      </ul>
      <ul class="nav navbar-nav float-xs-right">
        <li class="nav-item">
          <a class="nav-link" href="sign-in">Sign In</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="sign-up">Sign Up</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="container">
    <br>
    <div class="row">
      <div class="col-sm-2"></div>
      <div class="col-sm-4">
        <h4 class="fancy">Sign Up</h4>
        <hr class="mt-0">
        <form action="" method="post">
          <!--<div class="form-group">
              <input name="first_name" value="" placeholder="First Name" type="text" class="form-control" autofocus>
            </div>
            <div class="form-group">
              <input name="last_name" value="" placeholder="Last Name" type="text" class="form-control">
            </div>
            <div class="form-group">
              <select name="country" class="form-control">
                <option>Country</option>
                <option>Canada</option>
                <option>United States</option>
              </select>
            </div>-->
          <div class="form-group">
            <input autofocus="" class="form-control" name="email" placeholder="Email" type="email" value="">
          </div>
          <div class="form-group">
            <input class="form-control" name="password" placeholder="Password" type="password">
          </div><!--<div class="form-group">
              <input name="username" value="" placeholder="Username" type="text" class="form-control">
            </div>-->
          <div class="form-group">
            <div class="g-recaptcha" data-sitekey="6LcOJD0UAAAAACWG7OF97XKaMgTpnodHLMqrISy1"></div>
          </div>
          <div class="form-group">
            <label class="form-check-label"><input class="form-check-input" type="checkbox"> I agree to the <a href="terms">Terms of Use</a>.</label>
          </div>
          <div class="form-group">
            <input class="btn btn-primary" name="submit" type="submit" value="Sign Up">
          </div>
        </form><br>
        <br>
        <center>
          <h4 class="fancy">Already have an account?</h4>
        </center>
        <hr class="mt-0">
        <center>
          <a class="btn btn-primary" href="sign-in" role="button">Sign In</a>
        </center><br>
        <br>
        <br>
      </div>
      <div class="col-sm-4">
        <center>
          <div style="margin-left: 2em">
            <p><img class="img-circle" src="img/1.png" width="25"> <strong>Sign up for a free profile for your business!</strong></p><br>
            <p><img class="img-circle" src="img/2.png" width="25"> <strong>Enter all the information about your business including your location(s).</strong></p><br>
            <p><img class="img-circle" src="img/3.png" width="25"> <strong>Be prepared for all the <strong>NEW</strong> people that are going to be able to find you!</strong></p>
          </div>
        </center><br>
        <br>
        <br>
        <p style="font-family:serif; font-size: 30px; color: white"></p>
        <center>
          Questions? Check out our <a href="support.php">Support</a> page.
        </center>
        <p></p>
      </div>
    </div>
    <hr>
    <center>
      <footer>
        <p>&copy; 2018 Arkitu &middot; <a href="index">Home</a> &middot; <a href="user">User</a> &middot; <a href="vendor">Vendor</a> &middot; <a href="live-map">Live Vendor Map</a> &middot; <a href="about">About Us</a></p>
      </footer>
    </center>
  </div>
  <script src="//code.jquery.com/jquery-3.1.1.slim.min.js">
  </script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js">
  </script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js">
  </script>
  <script src="//www.google.com/recaptcha/api.js">
  </script>
  <script>
  window.fcWidget.init({
    token: "3e24bdb0-1429-4466-b00a-84b0e0378fda",
    host: "https://wchat.freshchat.com"
  });
  </script>
  <script>
  // Make sure fcWidget.init is included before setting these values

  // To set unique user id in your system when it is available
  window.fcWidget.setExternalId("john.doe1987");

  // To set user name
  window.fcWidget.user.setFirstName("John");

  // To set user email
  window.fcWidget.user.setEmail("john.doe@gmail.com");

  // To set user properties
  window.fcWidget.user.setProperties({
    plan: "Estate",                 // meta property 1
    status: "Active"                // meta property 2
  });
  </script>
</body>
</html>