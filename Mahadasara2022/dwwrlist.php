<!DOCTYPE html>
<html>

<head>
<title>Mahadasara 2022</title>  
<link rel="shortcut icon" type="image" href="images/mahadasara logo.jpg"> 
    <script>
      
      
      function call_home()
      {
          //alert(" home()");
           window.location.replace('dept_cohome.php'); 
          
          
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
    
</head>


<body style="background-color:#f7e6ff;">
<div>
<?php
include('statusheader.php');
?>
</div>

       
    
        <?php

session_start();
include 'dbcon.php';
if (!isset($_SESSION['uid'])&&($_SESSION['utype']=="dc" ))
{
     echo "<script>window.location.replace('index.php')</script>";
}
else
{
     
    ?>
     <legend style=" color: #FF5733" align="left"><?php echo "<b> Welcome User: ".$_SESSION['uid']."</b>";?></legend>
    <form class="form-horizontal" method="post" action="<?php  $_SERVER['PHP_SELF'];?>">
<fieldset>

<!-- Form Name -->
<legend style>View Dept wise winner & runner  list</legend>

<!-- Select Basic -->

<div class="form-group">
  <label class="col-md-4 control-label" for="event_type">Select Event Type</label>
  <div class="col-md-4">
      <select id="event_type" name="event_type" class="form-control" onchange="call_events(this.value)">
      <br>
      <option value="1">Select Event Type</option>
       <?php

//code for retrieving event types


 $sql = "select event_type_id,event_type_name from event_type";
     
    $result = mysqli_query($con,$sql);
while ($rows = mysqli_fetch_array($result)) {

    $event_typeid=$rows[0];
    $event_typename=$rows[1];
    
?>
       <option value="<?php echo $event_typeid ?>"><?php echo $event_typename ?></option>
       
            <?php
} //end while($rows = mysql_fetch_array($result))
      ?> 
    </select>
    <!-- Button -->
<!--<div class="form-group">
  <label class="col-md-4 control-label" for="view"></label>
-->  
<div class="col-md-3" align="right">
    <br>
    
    <button id="view" name="view" class="btn btn-primary" >Search</button>
  </div><!--
</div>-->
  </div>
 </div>
    
    
  
    
</form>
   

</body>

</html>

  <?php

}//end else



?>
    

<?php
if (isset($_POST['view'])) {

    include 'dbcon.php';
      $event_type_id=$_POST['event_type'];
      
      $email=$_SESSION['uid'];
//echo $email;
      $sql = "select branchid from dept_coordinator where email='$email' ";
     // echo $sql;
       
      $result = mysqli_query($con,$sql);
      
  $rows = mysqli_fetch_array($result);
  $branchid=$rows['branchid'];
      
                                
                                $query = mysqli_query($con,"select * from event_type where event_type_id='$event_type_id'");
                             $r = mysqli_fetch_array($query);
                                    $event_type_name=$r[1];

                                //}//end while();
    
    ?>
<legend style=" color: #FF5733" align="center"><?php echo "<b>".$event_type_name."</b>";?></legend>
    <div class="content-wrapper">
        <div class="container">
            <div class="container-fluid">
                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fa fa-table"></i>&emsp; WINNER List
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>usn</th>
                                    <th>Name</th>
                                    <th>Event Name</th>
                                    <th>sem</th>
                                  <th>bname</th>
                                   
                                  


                                </tr>
                                </thead>
                               
                                <tbody>
                                <?php
                                
                              
                                
                       $sql= "select winner_branchid,eventid,event_type_id,winner_usn from events where event_type_id='$event_type_id' and winner_branchid='$branchid' "; 
                                
                                

                               // $sql="SELECT winner_usn,name,ename,winner_branchid from V13 where event_type_id=$event_type_id";
                                //echo $sql;
                              
                                $query=mysqli_query($con,$sql);
                               
                                        echo $sql;
                                while ($r= mysqli_fetch_array($query)) 
                                {
                                    //group event fetch from v8(participation with status=2)
                                    if($r['winner_usn']=="")
                                    {
                                        $eventid=$r['eventid'];
                                    
                                    $sql1="select usn,name,ename,sem,bname from v8 where branchid='$branchid' and eventid='$eventid' and status='2'";
                                    $result1= mysqli_fetch_array($sql1);
                                    while($r1=mysqli_fetch_array($result1))
                                    {
                                    ?>
                                     <tr>
                                    <td><?php echo $r1['usn']; ?></td>
                                    <td><?php echo $r1['name']; ?></td>
                                    <td><?php echo $r1['ename']; ?></td>
                                    <td><?php echo $r1['sem']; ?></td>
                                     <td><?php echo $r1['bname']; ?></td>
         
                                </tr>
                                    <?php
                                    }//end while()
                                    }//end if()
                                    else {
                                          $eventid=$r['eventid'];
                                          $winner_usn=$r['winner_usn'];
                                          
                                    $sql2="select usn,name,ename,sem,bname from v8 where branchid='$branchid' and eventid='$eventid' and status='2' and usn='$winner_usn'";
                                    echo $sql2;
                                    $result2= mysqli_query($sql2);
                                    while($r2=mysqli_fetch_array($result2))
                                    
                                    
                                ?>
                                <tr>
                                    <td><?php echo $r2['usn']; ?></td>
                                    <td><?php echo $r2['name']; ?></td>
                                    <td><?php echo $r2['sem']; ?></td>
                                    <td><?php echo $r2['bname']; ?></td>
                    
         
                                </tr>
                                
                            <?php
                                }//end else
                            }//end while()
                            ?>
                            </tbody>
                             
                        </table>
                    </div>
                </div>
                                      
                </div>
 <?php //}
                                ?>
                                
                              
                                
                        
                                
                                

                
                <br><br>
            </div>
        </div>
    </div><?php
//if (isset($_POST['view']) {

    include 'dbcon.php';
      $event_type_id=$_POST['event_type'];
                                
                                $query = mysqli_query($con,"select * from event_type where event_type_id='$event_type_id'");
                                while ($r = mysqli_fetch_array($query)) {
                                    $event_type_name=$r[1];

                                }
    
    ?>
<legend style=" color: #FF5733" align="center"><?php echo "<b>".$event_type_name."</b>";?></legend>
    <div class="content-wrapper">
        <div class="container">
            <div class="container-fluid">
                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fa fa-table"></i>&emsp;  RUNNER List
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>usn</th>
                                    <th>Name</th>
                                    <th>Event Name</th>
                                    <th>branch</th>
                                  
                                   
                                  


                                </tr>
                                </thead>
                               
                                <tbody>
                                <?php
                                
                              
                                
                        
                                
                                

                                $sql="SELECT runner_usn,name,ename,runner_branchid from win where event_type_id=$event_type_id";
                                //echo $sql;
                              
                                $query=mysqli_query($con,$sql);
                                while ($r = mysqli_fetch_array($query)) 
                                {
                                ?>
                                <tr>
                                    <td><?php echo $r[0]; ?></td>
                                    <td><?php echo $r[1]; ?></td>
                                    <td><?php echo $r[2]; ?></td>
                                    <td><?php echo $r[3]; ?></td>
                    
<!--         
                                </tr>
                            <?php
                            }//end while()
                            ?>
                            </tbody>
                             
                        </table>
                    </div>
                </div>
                                      
                </div>
 <?php //}
                                ?>
                                
                              
                                
                        
                                
                                

                
                <br><br>
            </div>
        </div>
    </div>
        

                        

                            

    
     <!-- /.container-fluid
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
}//end if(isset($_POST['Submit'))
                       // }                                     
?>