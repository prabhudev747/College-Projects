<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AADHAAR-Election </title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Cabin:700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/grayscale.min.css" rel="stylesheet">
	<style>
.dropbtn {
    background-color: #687178;
    color: white;
    padding: 14px;
    font-size: 14px;
    border: none;
    cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
    background-color: #2980B9;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #226673;
    min-width: 160px;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown a:hover {background-color: #ddd}

.show {display:block;}
</style>

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">AADHAAR-ELECTION</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#download">Services</a>
            </li>
			 <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact-us</a>
            </li>
			
            <li class="nav-item">
              <button onclick="myFunction()" class="dropbtn"  class="nav-link js-scroll-trigger">LOGIN/SIGNUP</button>
  <div id="myDropdown" class="dropdown-content">
    <a class="nav-link js-scroll-trigger" href="login.php">USER</a>
    <a href="govtlogin.php">GOVERNMENT</a>
	
  </div>
            </li>  
          </ul>
        </div>
      </div>
    </nav>

    <!-- Intro Header -->
    <header class="masthead">
      <div class="intro-body">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              
              
              <a href="" class="btn btn-circle js-scroll-trigger">
                <i class="fa fa-angle-double-down animated"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- About Section -->
    <section id="about" class="content-section text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2>ABOUT AADHAAR-ELECTION</h2>
			<p>The procurement procedure is the process that will be followed by the government to assign the contract, and it will generally be referred to in this PPP Guide as the ‘tender process’. As in any public procurement, the usual process should be a competitive process[1], in other words, there will be a tender to gather competitive bids to select an awardee among a number of candidates. The tender process should follow a published set of rules or guidelines described in the procurement framework (either in the form of policies or laws). Guidelines and standard procedures are important to smooth the process and present a consolidated approach to the market.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Download Section -->
    <section id="download" class="download-section content-section text-center">
      <div class="container">
        <div class="col-lg-8 mx-auto">
          <h2>OUR SERVICES</h2>
         
          <a href="">COMPANY</a>
		   <p>Search for tender  and Add status for the tender </p>
		   <a href="">GOVERNMENT</a>
		   <p>Government can upload various tender required for them</p>
		   
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="content-section text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2>DEVELOPER</h2>
            
              <a href="">WE ARE HAPPY TO HELP YOU</a>
               <p>THE APPLICATION  EXCLUSIVELY  DESIGNED FOR GOVERNMENT FOR THE  ALLOTMENT OF TENDERS FOR COMPANIES .</p>
			  
            <ul class="list-inline banner-social-buttons">
              <li class="list-inline-item">
               
                  
                  <span class="network-name">Mahalakshmi C</span><br><span class="network-name">+917338531413</span><br><span class="network-name">lakshmilaks00@gmail.com</span><br />
				  <span class="network-name">Samanta B math</span><br><span class="network-name">+917204530563</span><br><span class="network-name">samantamath25@gmail.com</span>
				  
                </a>
              </li>
			    
             
            </ul>
          </div>
        </div>
      </div>
    </section>
	<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

    <!-- Map Section -->
    <div id="map"></div>

    <!-- Footer -->
 <!--   <footer>
      <div class="container text-center">
        <p>Copyright &copy; LAVANYA NOMITHA 2018</p>
      </div>
    </footer>  -->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

   

    <!-- Custom scripts for this template -->
    <script src="js/grayscale.min.js"></script>

  </body>

</html>
