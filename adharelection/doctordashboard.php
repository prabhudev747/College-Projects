<!DOCTYPE html>
<?php


include("auth.php"); //include auth.php file on all secure pages ?>
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
    <title>E-TENDER</title>
	 
  </head>
  <body class="app sidebar-mini" >
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="index.html">E-TENDER</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
       
   
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
         
            <li><a class="dropdown-item" href="doctoreditprofile.php"><i class="fa fa-user fa-lg"></i> Profile</a></li>
            <li><a class="dropdown-item" href="doctorlogout.php"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
			          <li><a class="dropdown-item" href="editdoctor.php"><i class="fa fa-sign-out fa-lg"></i>Update Profile</a></li>
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
        <li><a class="app-menu__item active" href="doctordashboard.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">DEPARTMENT PROFILE</span></a></li>
        <li><a class="app-menu__item " href="tenderinfo.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">ADD TENDER</span></a></li>
       
	   <li><a class="app-menu__item" href="appointmentnotification.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">TENDER REQUEST</span></a></li>
    
         <li><a class="app-menu__item" href="deleteappointmeny.php"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">DELETE TENDER REDUEST</span></a></li>
        <li><a class="app-menu__item" href="addtreatment.php"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">ADD TENDER FEEDBACK</span></a></li>
        
               <li><a class="app-menu__item " href="viewtreatment.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">VIEW COMPANY PROFILE</span></a></li>
        
       <li><a class="app-menu__item " href="viewstatus.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">VIEW STATUS</span></a></li>
        
	  
      </ul>
    </aside>
    <main class="app-content">
      <div class="app-title">
        <div> 
          <h1><i class="fa fa-dashboard"></i>profile </h1>
          <p>Update your profile</p>
        </div>
        
      </div>
          <?php
	 error_reporting(0);
$mysql_hostname = "localhost";
$mysql_user     = "root";
$mysql_password = "gagana123";
$mysql_database = "etender";
$a=$_SESSION['username'];
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Oops some thing went wrong");
mysql_select_db($mysql_database, $bd) or die("Oops some thing went wrong");// we are now connected to database

$result = mysql_query("SELECT * FROM tenderinfo where dept_id='$a'"); // selecting data through mysql_query()



while($data = mysql_fetch_array($result))
{

?>
      
      <div class="row">
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">ABOUT E-TENDER</h3>
            <ul>
			<p><h5>The procurement procedure is the process that will be followed by the government to assign the contract, and it will generally be referred to in this PPP Guide as the ‘tender process’. As in any public procurement, the usual process should be a competitive process[1], in other words, there will be a tender to gather competitive bids to select an awardee among a number of candidates. The tender process should follow a published set of rules or guidelines described in the procurement framework (either in the form of policies or laws). Guidelines and standard procedures are important to smooth the process and present a consolidated approach to the market.</h5></p>

          </div>
        </div>
		 <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">tender profile</h3>
            <div class="tile-body">
              <form class="form-horizontal" action="" method="post">
                <div class="form-group row">
                  <label class="control-label col-md-3">TENDER NAME</label>
                  <div class="col-md-8">
                    <input class="form-control" value="<?php echo $data['tender_name']; ?>" type="text" readonly >
                  </div>
                </div>
				<div class="form-group row">
                  <label class="control-label col-md-3">TENDER NUMBER</label>
                  <div class="col-md-8">
                    <input class="form-control" value="<?php echo $data['tender_number']; ?>" type="text"  readonly>
                  </div>
                </div>
				<div class="form-group row">
                  <label class="control-label col-md-3">DEPARTMENT NAME</label>
                  <div class="col-md-8">
                    <input class="form-control" value="<?php echo $data['dept_name']; ?>" type="text"  readonly>
                  </div>
                </div>
				<div class="form-group row">
                  <label class="control-label col-md-3">PHONE NUMBER</label>
                  <div class="col-md-8">
                    <input class="form-control" value="<?php echo $data['phone']; ?>" type="number"  maxlength="13"readonly>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">ADDRESS</label>
                  <div class="col-md-8">
                    <input class="form-control col-md-8"  VALUE="<?php echo $_SESSION['address']; ?>" readonly>
                  </div>
                </div>
				
               
			
	
    
               
              </form>
            </div>
           
          </div>
        </div>

      </div>

	  <?php } ?>
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