<?php
include("auth.php"); //include auth.php file on all secure pages 
?>
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
    <title>AADHAAR-ELECTION</title>
  </head>
  <body class="app sidebar-mini">
    <?php
	require('db.php');

    // If form submitted, insert values into the database.
    if (isset($_POST['adhar'])){
		
		$name = stripslashes($_REQUEST['name']); // removes backslashes
		$name = mysqli_real_escape_string($con,$name); //escapes special characters in a string
		$dob = stripslashes($_REQUEST['dob']); // removes backslashes
		$dob = mysqli_real_escape_string($con,$dob); //escapes special characters in a string
		$cons = stripslashes($_REQUEST['cons']); // removes backslashes
		$cons = mysqli_real_escape_string($con,$cons); //escapes special characters in a string
		$adhar = stripslashes($_REQUEST['adhar']); // removes backslashes
		$adhar = mysqli_real_escape_string($con,$adhar); //escapes special characters in a string
		$img = stripslashes($_REQUEST['img']); // removes backslashes
		$img = mysqli_real_escape_string($con,$img); //escapes special characters in a string
		
	//Checking is user existing in the database or not
$query = mysqli_query($con, "SELECT * FROM voter WHERE adhar = '".$adhar. "'");
	
  if(mysqli_num_rows(  $query) > 0){
   echo "<div class='form'><h3>!!!!!!!!!!! user name already exist please user other.</h3><br/>Click here to try again <a href='adduser.php'>Register</a></div>";
}else{
        $query = "INSERT into `voter` (name, dob, cons, adhar,img) VALUES ('$name','$dob','$cons','$adhar','$img')";
        $result = mysqli_query($con,$query);
}
        if($result){
            echo "<div class='form'><h3>Voter registered successfully.</h3><br/>Click here to <a href='adduser.php'>ADD MORE USER</a></div>";
        }
    }else{
?>
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="">AADHAAR</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        
   
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
         
       <!--     <li><a class="dropdown-item" href="usereditdash.php"><i class="fa fa-user fa-lg"></i> Edit Profile</a></li> -->
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
        
        <ul class="app-breadcrumb breadcrumb">
         <div> 
          <h1><i class="fa fa-dashboard"></i>Profile </h1>
        </div> 
        </ul>
      </div>
  
      <div class="clearfix"></div>
        <div class="col-md-12">
          <div class="tile">
          <button class="close" type="button" data-dismiss="alert">×</button>
            <div class="table-responsive">
 <form class="form-horizontal" action="" method="post">             
			 <table class="table">
			   <thead>
                  <tr>
             
              
                 
					
	
                  <th>USER NAME</th>
				  
					<th>DOB</th>
					<th>USER IMAGE</th>
					<th>CONSTITUENCY</th>
						<th>AADHAAR NUMBER</th>
										
                   
                  </tr>
                </thead>
                <tbody>
				 
				  <tr>
					<td><input class="form-control" type="text" name="name" required></td>
					<td><input class="form-control" type="date"  name="dob" required></td>
					<td><input class="form-control" type="file"  name="img" required></td>
					<td><select class="form-control" name="cons">
					<option value="NANJANAGUDU">NANJANAGUDU</option>
					<option value="PIRIYAPATTANA">PIRIYAPATTANA</option>
					<option value="T-NARASIPURA">T-NARASIPURA</option>
					<option value="H-D-KOTE">H-D-KOTE</option>
					<option value="MYSORE">MYSORE</option>
					<option value="MANDYA">MANDYA</option>
					</select>
					</td>
					<td><input type="text" class="form-control" maxlength="12" min="12" name="adhar" required></td>
						
					
					
                               <td><button class="btn btn-primary" type = "submit" >ADD USER</button></td>
                  </tr>
 
					
                </form>
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