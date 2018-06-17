<!DOCTYPE html>
<html>
<head>
	<title>Transgood</title>
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="stylesheet" type="text/css" href="assets/bootstrap/dist/css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="assets\fontawesome\web-fonts-with-css\css\fontawesome-all.min.css">

</head>
<body  style="background:darkgray;">
  <style type="text/css">
    ul li:hover{
      background:gray;

    }
  </style>
	<div class="container bg-dark">
  <div class="panel panel-default" style="border: 2px solid orange;">
    <div class="panel-body">
       <div class="navbar navbar-expand-md fixed-top "  style="border: 2px solid orange; background:tomato">
      
      <header class="navbar-brand bg-dark" style="color:tomato; border:1px solid orange; font-size:30px">TRANS G</header>
      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="#" style="color: white">CargoConnect</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" style="color: white">SUMATRA Cost</a>
          </li>

           <li>
           <a class="nav-link" style="color: white" href="#"> MY TRIP <i class="fa fa-bus  fa-1x "style="color:white"></i></a>
          </li>
          <li>
           <a class="nav-link" data-toggle="modal" data-target="#cancel" style="color: white" href="#">Cancellation <i class="fa fa-ticket-alt fa-1x " style="color:white"></i></a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white">About us</a>
            <div class="dropdown-menu bg-dark" aria-labelledby="dropdown01" style="border: 2px solid orange;" >
              <a class="dropdown-item" href="#" style="color:tomato;">Action</a>
              <a class="dropdown-item" href="#" style="color:tomato;">Another action</a>
              <a class="dropdown-item" href="#" style="color:tomato;">Something else here</a>
            </div>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white">Staffs</a>
            <div class="dropdown-menu bg-dark" aria-labelledby="dropdown01"style="border: 2px solid orange;">
              <a class="dropdown-item" href="#" style="color:tomato;">Action</a>
              <a class="dropdown-item" href="#" style="color:tomato;">Another action</a>
              <a class="dropdown-item" href="#" style="color:tomato;">Something else here</a>
            </div>
          </li>
         <li>
           <a class="nav-link" style="color: white" href="#"> MY Account <i class="fa fa-user-circle fa-1x"style="color:white"></i></a>
          </li>
          <li>
           <a class="nav-link" style="color: white" href="#"> Register <i class="fa fa-user-plus fa-1x"style="color:white"></i></a>
          </li>
        </ul>
        <ul class="navbar-nav navbar-right">
          <li class="nav-item active">
            <a class="nav-link" href="#" style="color: white">WELCOME<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
           <a class="nav-link" data-toggle="modal" href="#" data-target="#log" style="color: white"><span class="sr-only">(current)</span>LogIn</a>
            
          </li>
        </ul>
      </div>

    </nav>
    
    </div>
  </div><br><br><br>





   <div class="navbar navbar-expand-lg navbar-light bg-dark" style="color:orange">
   	
   	<div class="navbar-collapse">
   	
      </div>
        </div>
</div> 
   </div>
</div>    
 
<div class="container" style="border:1px solid teal">
<div class="row bg-dark">
  <div class="col-sm-5"><br>
     <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search for any transport company" aria-label="Search" style="width:300px; border:1px solid orange; color:tomato; background: transparent;">
          <button class="btn btn-outline my-2 my-sm type="submit">Search <i class="fas fa-search"></i>
          </button>
        </form>
        <br>
</div>
  <div class="col-sm-7 bg-dark">
  <h1 style="color:white; text-shadow: 2px 3px orange; font-family: "monospace", Times, serif;"><marquee>Make transport order today</marquee></h1> 
        <p id="demo" style="color:orange"></p>
</div>

</div>
</div>
<br>
<div class="container bg-dark">
<div class="row">
   
<div class="col-sm-3 bg-dark">
  <br>
  <header style="color:white; background:tomato; text-align:center; font-size:20px" >Fill the following parts</header>
<div class="well">   
  <div class="panel" style="border: 2px solid #dddddd;">  
<form class="form-inline my-2">	
<div class="dropdown">
    <select name="timezone_offset" id="country" class="form-control  bg-dark" style="width: 200px; color:white">
    <option>--Select country--</option>
    <option value="TANZANIA">TANZANIA</option>
    <option value="KENYA">KENYA</option>
    <option value="UGANDA">UGANDA</option>
    <option value="BURUNDI">BURUNDI</option>
    <option value="RWANDA">RWANDA</option>
    <option value="CONGO">CONGO</option>
