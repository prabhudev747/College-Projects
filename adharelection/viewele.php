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
    <title>ADHAR BASED ELECTION</title>
  </head>
  <body class="app sidebar-mini">
  <?php
	require('db.php');
error_reporting(0);
    // If form submitted, insert values into the database.
    if (isset($_POST['p1'])){
		
		$p1 = stripslashes($_REQUEST['p1']); // removes backslashes
		$p1 = mysqli_real_escape_string($con,$p1); //escapes special characters in a string
		$userid = stripslashes($_REQUEST['userid']); // removes backslashes
		$userid = mysqli_real_escape_string($con,$userid); //escapes special characters in a string
		
		
	//Checking is user existing in the database or not
$query = mysqli_query($con, "SELECT * FROM vote WHERE voterid= '".$userid. "'");
	
  if(mysqli_num_rows(  $query) > 0){
   echo "<div class='form'><h3>!!!!!!!!!!! You Already Voted</h3><br/> Thanks <a href='index.php'>HOME</a></div>";
}else{
        $query = "INSERT into `vote` (candidateid, voterid) VALUES ('$p1','$userid')";
        $result = mysqli_query($con,$query);
}
        if($result){
            echo "<div class='form'><h3>Voted  successfully.</h3><br/> Thanks <a href='index.php'>HOME</a></div>";
        }
    }else{
?>
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="">AADHAAR</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
     <!--   <li class="app-search">
          <input class="app-search__input" type="search" placeholder="Search">
          <button class="app-search__button"><i class="fa fa-search"></i></button>
        </li> -->
   
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
         
     <!--       <li><a class="dropdown-item" href="usereditdash.php"><i class="fa fa-user fa-lg"></i> Edit Profile</a></li>  -->
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
        <li><a class="app-menu__item" href="viewele.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label"><?php echo $_SESSION['username']; ?></span></a></li>
         
        		 <li><a class="app-menu__item" href="logout.php"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">LOG-OUT</span></a></li>
		 
 		 
      </ul>
    </aside>
    <main class="app-content">
      <div class="app-title">
        
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="">VOTE NOW</a></li>
        </ul>
      </div>
   
		<?php
	 error_reporting(0);

		  $a=$_SESSION['username'];
		  $query="SELECT * FROM candidate where cons in ( select cons from voter where adhar='$a') ";
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
      <div class="clearfix"></div>
        <div class="col-md-12">
          <div class="tile">
          
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
             
                  
                 
					
				
                    
					<th>CANDIDATE NAME</th>
					<th>PARTY</th>

					<th>SIGN</th>
					<th>CANDIDATE ID</th>
					
				
					<th>VOTE</th>
                    
					
                   
                  </tr>
                </thead>
                <tbody>
				<?php while($data = mysqli_fetch_array($result))
{?>

				 <tr>
					<td><?php echo $data['cname']; ?></td>
					<td><?php echo $data['cparty']; ?></td>
				
				<td><img src="img/<?php echo $data['img']; ?>"width="100" height="100"></td>
                   
					<td><form class="row"  action="" method="post"> 
					<input  type="text" name="p1" value="<?php echo $data['adhar']; ?>"  /></td>
					<td><input  type="text" name="userid" value="<?php echo $_SESSION['username']; ?>"  /></td>
					<td>
					
					
					<button class="btn btn-primary" type = "submit"  >VOTE</button>
					</form></td>
                 
                  </tr>
                    <?php } ?>
                
				
				
				
				
				
				
				
				
				
				
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