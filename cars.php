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


<div class="container bg-success" style="height: 90px">

<!-- weka matokeo hapa -->
<h1>Gari la kwanza ni saa  <?php
      echo date("h:i:sa");
     ?></h1>

</div> <br>





<div class="container bg-success" style="height: 250px">
<div class="row">
  <div class="col-sm 12">
    <br>
  <div class="jumbotron">
    <center>
      <i class="far fa-calendar-alt fa-3x" style="color: white"></i>
     
    </center>
  </div>
    </div>
</div>
</div><br>

<div class="container">
<div class="row">
  <div class="col-sm 4 bg-success">
          <center>
                  <h3 style="color: white">Depature
                  <i class="fa fa-long-arrow-alt-up fa-2x"></i></h3>
                  <?php
echo "Today" . date("Y/m/d") . "<br>";
echo "Tomorrow " . date("Y.m.d") . "<br>";
echo "Tomorrow " . date("Y-m-d") . "<br>";
echo "Tomorrow  " . date("l");
?>
      </center>
   <!--  <div class="jumbotron"> 

    </div> -->
 
  </div>&nbsp;
    <div class="col-sm 4 bg-success">
  <h3 style="color: white">Journey Duration</h3>
  
  </div>&nbsp;
  <div class="col-sm 4 bg-success">
 <h3 style="color: white">Price</h3>
    </div>
</div>
</div>


<div class="container" style="height: 250px">


</div>






 <script type="text/javascript" src="assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="assets/js/popper.min.js"></script>
  <script type="text/javascript" src="assets/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>