</select>
</div>
 </center>
<br><br>
<select name="region"  id="from" class="form-control bg-dark" style="width: 300px; color:white">
    <option>--From---</option>
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
    </select><br>
<script type="text/javascript">
   function swapfunc(){
    var y,n;
   y=document.getElementById("from").value;
   n=document.getElementById("to").value;

    document.getElementById("demo1").innerHTML =n;
   document.getElementById("demo2").innerHTML =y; }
</script>



<script type="text/javascript">
   function swapfunc1(){
    var y,n;
   y=document.getElementById("to").value;
   n=document.getElementById("from").value;

    document.getElementById("demo1").innerHTML =n;
   document.getElementById("demo2").innerHTML =y; }
</script>





  <select name="sel"  id="to" class="form-control bg-dark" style="width:300px; color:white">
  <option>--To--</option>
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
</form></div>
</div><br><br>

<div class="well" style="color:white"> 
  <div class="panel" style="border: 2px solid #dddddd;">
     <header style="color:white; background:tomato; text-align:center;" >Quick Date</header><br>
   <center> <button class=" btn btn-outline-success btn-md">TODAY</button>
    <button class=" btn btn-outline-success btn-md">NEXT DAY</button>
      </center><br>
  </div><br>
  <div class="well" style="color:white"> 
  <div class="panel" style="border: 2px solid #dddddd;">
    <header style="color:white; background:tomato; text-align:center;"><i class="far fa-calendar-alt"></i>&nbsp; Select date for booking:</header><br>
     <center><input id="date" type="date" name="bookingdate"></center><br>
   </div></div><br>
    <button type="button" onclick="myFunction()">Accept Selection</button>
     </div><br>
     <div class="panel" style="border:2px solid orange">
       <header style="color:white; background:tomato; text-align:center;" >Quick Route</header>
       <style type="text/css">
         tr td:hover{
          background:lightgreen;
         }
       </style>
     <table class="table table-bordered table-striped" style="color:white">
    <thead>
      <tr>
        <th>FROM</th>
        <th>TO</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Dar es Salaam </td>
        <td>Arusha</td> 
      </tr>
      <tr>
        <td>Arusha</td>
        <td>Dar es Salaam</td>
      </tr>
  </table>
     </div> 
     </div><br>

    <div class="col-sm-1"></div><br>

      <div class="col col-sm-8 bg-dark" style="border: 2px solid orange" ><br>
        <div class="panel" style="border: 2px solid orange">
         <header style="color:white; background:tomato; text-align:center;">LEARN MORE ABOUT OUR TRAVEL COMPANY
          <h6><em><i>We are here to give you joy transit..</i></em></h6></header>
        </div>

        <br>
      <marquee behavior="alternate" scrollamount="1"><img src="image/bango.png" title="contact us" style="border:2px solid orange"> </marquee> <br><br>
       <div class="panel" style="border: 2px solid orange">
         <header style="color:white; background:tomato; text-align:center;">SERVICE AND RIGHT OF OUR CUSTOMERS
          <h6><em><i>Have joyful journey and God be with you all..</i></em></h6></header>
        </div><br>

       <div class="panel"  style="border: 2px solid orange"><br>
        <div class="row">
          <div class="col-sm-1"></div>

         <div class="col-sm-3" style="border: 2px solid orange; overflow:scroll;height:220px;padding:5px">
         <header style="color:white; background:tomato; text-align:center;">Insode bus services</header>
         <style type="text/css">
           li{
            color: white;
           }
         </style>
         <!-- <ul> -->
           <li>Drinks</li>
           <li>Food</li>
           <li>Toilet</li>
           <li>Music</li>
           <li>Wi-Fi</li>
           <li>Drinks</li>
           <li>Food</li>
           <li>Toilet</li>
           <li>Music</li>
           <li>Wi-Fi</li>
           <li>Health consaltance</li>
           <li>Rest Time for long journey</li>
         <!-- </ul> -->

       </div>



       <div class="col-sm-1"></div>

       <div class="col-sm-6" style="border: 2px solid orange; overflow:scroll;height:220px;padding:5px">
         <header class="header" style="color:white; background:tomato; text-align:center;">Customer Rights Over the journey</header>
         <ol style="color:white">
           <li></li>
           <li>dsgdg</li>
           <li>dsgdg</li>
           <li>dsgdg</li>
           <li>dsgdg</li>
           <li>dsgdg</li>
           <li>dsgdg</li>
           <li>dsgdg</li>
           <li>dsgdg</li>
           <li>dsgdg</li>
           <li>dsgdg</li>
           <li>dsgdg</li>
         </ol>

       </div>

       <div class="col-sm-1"></div>
       </div><br>
       </div><br>     
       <div class="panel" style="border:2px solid orange;">
         <header  class="header" style="color:white; background:tomato; text-align:center;" >IN GOD WE BELIVE AND SEE OUR JORNEY GO...!!!!</header>
       </div>










      </div>
    </div>
