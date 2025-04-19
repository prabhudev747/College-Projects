<?php
include("auth.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500">
    <style>
      #locationField, #controls {
        position: relative;
        width: 480px;
      }
      #autocomplete {
        position: absolute;
        top: 0px;
        left: 0px;
        width: 99%;
      }
      .label {
        text-align: right;
        font-weight: bold;
        width: 100px;
        color: #303030;
      }
      #address {
        border: 1px solid #000090;
        background-color: #f0f0ff;
        width: 480px;
        padding-right: 2px;
      }
      #address td {
        font-size: 10pt;
      }
      .field {
        width: 99%;
      }
      .slimField {
        width: 80px;
      }
      .wideField {
        width: 200px;
      }
      #locationField {
        height: 20px;
        margin-bottom: 2px;
      }
    </style>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>ADHAR-ELE</title>
	<script type="text/javascript">
     function initGeolocation()
     {
        if( navigator.geolocation )
        {
           // Call getCurrentPosition with success and failure callbacks
           navigator.geolocation.getCurrentPosition( success, fail );
        }
        else
        {
           alert("Sorry, your browser does not support geolocation services.");
        }
     }

     function success(position)
     {

         document.getElementById('long').value = position.coords.longitude;
         document.getElementById('lat').value = position.coords.latitude
     }

     function fail()
     {
        // Could not obtain location
     }

   </script>  
  </head>
  <body class="app sidebar-mini" onLoad="initGeolocation();">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="">AADHAAR</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
       
   
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
         
	<!--		<li><a class="dropdown-item" href="doctoreditprofile.php"><i class="fa fa-user fa-lg"></i> Profile</a></li>  -->
            <li><a class="dropdown-item" href="govtlogout.php"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user">
        <div>
          <p class="app-sidebar__user-name">WELCOME : <?php echo $_SESSION['username']; ?></p>

        </div>
      </div>
        <ul class="app-menu">
	    <li><a class="app-menu__item active" href="govtdashboard.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">ELECTION DETAILS</span></a></li>
     
     
        <li><a class="app-menu__item " href="tenderinfo.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">ADD ELECTION INFO</span></a></li>
        <li><a class="app-menu__item" href="addcandidate.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">ADD CANDIDATE</span></a></li>
    
	   <li><a class="app-menu__item" href="viewcandidate.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">VIEW CANDIDATE</span></a></li>
    
         <li><a class="app-menu__item" href="adduser.php"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">ADD USERS</span></a></li>
        <li><a class="app-menu__item" href="viewuser.php"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">VIEW USERS</span></a></li>
        <li><a class="app-menu__item" href="varify.php"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Varify User </span></a></li>
               <li><a class="app-menu__item " href="viewresult.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">VIEW RESULT</span></a></li>
			   
      </ul>
    </aside>
    <main class="app-content">
      <div class="app-title">
        <div> 
          <h1><i class="fa fa-dashboard"></i>Profile </h1>
          
        </div>
        
      </div>
     
      
      <div class="row">
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">ABOUT ELECTION INORMATION</h3>
            <ul>
			<p><h4>The Election Commission of India is preparing to pitch for the mandatory, legally backed, linking of voter IDs with the Aadhaar number, ET has learnt. 

The commission will propose amendments to the Representation of the People Act, 1951, that will require citizens to link their Electoral Photo ID Card (EPIC) with the 12-digit Aadhaar, while ensuring privacy protection, said people with knowledge of the matter. 

