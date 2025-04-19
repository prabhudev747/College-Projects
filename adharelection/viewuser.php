
<?php
include("auth.php"); //include auth.php file on all secure pages
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
    <title>AADHAAR-ELECTION</title>
	 
  </head>
  <body class="app sidebar-mini" >
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="">AADHAAR</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
       
   
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
         
            
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
          <?php
		  $a=$_SESSION['username'];
$query="SELECT * FROM voter ";
	 //error_reporting(0);
$mysql_hostname = "localhost";
$mysql_user     = "root";
$mysql_password = "";
$mysql_database = "adhaar";
$con = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password,$mysql_database);
if(mysqli_connect_errno())
{
	echo"failed to connect to MysQl: ". mysqli_connect_error();
}
$result = mysqli_query($con,$query); // selecting data through mysql_query()
while($data = mysqli_fetch_array($result))
{

?>

      
      <div class="row">
        <div class="col-md-6">
          <div class="tile">
             <h3 class="tile-title">User profile</h3>
            <div class="tile-body">
		<img src="img/<?php echo $data['img']; ?>" alt="" width="200" height="200">

                <div class="form-group row">
                  <label class="control-label col-md-3"> NAME </label>
                  <div class="col-md-8">
                    <input class="form-control" value="<?php echo $data['name']; ?>" type="text" readonly >
                  </div>
                </div>
				<div class="form-group row">
                  <label class="control-label col-md-3">DOB</label>
                  <div class="col-md-8">
                    <input class="form-control" value="<?php echo $data['dob']; ?>" type="text"  readonly>
                  </div>
                </div>
				<div class="form-group row">
                  <label class="control-label col-md-3">CONSTITUENCY</label>
                  <div class="col-md-8">
                    <input class="form-control" value="<?php echo $data['cons']; ?>" type="text"  readonly>
                  </div>
                </div>
				
				 <form class="form-horizontal" action="deleteuser.php" method="post">
				<div class="form-group row">
                  <label class="control-label col-md-3">AADHAAR NO</label>
                  <div class="col-md-8">
                    <input class="form-control" name="p1" value="<?php echo $data['adhar']; ?>" readonly>
                  </div>
                </div>
				
				<div class="form-group row">
                 
                  <div class="col-md-8">
                   <button class="btn btn-primary" type = "submit" value ="Submit" name = "submit" >DELETE</button>
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