</div>

<script>
  var time = Math.round(this.currentTime);
document.getElementById("demo").innerHTML = Date()+time+"real";
</script>
<br>

	<div class="container bg-dark">
		<div class="row">
			<div class="col-sm-6 border p-9 bg-dark">
        <header style="color:white; background:tomato; text-align:center;">Watching our Bus inside and out side condition</header>
				<br>


<center>
    <script type="text/javascript">
function manageEvent(eventObj, event, eventHandler) {
   if (eventObj.addEventListener) {
      eventObj.addEventListener(event, eventHandler,false);
   } else if (eventObj.attachEvent) {
      event = "on" + event;
      eventObj.attachEvent(event, eventHandler);
   }
}

window.onload=function() {

  // events for buttons
  manageEvent(document.getElementById("start"),"click",startPlayback);
  manageEvent(document.getElementById("stop"),"click",stopPlayback);
  manageEvent(document.getElementById("pause"),"click",pausePlayback);
 manageEvent(document.getElementById("next"),"click",pausePlayback);
  // setup for video playback
  var meadow = document.getElementById("meadow");
  manageEvent(meadow,"timeupdate",reportProgress);

  // video fallback
  var detect = document.createElement("video");
  if (!detect.canPlayType) {
    document.getElementById("controls").style.display="none";
  }
}

// start video, enable stop and pause
// disable play
function startPlayback() {
  var meadow = document.getElementById("meadow");
  meadow.play();
  document.getElementById("pause").disabled=false;
  document.getElementById("stop").disabled=false;
  document.getElementById("next").disabled=false;
  this.disabled=true;
}

// pause video, enable start, disable stop
// disable pause
function pausePlayback() {
  document.getElementById("meadow").pause();
  this.disabled=true;
  document.getElementById("start").disabled=false;
  document.getElementById("stop").disabled=true;
}

// stop video, return to zero time
// enable play, disable pause and stop
function stopPlayback() {
  var meadow = document.getElementById("meadow");
  meadow.pause();
  meadow.currentTime=0;
  document.getElementById("start").disabled=false;
  document.getElementById("pause").disabled=true;
  this.disabled=true;
}

// for every time divisible by 5, output feedback
function reportProgress() {
  var time = Math.round(this.currentTime);
  var div = document.getElementById("feedback");
  div.innerHTML = time + " seconds";
}

</script>

<center><video width="550" controls style="border:1px solid orange" id="meadow" >
   <source src="videos/youN.mp4" type="video/mp4"/>
   <source src="videos/youN.mp4" type="video/ogg" />
   <object >
   <param name="movie"
   value="videos/youN.mp4"></param>
   <embed src="videos/youN.mp4"
type="application/x-shockwave-flash"
   allowscriptaccess="always" allowfullscreen="true" width="100"
height="100">
   <p>Audio slideshow from Shaw Nature Center</embed></object>
</video>
<div id="feedback"></div>
<div id="controls">
<button id="start">Play</button>
<button id="stop">Stop</button>
<button id="pause">Pause</button>
<button id="next" class="next round">&#8250;Next</button>
</controls>
</center>
 <!--  <video width="550" controls style="border:1px solid orange">
  <source id="vi" name="p001" src="" type="video/mp4">;
</video>
</center> -->

</div>
			<div class="col-sm-6 bg-white"><br>
        <header style="background:mediumseagreen;text-align:center; font-size:24px">Selection result:</header>
				<div class="card">
      
 <div class="card"><!-- <br><br> -->
