

<!DOCTYPE html>
<html>

<head>
    
    <script>
      
      
      function call_home()
      {
          //alert(" home()");
        //   window.location.replace('admin_home.php'); 
          
          
      }
      function call_logout()
            {
             //   alert("view events");
                window.location.replace('logout.php'); 
        //  window.location.href='view_participants.php'; 
            
            
            }//end call_viewparticipants()
      
            
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
        .button1 {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 4px;
  width:150px;
}
.button2 {
  background-color: blue; /* blue */
  border: none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 4px;
}
.button3 {
  background-color: orange; /* orange */
  border: none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 4px;
}

        
    </style>
    
</head>


<body style="background-color:#e6e6ff;">
    <div>
        <?php
        include ('statusheader1.php');
        ?>
    </div>
         <button id="logout" name="logout" class="btn btn-success" onclick="call_logout()" style="float:right; padding-right:45px;">Logout</button>      

<!--      <div class="col-md-3" align="left">
        <button id="view" name="view" class="btn btn-warning" onclick="call_home()" >Home</button>
  </div>-->
        <form method="POST" class="form-horizontal" action="ec_approve_participation.php" >
  <?php
include 'dbcon.php';
session_start();

if (!(isset($_SESSION['loggedin']) && ($_SESSION['loggedin']=="true" ) && isset($_SESSION['email']) && isset($_SESSION['usn']) ))
{
     echo "<script>window.location.replace('index.php')</script>";
}

else
{
    

?>
     
 
    
 
    <!-- Select Basic -->
   
    
  
    
 <div class="form-group" align="center">
  
  <div class="col-md-4">

    
       <?php

//code for retrieving event types

 //include 'dbcon.php';
 
 ?>

    <!-- Button -->
<!--<div class="form-group">
  <label class="col-md-4 control-label" for="view"></label>
-->  
<!--<div class="col-md-3" align="right">
    <button id="view" name="view" class="btn btn-primary" >View Participants</button>
  </div>
</div>-->
  </div>
 </div>
    <?php
    include 'dbcon.php';
    
     $email=$_SESSION['$email'];
     //echo $email;
    //$email="s@gmail.com";
     ?>
     <legend style=" color: #FF5733"><b>Welcome Student <?php echo $email?> </b>  </legend>
     <div align="center">
            <legend style=" color: #FF5733">   View Events Registered</legend>
</div>
            <?php
     //echo $email;
   // $sql = "select usn from student where email='$email'";
    //echo $sql;
    //$result = mysqli_query($con,$sql);
//$rows = mysqli_fetch_array($result);
 //echo $rows;
//$eventid=$rows['eventid'];
//$ename=$rows['ename'];
//echo $eventid." ".$ename;
    
      //$event_type_id=$_POST['event_type'];
                                
//}                 
    ?>
   
    
  

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
 <!--<legend style=" color: #FF5733" align="center"><?php echo "<b>".$ename."</b>";?></legend>-->
    <div class="content-wrapper">
        <div class="container">
            <div class="container-fluid">
                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fa fa-table"></i>&emsp;Event List
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>Event_Name</th>

                                    <th>Status</th>
                                      <!--<th>Event Type</th>-->
                                      <!--<th>Gender</th>-->
                                  


                                </tr>
                                </thead>
                               
                                <tbody>
                                <?php
                                
                              
                                
                        
                                $sql = "select usn from student where email='$email'";
                            
    
    $result = mysqli_query($con,$sql);
    $r = mysqli_fetch_array($result);
    $usn=$r['usn'] ;

                             
                                //$sql="SELECT ename from v6 where usn='4mh20mca001'";
                                //echo $sql;
                                $sql="SELECT ename,status from v8 where usn='$usn'";
                                //echo $sql;
                                $query=mysqli_query($con,$sql);
                                while ($r = mysqli_fetch_array($query)) 
                                {
                                    ?>
                                    <tr>
                                        <td>
                                        <?php 
                                       // $usn=$r['usn'];
                                       echo $r['ename']; 
                                
                                       ?>
                                       </td>
                                        <td>
                                        <?php 
                                       // $usn=$r['usn'];
                                       if($r['status']==0)
                                       {
                                          echo "<button class='button3'>Approval Pending</button>";
                                       }
                                       elseif($r['status']==1)
                                       {
                                       echo "<button class='button1'>Eligible to play</button>";
                                       }
                                       else{
                                        echo "<button class='button2'>Participated</button>";
                                       }
                                }
                                
                                       ?>
                                       
                                       </td>
                                       
                                         
                                
                                  
                                
                                </tbody>
                                <?php
                                }
                                ?>
                                 
                            </table>
                        </div>
                    </div>
    
    
             <br><br>
            </div>
        </div>
    </div>
    
        
    
    
 
    
    
</form>
   
           <?php





?>

</body>

</html>






                
       






    
     <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
        <div class="container">
            <div class="text-center">
                <small></small>
            </div>
        </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
   
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="vendor/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="vendor/sb-admin-datatables.min.js"></script>
    
   <?php 
   // echo "<script>window.location.replace('view_events2.php')</script>";
//}//end if(isset($_POST['Submit'))

?>





