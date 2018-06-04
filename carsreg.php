<?php include 'common.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Transgood</title>
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="stylesheet" type="text/css" href="assets/bootstrap/dist/css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="assets\fontawesome\web-fonts-with-css\css\fontawesome-all.min.css">
</head>
<body  style="background:black;">
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
<?php 

$pwd_mismatch='';
$success='';
$ex='';
if (isset($_POST['submit'])) {
  $cname=$_POST['Cname'];
  $cap=$_POST['capasity'];
  $cno=$_POST['carno'];
  $ctyp=$_POST['Ctyep'];
  $cdep=$_POST['deptime'];
  $cdvn=$_POST['Dname'];
  $cnumber=$_POST['Dnumber'];
  $contr=$_POST['country'];
  $start=$_POST['from'];
  $end=$_POST['to'];

  $sql="INSERT INTO `cars`(`car_name`, `route_from`, `route_to`, `dep_time`, `capacity`, `car_no`, `type`) VALUES ('$cname','$start','$end','$cdep','$cap','$cno','$ctyp')";

  $result= mysqli_query($conn,$sql);

//           $select="SELECT*FROM cars WHERE car_name=$cname AND car_no=$cno";
//           $result1=mysqli_query($conn,$select);
//           $numb=mysqli_num_rows($result1);
//           if ($numb>0) 
//           {
//           $ex="user exit";
//           }

//           else
//           {
//             if ($result) {
//             $success="Registered";
//           }

// }
}
?>









<div class="container">
   <center>
   <div class="jumbotron">
     <h2>
       Recording Car info into database.
     </h2>
     <?php if ($success): ?>
          <div class="alert alert-success">
            <?php echo $success; ?>
          </div>
          <?php else:
           echo $ex; 

            ?>
        <?php endif ?>
   </div>
 </center>
</div>


<div class="container">
  <div class="card-body "> 






   <form class="form-horizontal" action=" " method="POST">
    <div class="row"> 
      <div class="col-md-6 offset-3 bg-success"><br><br>
      <input  class="form-control" type="text" name="Cname" placeholder="Car name:" style="font-size: 24px;color:black" required="fill here"><br>
      <input  class="form-control" type="text" name="capasity" placeholder="Capacity:" style="font-size: 24px;color:black" required="fill here"><br>
      <input  class="form-control" type="text" name="carno" placeholder="Car number:" style="font-size: 24px;color:black" required="fill here"><br>
      <input  class="form-control" type="text" name="Ctyep" placeholder="Car type:" style="font-size: 24px;color:black" required="fill here"><br>
      <input  class="form-control" type="text" name="deptime" placeholder="Departure time:" style="font-size: 24px;color:black" required="fill here"><br>

       <input  class="form-control" type="text" name="Dname" placeholder=" Driver name:" style="font-size: 24px;color:black" required="fill here"><br>
      <input  class="form-control" type="text" name="Dnumber" placeholder=" Driver contact:" style="font-size: 24px;color:black" required="fill here"><br>

     
  <div class="dropdown">
  <select name="country" id="country"  class="form-control" style="width: 200px;">
    <option>Country  for route</option>
    <option>TANZANIA</option>
    <option>KENYA</option>
    <option>UGANDA</option>
    <option>BURUNDI</option>
    <option>RWANDA</option>
    <option>CONGO</option>
</select><br>

<select name="from"  id="from" class="form-control" style="width: 300px;">
    <option value="Arusha">Route start from....</option>
    <option value="Arusha">Arusha</option>
    <option value="Dar es Salaam">Dar es Salaam</option>
    <option value="Dodoma"> Dodoma</option>
    <option value="Geita"> Geita </option>
    <option value=" Iringa"> Iringa</option>
    <option value="Kagera">Kagera</option>
    <option value="Kigoma">Kigoma </option>
    <option value="Kilimanjaro">Kilimanjaro</option>
    <option value="Lindi">Lindi</option>
    <option value="Manyara">Manyara</option>
    <option value="Mara"> Mara</option>
    <option value="Mbeya">Mbeya</option>
    <option value="Morogoro">Morogoro</option>
    <option value="Mtwara">Mtwara</option>
    <option value="Njombe">Njombe </option>
    <option value="Pwani">Pwani </option>
    <option value="Rukwa">Rukwa </option>
    <option value="Ruvuma">Ruvuma </option>
    <option value="Shinyanga"> Shinyanga </option>
    <option value="Simiyu">Simiyu </option>
    <option value="Singida">Singida </option>
    <option value="Songwe">Songwe</option>
    <option value="Tabora">Tabora </option>
    <option value="Tanga">Tanga </option>
    <option value=""> </option>
                 
  ...
 
</select><br>

    <select name="to"  id="to" class="form-control" style="width: 300px;">
  <option value="Arusha">Route end to....</option>
  <option value="Arusha">Arusha</option>
    <option value="Dar es Salaam">Dar es Salaam</option>
    <option value="Dodoma"> Dodoma</option>
    <option value="Geita"> Geita </option>
    <option value=" Iringa"> Iringa</option>
    <option value="Kagera">Kagera</option>
    <option value="Kigoma">Kigoma </option>
    <option value="Kilimanjaro">Kilimanjaro</option>
    <option value="Lindi">Lindi</option>
    <option value="Manyara">Manyara</option>
    <option value="Mara"> Mara</option>
    <option value="Mbeya">Mbeya</option>
    <option value="Morogoro">Morogoro</option>
    <option value="Mtwara">Mtwara</option>
    <option value="Njombe">Njombe </option>
    <option value="Pwani">Pwani </option>
    <option value="Rukwa">Rukwa </option>
    <option value="Ruvuma">Ruvuma </option>
    <option value="Shinyanga"> Shinyanga </option>
    <option value="Simiyu">Simiyu </option>
    <option value="Singida">Singida </option>
    <option value="Songwe">Songwe</option>
    <option value="Tabora">Tabora </option>
    <option value="Tanga">Tanga </option>
    <option value=""> </option>
</select>

</div></p><br>
       <button class="btn btn-outline-light btn-lg" name="submit" type="submit">Submit</button>&nbsp;&nbsp;&nbsp;&nbsp;
       <button class="btn btn-outline-light btn-lg" type="reset">Cancel</button><br><br>
   </div>
 </div>
</form>
</div>
</div>

  <script type="text/javascript" src="assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="assets/js/popper.min.js"></script>
  <script type="text/javascript" src="assets/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>