<table style="width:100%; font-family: arial, sans-serif;border-collapse:collaps;width: 100%;">
<tr>
 <th style=" background-color: #dddddd; border: 1px solid #dddddd;text-align: left;padding: 8px;">Country:</th>
<th style=" background-color: #dddddd; border: 1px solid #dddddd;text-align: left;padding: 8px;"><p id="demo0"></p></th>
</tr>
<tr>
<td style="border: 1px solid #dddddd;text-align: left;padding: 8px;" >From:</td>
<td style=" border: 1px solid #dddddd;text-align: left;padding: 8px;
"><p id="demo1"></p></td>
</tr>
<tr>
<td style=" background-color: #dddddd; border: 1px solid #dddddd;text-align: left;padding:8px;">To:</td>
<td style=" background-color: #dddddd; border: 1px solid #dddddd;text-align: left;padding: 8px;"><p id="demo2"></p></td>
</tr>
<tr>
<td style="border: 1px solid #dddddd;text-align: left;padding: 8px;">Date:</td>
<td style="border: 1px solid #dddddd;text-align: left;padding: 8px;"><p id="demo3"></p></td>
</tr>
 <tr>
<td style=" background-color: #dddddd; border: 1px solid #dddddd;text-align: left;padding: 8px;">Car selected:</td>
<td style=" background-color: #dddddd; border: 1px solid #dddddd;text-align: left;padding:8px;"><p id="demo4"></p></td>
 </tr>
</table>
         
        </div><br>
       

        <script>
      function myFunction() {
       var message, x, message1, x1;
        message= document.getElementById("demo0");
        message.innerHTML = "";
        x = document.getElementById("country").value;
           document.getElementById("demo0").innerHTML =x;
         
   
        message1= document.getElementById("demo1");
        message1.innerHTML = "";
        x1 = document.getElementById("from").value;
           document.getElementById("demo1").innerHTML =x1;
        document.getElementById("demo1").innerHTML = x1;
        

        var message2, x2;
        message2= document.getElementById("demo2");
        message2.innerHTML = "";
        x2 = document.getElementById("to").value;
           document.getElementById("demo2").innerHTML =x2;
        document.getElementById("demo2").innerHTML =x2;
        

        var message3, x3;
        message3= document.getElementById("demo3");
        message3.innerHTML = "";
        x3 = document.getElementById("date").value;
           document.getElementById("demo3").innerHTML =x3;
        document.getElementById("demo3").innerHTML =x3;
         }
        </script>
          <button class="btn btn-default" type="button" id="two" onclick="swapfunc1(); $('#one').show();$('#two').hide();" style="display:none;">SWAP TO CHANGE <i class="fa fa-long-arrow-alt-down fa-2x" style="float:right; color:orange"></i><i class="fa fa-long-arrow-alt-up fa-2x" style="float:right;"></i></button>

           <button class="btn"  type="button" id="one" onclick=" swapfunc(); $('#two').show(); $('#one').hide();">SWAP TO CHANGE <i class="fa fa-long-arrow-alt-down fa-2x" style="float:right;"></i><i class="fa fa-long-arrow-alt-up fa-2x" style="float:right;color:orange"></i></button>
        </div>
        <button type="button" class="btn btn-outline-primary " data-toggle="modal" data-target="#myModal">DISPLAY LIST OF CAR</button>
        <button class="btn btn-outline-primary btn-md" style="font-size:18px; float:right;">GO TO NEXT STEP</button><br><br>
			</div>
		</div>
	</div>


<!-- Trigger the modal with a button -->


