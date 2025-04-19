
<!DOCTYPE html>
<?php


include("auth.php"); //include auth.php file on all secure pages ?>



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
    <title>E-TENDER</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="index.html">E-TENDER</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <li class="app-search">
          <input class="app-search__input" type="search" placeholder="Search">
          <button class="app-search__button"><i class="fa fa-search"></i></button>
        </li>
        <!--Notification Menu-->
        <li class="dropdown"><a class
		="app-nav__item" href="#" data-toggle="dropdown" aria-label="Show notifications"><i class="fa fa-bell-o fa-lg"></i></a>
       
        </li>
        <!-- User Menu-->
       
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
          <p class="app-sidebar__user-name">WELCOME : <?php echo $_SESSION['username']; ?></p>  

        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item " href="doctordashboard.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">DEPARTMENT PROFILE</span></a></li>
        <li><a class="app-menu__item " href="tenderinfo.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">ADD TENDER</span></a></li>
       
	   <li><a class="app-menu__item" href="appointmentnotification.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">TENDER REQUEST</span></a></li>
    
         <li><a class="app-menu__item" href="deleteappointmeny.php"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">DELETE TENDER REDUEST</span></a></li>
        <li><a class="app-menu__item active" href="addtreatment.php"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">ADD TENDER FEEDBACK</span></a></li>
        
               <li><a class="app-menu__item " href="viewtreatment.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">VIEW COMPANY PROFILE</span></a></li>
        
        <li><a class="app-menu__item " href="doctoreditprofile.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">UPDATE PROFILE</span></a></li>
        
	  
      </ul>
    </aside>
    <main class="app-content">
	
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i>ADD TENDER DETAILS</h1>
         
        </div>
       
      </div>
	   <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="row">
              <div class="col-lg-6">
                <form action="treatmentdb.php" method="post">
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">COMPANY USER ID</label>
                    <input class="form-control" type="TEXT" aria-describedby="emailHelp" name="p1" required  placeholder="USER ID" >
                  </div>
				  <div class="form-group">
                    <label for="exampleInputEmail1">POINTS</label>
                    <input class="form-control" aria-describedby="emailHelp"type="range" value="0" min="0" max="10" name="p2" required >
                  </div>
				   <div class="form-group">
                    <label for="exampleInputEmail1">GOVT USER ID</label>
                    <input class="form-control" type="TEXT"  name="p11"  value="<?php echo $_SESSION['username']; ?>" readonly>
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">TENDER STATUS</label>
					<input class="form-control" type="radio" name="p4" value="GOOD" checked>GOOD<br>
  <input type="radio"class="form-control" name="p4" value="MODERATE">MODERATE<br>
  <input type="radio" class="form-control" name="p4" value="NEED TO IMPROVE"> NEED TO IMPROVE  
                   
                  </div>
                  <div class="form-group">
                    <label for="exampleTextarea">ADD TENDER FEEDBACK</label>
                    <textarea class="form-control" id="exampleTextarea"  name="p5" required  rows="3"></textarea>
                  </div>
                 
                 
				  
                
              </div>
		
              
           
          </div>
        </div>
      </div>
       </div>
         
		
		 <div class="tile-footer">
              <button class="btn btn-primary"   type="submit">Submit</button>
            </div>
			</div>
		</form>
    
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <script type="text/javascript" src="js/plugins/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="js/plugins/select2.min.js"></script>
    <script type="text/javascript" src="js/plugins/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript">
      $('#sl').click(function(){
      	$('#tl').loadingBtn();
      	$('#tb').loadingBtn({ text : "Signing In"});
      });
      
      $('#el').click(function(){
      	$('#tl').loadingBtnComplete();
      	$('#tb').loadingBtnComplete({ html : "Sign In"});
      });
      
      $('#demoDate').datepicker({
      	format: "dd/mm/yyyy",
      	autoclose: true,
      	todayHighlight: true
      });
      
      $('#demoSelect').select2();
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