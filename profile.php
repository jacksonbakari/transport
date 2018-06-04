<?php include_once 'upload.php'; ?>
<?php include_once 'prof.php'; ?>

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
  <div class="row">
    <div class="col col-sm 1 bg-white">
       <center> <h3>My status</h3></center>
   <div class="card-body">
     

   </div>
    </div>&nbsp; &nbsp;


    <div class="col col-sm 10 bg-white">
      <center> <h3>My Profile</h3></center>
   <div class="card-body">
     <?php echo"FIRST NAME:".$Frstname;?> <br>
     <?php echo "LAST NAME:". $Lstname ; ?><br>
    <?php echo "Email:    " .$Emaill ; ?><br>
     <?php echo "ADDRESS: " .$Addres ; ?><br>
     <?php echo "COUNTRY: " .$Countr; ?><br>
     <?php echo "USERN NAME:" .$Usernm ; ?><br>
     <?php echo " AGE:  ". $Agee ; ?><br><br><br><br>

      <button class="btn btn-outline-success ">Edit my Profile</button>
  </div>
 </div>&nbsp;&nbsp;

    <div class="col col-sm 8 bg-white">
      <center> <h3>Profile Picture</h3></center>
      <div class="card-body">
        <div class="card-body" style="height:280px">
         <?php
           if ( $target_dir  ) {
        echo $img;
           }

          ?>
        </div>
     
         Select image to upload:
   <form action="upload.php" method="POST" enctype="multipart/form-data">
   
    <input type="file" name="fileToUpload" id="fileToUpload" class="btn btn-outline-success">Choose Photo</input>
        <button  type="submit" value="UploadImage" name="submit"
          class="btn btn-outline-success ">Upload Picture</button>
      </div>
    </div>
  </div>
   
 </div><br>

<div class="container">
 <a href="home.php"><button name="Exit" class="btn btn-outline-light btn-lg">Exit</button></a>

</div>
<div class="us_share"><i class="us-icon-stumble"></i></div>

<br><br><br><br>


</body>
</html>