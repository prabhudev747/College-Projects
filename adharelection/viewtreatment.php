
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
    <header class="app-header"><a class="app-header__logo" href="index.html">E-TENDER</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
       
   
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
         
           <li><a class="dropdown-item" href="doctoreditprofile.php"><i class="fa fa-user fa-lg"></i> Profile</a></li>
            <li><a class="dropdown-item" href="doctorlogout.php"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
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
        <li><a class="app-menu__item " href="doctordashboard.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">DEPARTMENT PROFILE</span></a></li>
        <li><a class="app-menu__item " href="tenderinfo.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">ADD TENDER</span></a></li>
       
	   <li><a class="app-menu__item" href="appointmentnotification.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">TENDER REQUEST</span></a></li>
    
         <li><a class="app-menu__item" href="deleteappointmeny.php"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">DELETE TENDER REDUEST</span></a></li>
        <li><a class="app-menu__item" href="addtreatment.php"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">ADD TENDER FEEDBACK</span></a></li>
        
               <li><a class="app-menu__item active " href="viewtreatment.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">VIEW COMPANY PROFILE</span></a></li>
        
        <li><a class="app-menu__item " href="doctoreditprofile.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">UPDATE PROFILE</span></a></li>
        
	  
      </ul>
    </aside>
    </aside>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-file-text-o"></i>VIEW COMPANY INFORMATION</h1>
          
        </div>
		 <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">SEARCH COMPANY INFORMATION</h3>
            <div class="tile-body">
              <form class="row"  action="" method="post">
                <div class="form-group col-md-3">
                  <label class="control-label">ENTER USER</label>
                 <input class="form-control"type="text" name="p1">
                </div>
				
                
                <div class="form-group col-md-4 align-self-end">
                   
					 <button class="btn btn-primary" type = "submit" value ="Submit" name = "submit" >SEARCH</button>
                </div>
              </form>
            </div>
          </div>
        </div>
		</div>
		<?php
	 error_reporting(0);
	 
$mysql_hostname = "localhost";
$mysql_user     = "root";
$mysql_password = "gagana123";
$mysql_database = "etender";

$c=$_POST['p1'];

$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Oops some thing went wrong");
mysql_select_db($mysql_database, $bd) or die("Oops some thing went wrong");// we are now connected to database

$result = mysql_query("SELECT * from tenderfeedback where company_user_id = '$c'"); 



while($data = mysql_fetch_array($result))
{

?>
        
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <section class="invoice">
              <div class="row mb-4">
               
                <div class="col-6">
                  <h5 class="text-right">Last Tender Date:<?php echo $data['tdate']; ?> </h5>
                </div>
              </div>
              <div class="row invoice-info">
                <div class="col-4">TENDER FEEDBACK DETAILS
                  <address><strong><h1><?php echo $data['firstname']; ?>_<?php echo $data['lastname']; ?></h1></strong><br>Phone:<?php echo $data['phonenumber']; ?><br><?php echo $data['address']; ?><br><?php echo $data['specilisation']; ?></address>
                </div>
                
               
              </div>
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                      <tr>
					   <th>GOVT_USER_ID</th>
                        <th>COMPANY_USER_ID</th>
                      
						<th>POINTS</th>
						<th>STATUS</th>
                        <th>FEEDBACK</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
					  <td><?php echo $data['govt_user_id']; ?></td>
                        <td><?php echo $data['company_user_id']; ?> </td>
						
                        <td><?php echo $data['points']; ?></td>
						<td> <?php echo $data['status']; ?></td>
                        <td><?php echo $data['feedback']; ?> </td>
                       
                      </tr>
                     
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="row d-print-none mt-2">
                <div class="col-12 text-right"><a class="btn btn-primary" href="javascript:window.print();" target="_blank"><i class="fa fa-print"></i> Print</a></div>
              </div>
            </section>
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