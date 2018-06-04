<!DOCTYPE html>
<html>
<head>
	<title>Transgood</title>
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="stylesheet" type="text/css" href="assets/bootstrap/dist/css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="assets\fontawesome\web-fonts-with-css\css\fontawesome-all.min.css">

</head>
<body style="background:black;">
	<div class="container">
	   <div class="navbar navbar-expand-lg navbar-light bg-success">

	     <div class="navbar-collapse">
		  <ul class="navbar-nav mr-auto">
		  	<li class="nav-item active">
          	<div class="jumbotron" style="background-image: url(image/logo.jpg);background-size: cover;">
                <h1 style="color:green">Trans<em style="color:blue">G</em></h1>
                </div>
                </li>

                <li class="nav-item">
                <div class="jumbotron bg-success"> 
              <h1><em>Tries the chance to enjoy the journey</em></h1>
          </div>
          </li>
      </ul>
	

      </div>
   </div>
 </div><br>

 <form class="form" action="include/signup.php " method="POST">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card-group">
            <div class="card p-4">
              <div class="card-body">
                <h1>Login</h1>
                <p class="text-muted">Sign In to your account:</p>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="icon-user"></i>
                    </span>
                  </div>
                  <input type="text" name="name" class="form-control" placeholder="Username:" required="" pattern="\b[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}\b">
                </div>
                <div class="input-group mb-4">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="icon-lock"></i>
                    </span>
                  </div>
                  <input type="password" name="pass" class="form-control" placeholder="Password:" required="">
                </div>
                <div class="row">
                  <div class="col-12">
                    <button type="submit" name="log" class="btn btn-success px-4">Login</button>
                    <button class="btn btn-success px-4" style="width: 80px;">Exit</button>
                  </div><br>
                  <div class="row">
                  <div class="col-12 text-right">
                   <center> <button type="button" class="btn btn-link px-2">Forgot password?</button></center>
                  </div>
                </div>
                </div>
              </div>
            </div>
            <div class="card text-white bg-success py-5 d-md-down-none" style="width:44%">
              <div class="card-body text-center">
                <div>
                  <h2>Sign up</h2>
                  <p>Your advice to make sure that you have an account to this special site
                  before using .</p>
                  <p><a href="welcome.php" target="new" style="color:teal">More information</a></p>
                  <a href="reg.php" target="new1"><button type="button" class="btn btn-outline-light btn-lg">Register Now!</button></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</form>

 <script type="text/javascript" src="assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="assets/js/popper.min.js"></script>
  <script type="text/javascript" src="assets/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>