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
    <title>Pocket Clinic</title>
  </head>
  <body class="app sidebar-mini">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="index.html">Pocket Clinic</a>
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
        <li><a class="app-menu__item" href="dashboard.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Profile</span></a></li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Book appointment</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
			<li><a class="treeview-item" href="specilalist.php"><i class="icon fa fa-circle-o"></i>Find and BOOK Specialist</a></li>
            
			<li><a class="treeview-item" href="apstatus.php"><i class="icon fa fa-circle-o"></i>Appointment status</a></li>
            <li><a class="treeview-item" href="deletephp.php"><i class="icon fa fa-circle-o"></i>Cancel appointment</a></li>
  
          </ul>
        </li>
        
       
		 <li><a class="app-menu__item" href="treatmenthistory.php"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">Treatment history</span></a></li>
        
        <li><a class="app-menu__item active" href="nearby.php"><i class="app-menu__icon fa fa-file-text"></i><span class="app-menu__label">Near by earch</span></a></li>
		
 <li><a class="app-menu__item" href="emmergency.php"><i class="app-menu__icon fa fa-file-text"></i><span class="app-menu__label">EMMERGENCY REQUEST</span></a></li>
		 
      </ul>
    </aside>
    <main class="app-content">
      <div class="app-title">
        
        
      </div>
      <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">SEARCH NEARBY HEALTH SERVICE</h3>
            <div class="tile-body">
              <form class="row"  action="" method="post">
                <div class="form-group col-md-3">
                  <label class="control-label">SELECT SERVICE TYPE</label>
                  
              <select class="form-control" id="demoSelect" name="p1">
<option value="NULL">SELECT SERVICE TYPE</option>
              <option value="MEDICAlSTORE">MEDICAl STORE</option>
              <option value="LAB">LAB-DIAGNOSYS-CENTER</option>
			  <option value="HOSPITAL">HOSPITAL</option>
              <option value="NURSINGSERVICE">NURSINGSERVICE</option>
			  <option value="BLOODBANK">BLOOD BANK</option>
            </select>
                </div>
 <div class="form-group col-md-3">
                  <label class="control-label">SELECT DISTANCE</label>
<select class="form-control" id="demoSelect" name="p2">
                  <option value="NULL">SELECT DISTANCE</option>
              
              <option value="5">5 KM</option>
              <option value="10">10 KM</option>
			  
            </select>
                </div>
               
                <div class="form-group col-md-4 align-self-end">
                   
					 <button class="btn btn-primary btn-lg btn-block" type = "submit" value ="Submit" name = "submit" >SEARCH</button>
                </div>
              </form>
            </div>
          </div>
        </div>
		   <?php
	 error_reporting(0);
	  if(isset($_POST["submit"])){
$mysql_hostname = "localhost";
$mysql_user     = "root";
$mysql_password = "root";
$mysql_database = "pocketclinic";
$a=$_POST['p1'];
$b=$_POST['p2'];

if($b==5)
{
$f=0.02;
$j=0.02;
}
else
{
$f=0.06;
$j=0.06;
}

$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Oops some thing went wrong");
mysql_select_db($mysql_database, $bd) or die("Oops some thing went wrong");// we are now connected to database

$result = mysql_query("SELECT * FROM businessinfo where btype='$a'"); // selecting data through mysql_query()



while($data = mysql_fetch_array($result))
{
$q=12.316445;
$w=76.614175;
$c=$data['latitude'];
$d=$data['longitude'];
$p=$w-$d;
$o=$q-$c;
$k=abs($p);
$h=abs($o);



if($k<$f&&$h<$j)
{




?>
      <div class="clearfix"></div>
        <div class="col-md-12">
          <div class="tile">
          
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
             
                  
                 
					<th>Direction</th>
					
					<th>OwnerID</th>
					<th>User ID</th>
<th>Send message</td>
                    <th> BOOK APPOINTMENT</th>
                   
                  </tr>
                </thead>
                <tbody>
				 <h3 class="tile-title"><?php echo $data['nob']; ?> </h3>
				
				 <label class="col-form-label col-form-label-lg" for="inputLarge"><?php echo $data['firstname']; ?><?php echo $data['lastname']; ?> </label><p>Phone :<a href="https://www.truecaller.com/search/in/<?php echo $data['phonenumber']; ?>" target="_blank"><?php echo $data['phonenumber']; ?></a>
                  <tr>
					
					<td><a href="https://www.google.co.in/maps/dir/12.316445,76.614175/<?php echo $data['latitude'];?>,<?php echo $data['longitude'];?>" target="_blank">DIRECTION</a></td> 
                   
					<td><form class="row"  action="userdb5.php" method="post"> 
					<input  class="form-control" type="text" name="p1" value="<?php echo $data['userID']; ?>"  /></td>
					<td><input  class="form-control" type="text" name="p2" value="<?php echo $_SESSION['username']; ?>"  /></td>
					<td><input  class="form-control form-control-lg" id="inputLarge" type="text" name="p3"  row=2 /></td>
					<td>
					
					
					<button class="btn btn-primary" type = "submit"  >Send Message </button>
					</form></td>
                 
                  </tr>
               
                
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <?php } } }?>
	   
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