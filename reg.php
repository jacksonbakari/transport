<?php include_once 'prof.php';?>
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



 
<div class="container">
   <center>
   <div class="jumbotron">
     <h2>
       Register new account
     </h2>
   </div>
 </center>
</div>

<div class="card-body "> 

  <form class="form-horizontal" action="profile.php" method="POST">
    <div class="row">
        <div class="col-md-6 offset-3 bg-success"><br><br>
      <input  class="form-control" type="text" name="Fname" placeholder="First name:" style="font-size: 24px;color:black" required="fill here"><br>
      <input  class="form-control" type="text" name="lname" placeholder="Last name:" style="font-size: 24px;color:black" required="fill here"><br>
      <input  class="form-control" type="text" name="username" placeholder="User name:" style="font-size: 24px;color:black" required="fill here"><br>
      <input  class="form-control" type="email" name="email" placeholder="Email:" style="font-size: 24px;color:black" required="fill here"><br>
      <input  class="form-control" type="text" name="Phone" placeholder="Phone:" style="font-size: 24px;color:black" required="fill here"><br>

  <input  class="form-control" type="text" name="P_address" placeholder="Physical Address:  eg P.O Box 10 San Fransica" style="font-size: 24px;color:black" required="fill here"><br>

     
  <div class="dropdown">
  <select name="country" id="country"  class="form-control" style="width: 200px;">
    <option>Select country</option>
    <option>TANZANIA</option>
    <option>KENYA</option>
    <option>UGANDA</option>
    <option>BURUNDI</option>
    <option>RWANDA</option>
    <option>CONGO</option>
</select>
</div></p><br>
<p style="color:white">DOB:&nbsp;&nbsp;<input type="date" name="DOB"></p><br><br>
      <input class="form-control" type="password" name="password" placeholder="Password:" style="width:200px;"><br>
     
       <input class="form-control" type="password" name="password" placeholder="Confirm Password:" style="width:200px;"><br><br>
       <button class="btn btn-outline-light btn-lg" name="submit" type="submit">Submit</button>&nbsp;&nbsp;&nbsp;&nbsp;
       <button class="btn btn-outline-light btn-lg" type="reset">Cancel</button><br><br>
      </form>
      </div>
    </div>
  </div>

 






  <script type="text/javascript" src="assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="assets/js/popper.min.js"></script>
  <script type="text/javascript" src="assets/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>