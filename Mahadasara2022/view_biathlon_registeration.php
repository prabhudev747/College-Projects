<?php
include ("navbar.php");
?>

<!DOCTYPE html>
<html>

<head>
    
    <script>
      
      
      function call_home()
      {
          //alert(" home()");
       //    window.location.replace('admin_home.php'); 
          
          
      }
        
        </script>
    
    <script>
        function fun()
        {
            alert("Rules:\n1.Sprint distance - 5 km run, 10 km cycling.\n2.The team should consist of two members’- one for run and one for cycling group can be of any combination.\n3.It is team choice to run and cycling depending upon their convenience.\n4.Running from Kuvempu Statue, University of Mysore to J K Ground.\n5.Cycling – J K ground to Maharaja Institute of Technology Mysore.\n6.The first 5km would be running the next 10km would be cycling.\n7.The team which comes first and touches the final point declared as winners followed by runners.\n8.All participants must come the white top.");
           //document.getElementById("rules").style.display = "block";
    
        }
        </script>
    
    
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
<!--<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/customestyle.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
    <style>
        .glyphicon-color, .textcolor {
            color: white;
        }
    </style>
    <script>
function print_current_page()
{
window.print();
}
    </script>
    
    
</head>



<body>
    
    <center><h2 style=" background-image: linear-gradient(43deg, #4158D0 0%, #C850C0 46%, #FFCC70 100%); color:white;height:50px;padding-top:6px">Biathlon Registration</h2></center>
   
        
        <div>
<!--<div>
            <img src="images/2022logo.jpeg" width="100%" style="max-height: 200px;">
        </div>-->
   
        
<form align='center' class="form-horizontal" method="post" action="download_biathlon.php"  enctype="multipart/form-data">
<fieldset>

<!-- Form Name -->
<!--<legend>First Participant</legend>-->
<legend style=" color: #FF5733" align='center'><b>View Biathlon Registration</b>  </legend>

<!-- Text input-->
<div class="form-group" align='center'>
    <label class="col-md-4 control-label" for="name1"><b>Email</b></label>  
  <div class="col-md-4">
  <input  id="email" name="email" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

            
<!-- Button (Double) -->
<div class="form-group" align='center'>
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-8">
    <button id="submit" name="View" class="btn btn-primary">View</button>
    <button id="rules" name="rules" class="btn btn-primary" onclick="fun()">Rules</button><br>
    <br><img src="images/scan.jpeg" style="width:30%;height:30%;"><br><u>OR</u>
    <br><a href="https://chat.whatsapp.com/EtkevuQ2DSUIZjNQ9fOGI6">Click Here</a><br>Biathlon Registered Team Member to join WhatsApp Group
  </div>
</div>

</fieldset>
</form>

            <br>       
    <center><h2>Route Map</h2><br><img src="images/map.jpeg" style="width:50%;"></center> 
    

        </div>
    </body>
</html>


    <!--<button onclick="print_current_page()">Print this page</button>-->

