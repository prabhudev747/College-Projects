
<!DOCTYPE html>
<html>
<head>
    <title>Mahadasara 2022</title>  
<link rel="shortcut icon" type="image" href="images/mahadasara logo.jpg">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<style>
body {margin:0;font-family:Arial}

.topnav {
overflow:hidden;
background-image: linear-gradient(43deg, #4158D0 0%, #C850C0 46%, #FFCC70 100%);
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}


.topnav .icon {
  display: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 17px;    
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.topnav a:hover, .dropdown:hover .dropbtn {
  background-color: #E39FF6;
  color: white;
}

.dropdown-content a:hover {
  background-color: #E39FF6;
  color: black;
}

.dropdown:hover .dropdown-content {
  display: block;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child), .dropdown .dropbtn {
    display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  
  @media screen and (max-width: 600px){
  .topnav.responsive .dropdown {float: none;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .dropdown .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }
}
</style>
</head>
<body>
<img src="images/mainheader.jpg" width="100%">

<div class="topnav" id="myTopnav">
 <a href="newhome.php"  ><i class="material-icons" >home</i></a>
  <div class="dropdown">
    <button class="dropbtn">Gallery 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="gallery.php">Photos</a>
      <a href="videos.php">Videos</a>
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn">Event Details
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
        	<a href="poster.php">Poster</a>
	        <a href="view_events.php">Event</a>
            
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn">Participants
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
	        <a href="consolidation_list.php">Mahadasara</a>
            <a href="biathlon_participants.php">Biathlon</a>
            <a href="dogshow_participants.php">Dogshow</a>
      
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn">Registration
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
        <a href="view_process.php"> Process</a>
	    <a href="register.php">Student </a>
        <a href="biathlon_register.php">Biathlon </a>
        <a href="dogshow_register.php">Dog Show </a>
      
    </div>
  </div> 
  <a href="points_table2.php">Points</a>
  <a href="login.php">Login</a>
    <a href="support.php">Support</a>

  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>
<?php
include ('graph.php');
?>
<marquee direction="right" scrollamount="4">
           <img src="images/MD2022.png" style="width:280px;height:240px;margin-top:100px"/><!-- comment -->
       
           <img src="images/MD2022-kan.png" style="width:280px;height:240px;margin-top:100px"/><!-- comment --> 
       </marquee>


<div class="footer">
    <center><p> Convened By </p></center>
    <center><img src="images/ECElogo.jpg" height="120px" width="120px"><center>
    <center><p> Supported By </p></center>
    <img src="images/Logos1.jpg" height="90px" width="90%"><br>
    <br>
    

   
<div style="background-image: linear-gradient(43deg, #4158D0 0%, #C850C0 46%, #FFCC70 100%); color:white;height:60px;padding-top:6px">
	
<center><p>For Queries : mahadasara2022@mitmysore.in <br /><a href="https://instagram.com/mitmahadasara_2k22?igshid=YmMyMTA2M2Y=" style="color:white">Follow Us @mitmahadasara_2k22 &nbsp<img src="images/insta.jpg" width="2%"></a></p></center>
	</div>
   <!--<a href="#" ><span class="glyphicon glyphicon-earphone" style="background-image: linear-gradient(43deg, #4158D0 0%, #C850C0 46%, #FFCC70 100%); width:100%; height:40px; padding-top: 2%; fontcolor:black;">Website Support Centre</span>
   </a><br><br>-->
</div>









<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

</body>
</html>



