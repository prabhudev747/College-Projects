<?php
include("auth.php");  
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    
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
    <title>AADHAAR BASED ELECTION</title>
  </head>
  <body class="app sidebar-mini">

    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="">AADHAAR</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <li class="app-search">
          <input class="app-search__input" type="search" placeholder="Search">
          <button class="app-search__button"><i class="fa fa-search"></i></button>
        </li>
   
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
         
   <!--         <li><a class="dropdown-item" href="usereditdash.php"><i class="fa fa-user fa-lg"></i> Edit Profile</a></li>  -->
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
          <p class="app-sidebar__user-name">Welcome: <?php echo $_SESSION['username']; ?></p>

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
        
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="">VOTE NOW</a></li>
        </ul>
      </div>
         <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">SEARCH USER HERE!!!</h3>
            <div class="tile-body">
              <form class="row"  action="" method="post">
                
                <div class="form-group col-md-3">
         
<input type="text" name="ppp" class="form-control">
                </div>
                <div class="form-group col-md-4 align-self-end">
                   
					 <button class="btn btn-primary" type = "submit" value ="Submit" name = "submit" >SEARCH</button>
                </div>
              </form>
            </div>
          </div>
        </div>
		<?php
	 error_reporting(0);

		  $a=$_POST['ppp'];
		  $query="SELECT * FROM voter where adhar='$a'";
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


?> 
<?php while($data = mysqli_fetch_array($result))
{?>
      <div class="clearfix"></div>
        <div class="col-md-12">
          <div class="tile">
          
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
             
                  
                 
					
				
                    
					<th>USER NAME</th>
					<th>CONSTITUENCY</th>

					<th>AADHAAR NUMBER</th>
					<th>DATE OF BIRTH</th>
                    
					
                   
                  </tr>
                </thead>
                <tbody>
				

				 <tr>
				 <img src="img/<?php echo $data['img']; ?>"width="100" height="100">
					<td><?php echo $data['name']; ?></td>
					<td><?php echo $data['cons']; ?></td>
					<td><?php echo $data['adhar']; ?></td>
					<td><?php echo $data['dob']; ?></td>
				
				
                  
                 
                  </tr>
                 
                
				
				
				
				
				
				
				
				
				
				
                </tbody>
              </table>
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
      ]
      
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