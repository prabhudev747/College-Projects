
<?php


include("auth.php");  ?>
<!DOCTYPE html>
<html lang="en">
  <head>

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
  <body class="app sidebar-mini" onLoad="initGeolocation();">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="">E-TENDER </a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
       
   
          <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
         
            <li><a class="dropdown-item" href="usereditdash.php"><i class="fa fa-user fa-lg"></i> Edit Profile</a></li>
            <li><a class="dropdown-item" href="logout.php"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      
       <div class="app-sidebar__user">
        <div>
          <p class="app-sidebar__user-name"><?php echo $_SESSION['username']; ?></p>

        </div>
      </div>
           <ul class="app-menu">
        <li><a class="app-menu__item" href="dashboard.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">PROFILE</span></a></li>
         
        		 <li><a class="app-menu__item" href="specilalist.php"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">FIND TENDER</span></a></li>
		 <li><a class="app-menu__item" href="apstatus.php"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">TENDER STATUS</span></a></li>
		 <li><a class="app-menu__item" href="deletephp.php"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">CANCEL TENDER</span></a></li>

        
		 <li><a class="app-menu__item" href="treatmenthistory.php"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">TENDER HITORY</span></a></li>
		 		 <li><a class="app-menu__item" href="currentstatus.php"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">ADD CURRENT STATUS</span></a></li>
<li><a class="app-menu__item" href="usereditdash.php"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">UPDATE PROFILE</span></a></li>

        
	
 		 
      </ul>
    </aside>
    <main class="app-content">
      <div class="app-title">
        <div> 
          <h1><i class="fa fa-dashboard"></i>profile </h1>
         
        </div>
        
      </div>
     <?php
	 $a=$_SESSION['username'];
	 $query="SELECT * FROM companyinfo where user_id='$a'";
	 //error_reporting(0);
$mysql_hostname = "localhost";
$mysql_user     = "root";
$mysql_password = "";
$mysql_database = "etender";
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
            <h3 class="tile-title">ABOUT E-TENDER</h3>
            <ul>
			<P><H5>The procurement procedure is the process that will be followed by the government to assign the contract, and it will generally be referred to in this PPP Guide as the ‘tender process’.

As in any public procurement, the usual process should be a competitive process[1], in other words, there will be a tender to gather competitive bids to select an awardee among a number of candidates. The tender process should follow a published set of rules or guidelines described in the procurement framework (either in the form of policies or laws). Guidelines and standard procedures are important to smooth the process and present a consolidated approach to the market.</H5></p>
             
            </ul>
          </div>
        </div>
		 <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">YOUR PROFILE</h3>
            <div class="tile-body">
              <form class="form-horizontal" action="" method="post" >
                <div class="form-group row">
                  <label class="control-label col-md-3">FIRST NAME</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" style="text-transform:uppercase" value="<?php echo $data['first_name']; ?>" readonly>
                  </div>
                </div>
				<div class="form-group row">
                  <label class="control-label col-md-3">LAST NAME</label>
                  <div class="col-md-8">
                    <input class="form-control" type="textonly" style="text-transform:uppercase" name="p2" value="<?php echo $data['second_name']; ?>" readonly>
                  </div>
                </div>
				<div class="form-group row">
                  <label class="control-label col-md-3">PHONE NUMBER</label>
                  <div class="col-md-8">
                    <input class="form-control col-md-8" type="number" value="<?php echo $data['phone']; ?>"readonly >
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">USER ID</label>
                  <div class="col-md-8">
                    <input class="form-control col-md-8" ID="<?php echo $_SESSION['username']; ?>",  name="p4" value="<?php echo $_SESSION['username']; ?>"  readonly>
                  </div>
                </div>
			
                <div class="form-group row">
                  <label class="control-label col-md-3">ADDRESS</label>
                  <div class="col-md-8" style="text-transform:uppercase">
                    <input class="form-control"  type="text" value="<?php echo $data['address']; ?>" readonly>
                  </div>
                </div>  
              
			 
			   <div class="form-group row">
                  <label class="control-label col-md-3">POSITION</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" value="<?php echo $data['position']; ?>" readonly>
                  </div>
                </div>
				<div class="form-group row">
                  <label class="control-label col-md-3">Company name</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" value="<?php echo $data['company_name']; ?>" readonly>
                  </div>
                </div
				<div class="form-group row">
                  <label class="control-label col-md-3">Company Type</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" value="<?php echo $data['company_type']; ?>" readonly>
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