<div class="container">
  <!-- Trigger the modal with a button -->
  <!-- Modal 002-->
  <div id="log" class="modal fade"  role="dialog" style="display:none;">
    <div class="modal-dialog modal-lg" role="document"  style="width:1000px !important;">
    
      <!-- Modal content-->
      <div class="modal-content" style="background:darkgray">
        <div class="modal-header" style="background:tomato">
          <header  style="text-align:center; font-size:20px">WELCOME OUR VALUABLE CUSTOMER WE VALUE YOUR PRESENCE</header>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
      <div class="container">
    <form class="form" action="include/signup.php " method="POST" >
    <div class="container">
      <div class="row justify-content">
        <div class="col-md-8">
          <div class="card-group"  style="width:700px">
            <div class="card p-4">
              <div class="card-body" >
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
                    <button type="submit" name="log" class="btn btn-dark  px-4">Login</button>
                    <button class="btn btn-dark  px-4" style="float:right;">Exit</button>
                  </div><br>
                  <div class="row">
                  <div class="col-12 text-right">
                   <center> <button type="button" class="btn btn-link px-2">Forgot password?</button></center>
                  </div>
                </div>
                </div>
              </div>
            </div>
            <div class="card text-white bg-dark py-5 d-md-down-none" style="width:44%">
              <div class="card-body text-center">
                <div>
                  <h2>Sign up</h2>
                  <p>Your advice to make sure that you have an account to this special site
                  before using .</p>
                  <p><a href="welcome.php" target="new" style="color:tomato">More information</a></p>
                  <a href="reg.php" target="new1"><button type="button" class="btn btn-outline-light btn-lg" style="border:2px solid orange">Register Now!</button></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</form><br><br>
        </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>










<div class="container">
  <!-- Trigger the modal with a button -->
  <!-- Modal 002-->
  <div id="cancel" class="modal fade"  role="dialog" style="display:none;">
    <div class="modal-dialog modal-lg" role="document"  style="width:1000px !important;">
    
      <!-- Modal content-->
      <div class="modal-content" style="background:darkgray">
        <div class="modal-header" style="background:tomato">
          <header  style="text-align:center; font-size:20px">PLEASE BE SURE OF YOUR JOURNEY BEFORE YOU WANT TO PROOF CANCELLATION </header>
          
        </div>
        <div class="modal-body">
      <div class="container">
        <div class="well">
          <div class="panel">
          <header style="text-align:center;background:palegreen;border:2px solid orange">Terms & Condtions</header>

          <p>Dear Passenger</p>
          <p>If your bus which you hold valid reservation is cancelled you are entitle to rerouting ,care,refund and compansationas laid outby the company.</p>
         <p> Your not entitle  to recive compancation if the cancellation is atributed to extra  ordinary circumstacnce which could not have been avoide even if all resonable measures have ben taken.</p> 
         <p>Example bad wether conditon ,political instabilty,strikes,security risk,unexpected travel safety shaotcomings.</p>
         <p> Eqully there is no compansation when the passenger has been informed of the cancelletion.</p>
          <ul>
            <li>
              At list 7 days prior the scedule time of the dipature.
            </li>
            <li>
              Between 2 and 3 days before the scedure timetable to departure.
            </li>
            <li>
              No more than2 hours prior the original scedule time of deperture and reaching the final destination less than 4 hours  after the scudule time of arrival.
            </li>
          </ul>
        </div>
        </div>

        </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>













<!-- Modal 001 -->
<div id="myModal" class="modal fade" role="dialog" >
  <div class="modal-dialog modal-lg"  style="color:white">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background:tomato">
        <header  class="modal-title"  style="text-align:center; font-size:20px" >SELECT CAR ACCORDING TO TIME OF THE CAR.</header>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      <br>
      </div>