.</h4></p>
              </div>
        </div>
		 <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">CURRENT ELECTION INFO</h3>
            <div class="tile-body">
              <form class="form-horizontal" action="eledb.php" method="post">
                <div class="form-group row">
                  <label class="control-label col-md-3">ELECTION NAME</label>
                  <div class="col-md-8">
                    <input class="form-control" name="p1" style="text-transform:uppercase" type="text" placeholder="Enter tender name" required >
                  </div>
                </div>
					<div class="form-group row">
            <label class="control-label col-md-3">TENDER TYPE</label>
			<div class="col-md-8">
			<select class="form-control" name="p2" required >
			  <option value="NULL">SELECT ELECTION TYPE</option>
              <option value="Member-of-Legislative-Assembly">Member-of-Legislative-Assembly</option>
              <option value="Member-of-Parliament"> Member-of-Parliament</option>    
             
      
            </select></div>
          </div>
				
				<div class="form-group row">
                  <label class="control-label col-md-3">ELECTION DATE</label>
                  <div class="col-md-8">
                    <input class="form-control" name="p3" type="DATE"  maxlength="13" placeholder="DATE" required >
                  </div>
                </div>
			
				<div class="form-group row">
                  <label class="control-label col-md-3">TIME START</label>
                  <div class="col-md-8">
                    <input class="form-control" name="p4" style="text-transform:uppercase" type="time" placeholder=" START TIME" required >
                  </div>
                </div>

                <div class="form-group row" >
                  <label class="control-label col-md-3">TIME END</label>
                  <div class="col-md-8">
                    <input class="form-control" name="p5" style="text-transform:uppercase" type="time" placeholder="END TIME" required >
                
                  </div>
                </div>
				   <div class="tile-footer">
              <div class="row">
                <div class="col-md-8 col-md-offset-3">
                     <input type = "submit" value ="Submit" name = "submit"/>
                </div>
              </div>
            </div>
				
				</form>
			
	<script>
      // This example displays an address form, using the autocomplete feature
      // of the Google Places API to help users fill in the information.

      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      var placeSearch, autocomplete;
      var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name'
      };

      function initAutocomplete() {
        // Create the autocomplete object, restricting the search to geographical
        // location types.
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
            {types: ['geocode']});

        // When the user selects an address from the dropdown, populate the address
        // fields in the form.
        autocomplete.addListener('place_changed', fillInAddress);
      }

      function fillInAddress() {
        // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace();

        for (var component in componentForm) {
          document.getElementById(component).value = '';
          document.getElementById(component).disabled = false;
        }

        // Get each component of the address from the place details
        // and fill the corresponding field on the form.
        for (var i = 0; i < place.address_components.length; i++) {
          var addressType = place.address_components[i].types[0];
          if (componentForm[addressType]) {
            var val = place.address_components[i][componentForm[addressType]];
            document.getElementById(addressType).value = val;
          }
        }
      }

      // Bias the autocomplete object to the user's geographical location,
      // as supplied by the browser's 'navigator.geolocation' object.
      function geolocate() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var geolocation = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            var circle = new google.maps.Circle({
              center: geolocation,
              radius: position.coords.accuracy
            });
            autocomplete.setBounds(circle.getBounds());
          });
        }
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAPJaq8h4L3_LgeKhYA9c3ZS6rLuQF75gU&libraries=places&callback=initAutocomplete"
        async defer></script><br><br>
                
					
		 
		 <!-- <div class="form-group row">
		  
            <label class="control-label col-md-3">AVAIL TIME FROM</label>
              <div class="col-md-8">
                    <input class="form-control col-md-8" type="time" name="p8" required  >
                  </div>
				  <label class="control-label col-md-3">TO</label>
				  <div class="col-md-8">
                    <input class="form-control col-md-8" type="time" name="p9" required  >
                  </div>
				  
          </div>
		  <div class="form-group row">
            <label class="control-label col-md-3">SPECIALISATION</label>
              			<div class="col-md-8">
			<select class="form-control" name="pp" required >
			  <option value="NULL">---SELECT--</option>
			 <option value="cardiology"> Anesthesiologist</option>
              <option value="cardiologist">Cardiologist</option>
              <option value="Neurologist">Neurologist</option>
              <option value="Nephrologist">Nephrologist</option>
              <option value="orthopedics">Orthopedics</option>
               <option value="Dermatologist">Dermatologist</option>  
			   <option value="homevisit">HOME VISIT</option>  
            </select>
			</div>
          </div>
		   <div class="form-group row">
            <label class="control-label col-md-3">SELECT CITY</label>
              			<div class="col-md-8">
			<select class="form-control" name="ppp" required >
              <option value="MYSORE">MYSORE</option>
              <option value="BANGLORE">BANGLORE</option>
              <option value="MANGLORE">MANGLORE</option>
              <option value="HASSAN">HASSAN</option>
               <option value="HUBLI">HUBLI</option>
      
            </select>
			</div>
          </div>
                
               
              
            </div>
           -->
          </div>
        </div>

      </div>

	  
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <script type="text/javascript" src="js/plugins/chart.js"></script>
	
    <script type="text/javascript">
      var data = {
      	labels: ["January", "February", "March", "April", "May"],
      	datasets: [
      		{
      			label: "My First dataset",
      			fillColor: "rgba(220,220,220,0.2)",
      			strokeColor: "rgba(220,220,220,1)",
      			pointColor: "rgba(220,220,220,1)",
      			pointStrokeColor: "#fff",
      			pointHighlightFill: "#fff",
      			pointHighlightStroke: "rgba(220,220,220,1)",
      			data: [65, 59, 80, 81, 56]
      		},
      		{
      			label: "My Second dataset",
      			fillColor: "rgba(151,187,205,0.2)",
      			strokeColor: "rgba(151,187,205,1)",
      			pointColor: "rgba(151,187,205,1)",
      			pointStrokeColor: "#fff",
      			pointHighlightFill: "#fff",
      			pointHighlightStroke: "rgba(151,187,205,1)",
      			data: [28, 48, 40, 19, 86]
      		}
      	]
      };
      var pdata = [
      	{
      		value: 300,
      		color: "#46BFBD",
      		highlight: "#5AD3D1",
      		label: "Complete"
      	},
      	{
      		value: 50,
      		color:"#F7464A",
      		highlight: "#FF5A5E",
      		label: "In-Progress"
      	}
      
      
      var ctxl = $("#lineChartDemo").get(0).getContext("2d");
      var lineChart = new Chart(ctxl).Line(data);
      
      var ctxp = $("#pieChartDemo").get(0).getContext("2d");
      var pieChart = new Chart(ctxp).Pie(pdata);
    </script>
    <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
      	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      	ga('create', 'UA-72504830-1', 'auto');
      	ga('send', 'pageview');
      }
    </script>
  </body>
</html>