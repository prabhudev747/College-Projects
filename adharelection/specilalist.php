<?php


include("auth.php");  ?>

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
    <title>Pocket Clinic</title>
  </head>
  <body class="app sidebar-mini">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="index.html">E Tender</a>
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
        <li><a class="app-menu__item" href="dashboard.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">PROFILE</span></a></li>
         
        		 <li><a class="app-menu__item" href="specilalist.php"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">FIND TENDER</span></a></li>
		 <li><a class="app-menu__item" href="apstatus.php"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">TENDER STATUS</span></a></li>
		 <li><a class="app-menu__item" href="deletephp.php"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">CANCEL TENDER</span></a></li>

        
		 <li><a class="app-menu__item" href="treatmenthistory.php"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">TENDER HISTORY</span></a></li>
        <li><a class="app-menu__item" href="currentstatus.php"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">ADD CURRENT STATUS</span></a></li>

	
 		 
      </ul>
    </aside>
    <main class="app-content">
      <div class="app-title">
        
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="">SEARCH SPECIALISED DOCTOR AND BOOK-APPOINMENT</a></li>
        </ul>
      </div>
      <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">SEARCH TENDER HERE!!!</h3>
            <div class="tile-body">
              <form class="row"  action="" method="post">
                
                <div class="form-group col-md-3">
         
<select class="form-control" name="ppp" required >
			  <option value="NULL">SELECT TENDER TYPE</option>
              <option value="ORIGINAL-GENERAL">ORIGINAL-GENERAL</option>
              <option value="ORIGINAL-GT">ORIGINAL-GT</option>    
              <option value="ORIGINAL-BC">ORIGINAL-BC</option>
              <option value="CORROGENDUM">CORROGENDUM</option>
       
      
            </select>
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
	  if(isset($_POST["submit"])){
		  $a=$_POST['ppp'];
		  $query="SELECT * FROM tenderinfo where tender_type='$a'";
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
      <div class="clearfix"></div>
        <div class="col-md-12">
          <div class="tile">
          
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
             
                  
                 
					
				
                    
					<th>bid_closing</th>
					<th>tender_issuer</th>

					<th>tender_type</th>
					<th>valuesrs</th>
                    <th>tender_details</th>
					<th>Direction</th>
                    <th>Dept ID</th>
					<th>My ID</th>
                    <th>Apply Tender</th>
					
                   
                  </tr>
                </thead>
                <tbody>
				 <h3 class="tile-title"><?php echo $data['tender_nmae']; ?><?php echo $data['tender_number']; ?></h3>
				
				 <label class="col-form-label col-form-label-lg" for="inputLarge"><?php echo $data['dept_name']; ?> </label><p>Phone :<a href="https://www.truecaller.com/search/in/<?php echo $data['phone']; ?>" target="_blank"><?php echo $data['phonenumber']; ?></a>
                  <tr>
					<td><?php echo $data['bid_closing']; ?></td>
					<td><?php echo $data['tender_issuer']; ?></td>
				
					<td><?php echo $data['tender_type']; ?></td>
					<td><?php echo $data['valuesrs']; ?></td>
					<td><?php echo $data['tender_details']; ?></td>
					<td><a href="https://www.google.co.in/maps/dir//'<?php echo $data['address'];?>" target="_blank">DIRECTION</a></td> 
                   
					<td><form class="row"  action="userdb.php" method="post"> 
					<input  type="text" name="p1" value="<?php echo $data['dept_id']; ?>"  /></td>
					<td><input  type="text" name="p2" value="<?php echo $_SESSION['username']; ?>"  /></td>
					<td>
					
					
					<button class="btn btn-primary" type = "submit"  >Apply Tender</button>
					</form></td>
                 
                  </tr>
               
                
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <?php } }?>
	   
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