<div class="modal-body bg-dark">
 <input class="form-control" id="myInput" type="text" placeholder="Search..">
  <br>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Select</th>
        <th>Car name</th>
        <th>Company name</th>
        <th>Depeture time</th>

      </tr>
    </thead>
    <tbody id="myTable">
      <tr>
  <th> 
    <script type="text/javascript">
    function col(id){
      var message4, y;
        message4= document.getElementById("demo4");
        message4.innerHTML = "";
       y= document.getElementById("rad").value;
       var x="8:00 am"; 
      document.getElementById("demo5").innerHTML=y;
      document.getElementById("demo6").innerHTML=x;
      document.getElementById("demo4").innerHTML=y;

    }
    function col1(id){
      var message4, y;
        message4= document.getElementById("demo4");
        message4.innerHTML = "";
       y= document.getElementById("rad1").value;
       var x="8:00 am"; 
      document.getElementById("demo5").innerHTML=y;
      document.getElementById("demo6").innerHTML=x;
      document.getElementById("demo4").innerHTML=y;

    }
    function col2(id){
      var message4, y;
        message4= document.getElementById("demo4");
        message4.innerHTML = "";
       y= document.getElementById("rad2").value; 
      document.getElementById("demo5").innerHTML=y;
      document.getElementById("demo6").innerHTML=Date();
      document.getElementById("demo4").innerHTML=y;

    }
    function col3(id){
      var message4, y;
        message4= document.getElementById("demo4");
        message4.innerHTML = "";
       y= document.getElementById("rad3").value;
     var x="8:00 am"; 
      document.getElementById("demo5").innerHTML=y;
      document.getElementById("demo6").innerHTML=x;
      document.getElementById("demo4").innerHTML=y;

    }
    </script>
    <button type="radio" id="rad" value="Shabiby Line" onclick="col(rad)" >yes</button>
  </th>
        <td> Shabiby Line</td>
        <td>shabiby</td>
        <td>8:00am</td>
      </tr>
      <tr>
        <th>
          <button type="radio" id="rad1" value="Machame Safari" onclick="col1(rad1);sel()" >yes</button>
          </th>
        <td>Machame Safari</td>
        <td>Panone</td>
        <td id="t1">8:00am</td>
      </tr>
      <tr>
        <th>
          <button type="radio" id="rad2" value="Kilimanjaro Express" onclick="col2(rad2)" >yes</button>
    </th>
        <td>Kilimanjaro Express</td>
        <td>Ar transit</td>
        <td id="t2">8:00am</td>
      </tr>
      <tr>
        <th>
          <button type="radio" id="rad3" value="Lim Safari" onclick="col3(rad3)" >yes</button>
        </th>
        <td>Lim Safari</td>
        <td>Julius lim</td>
        <td id="t3">8:00am</td>
      </tr>
    </tbody>
  </table>
  <p>Your Selecting: <q style="color:tomato" id="demo5"></q></p> And time for depature is:  <q style="color:tomato" id="demo6"></q>
  <p>Note:  <q  style="color:tomato"> Make sure you select car here.</q></p>
</div>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>



<!-- <style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;text-align: left;padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style> -->


      </div>
      <div class="modal-footer bg-dark">
        <button type="button" class="btn btn-default"  >OK</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>






		<br>

	<div class="container bg-dark">
		<div class="row">
		<div class="col-sm-4"  style="border:2px solid orange;">
     <header  style="background:tomato;text-align:center;"><marquee>Available cars</marquee></header>
        <img src="image/bu9.jpg" style="width:300px">
				</div>

        <div class="col-sm-4"  style="border:2px solid orange;">
          <header  style="background:tomato;text-align:center;"><marquee>Available cars</marquee></header>
        <img src="image/bu11.jpg" style="width:300px">
        </div>

       
        <div class="col-sm-4"  style="border:2px solid orange;">
           <header  style="background:tomato;text-align:center;"><marquee>Available cars</marquee></header>
          <div class="well">
        <img src="image/bu12.jpg" style="width:300px">
        </div>
      </div>
      </div>
    </div>
  </div><br>

<div class="container bg-white">
  <div class="row">
  <div class="col-sm-4">
  </div>
    <div class="col-sm-4">
     
    </div>
  <div class="col-sm-4">
  </div>
</div>
</div>
<br><br><br><br>
<style>    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
  </style>
<footer class="container-fluid text-center">
  <p>&copy Copyrght 2108 TransG.com</p>
    <p>Desingned by: 
      <q>Tripple HACKERS</q>

    </p> 
     <a href="https://www.instagram.com" target="new"><i class="fab fa-instagram fa-2x" style="color:black"></i>In</a>
        <a href="https://www.gmail.com" target="new">  <i class="fab fa-google-plus fa-2x" style="color:red"></i>G+</a>
        <a href="https://www.facebook.com" target="new"> <i class="fab fa-facebook-f fa-2x" style="color: blue"></i>Fb</a>
        <a href="https://www.twitter.com" target="new"> <i class="fab fa-twitter fa-2x" style="color: blue"></i>Twit</a>
        <a href="https://www.whatsapp.com" target="new"> <i class="fab fa-whatsapp fa-2x" style="color: green"></i>Tsup</a>
          <a href="https://www.youtube.com" target="new"> <i class="fab fa-youtube fa-2x" style="color: red"></i>Tube</a>
</footer>


  <script type="text/javascript" src="assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="assets/js/popper.min.js"></script>
  <script type="text/javascript" src="assets/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>