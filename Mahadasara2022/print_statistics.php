                                        


<!DOCTYPE html>
<html>
<head>
<title>Mahadasara 2022</title>  
<link rel="shortcut icon" type="image" href="images/mahadasara logo.jpg">

<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0 />
              <meta name=" description content="" />
    <meta name="author" content=""/>
  
                                      
    <script type="text/javascript">
        
        function call_events(str)
        {
            //ajax call to retrievents.php
            //alert("selected eventid=>"+str);
            
            
             x = new XMLHttpRequest();
                    x.open("POST", "dd_events1.php?d=" + str, true);
                    x.send();
                    x.onreadystatechange = function ()
                    {
                        if (x.readyState == 4 && x.status == 200)
                        {
                            document.getElementById("event").innerHTML = x.responseText;
                        }
                    };
            
        }//end function call_events(str)()
        
        
        
        
        
        
        function call_students(str)
        {
            //ajax call to retrievents.php
           // alert("selected eventid=>"+str);
            
            
             x = new XMLHttpRequest();
                    x.open("POST", "call_students1.php?d=" + str, true);
                    x.send();
                    x.onreadystatechange = function ()
                    {
                        if (x.readyState == 4 && x.status == 200)
                        {
                            document.getElementById("display_events").innerHTML = x.responseText;
                        }
                    };
            
        }//end function call_students(str)()
        
        
        
        
        
        
        
        
        
        
        
        
        
         
            
        
        
        
        </script>
    <script>
function print_current_page()
{
window.print();
}
    </script>
    
    
    
    
    
    
    
</head>
<body>
<div>
<?php
include('homeheader.php');
?>
</div>

    
<?php

//session_start();
include 'dbcon.php';
//if (!isset($_SESSION['uid'])&&($_SESSION['utype']=="dc" ))
//{
//     echo "<script>window.location.replace('index.php')</script>";
//}
//else
//{
     
    ?>



<?php


//if (isset($_POST['view_participants']))
    {
        $data=$_REQUEST['data'];
        $a=explode("-", $data);
        $eventid=$a[0];
        $branchid=$a[1];

    include 'dbcon.php';
     // $event_type_id=$_POST['event_type'];
      //$eventid=$_POST['event'];
      //$branchid=$_POST['branch'];
     
      
      
      if($eventid!="ALL")
      {
      $query = mysqli_query($con,"select eventid,ename from events where eventid='$eventid'");
                               $r = mysqli_fetch_array($query);
                                    $ename=$r['ename'];
      }
      else{
          $ename="ALL EVENTS";
      }
      
      if($branchid!="ALL")
      {
      $query = mysqli_query($con,"select branchid,bname from branch where branchid='$branchid'");
                               $r = mysqli_fetch_array($query);
                                    $bname=$r['bname'];
      }
      else{
          $bname="ALL BRANCHES";
      }
      
      
     // $email=$_SESSION['uid'];
//echo $email;
     // $sql = "select branchid from dept_coordinator where email='$email' ";
     // echo $sql;
       
      //$result = mysqli_query($con,$sql);
      
  //$rows = mysqli_fetch_array($result);
  //$branchid=$rows['branchid'];
  
     // $sql = "select branchid,bname from branch where branchid='$branchid' ";
     // echo $sql;
       
      //$result = mysqli_query($con,$sql);
      
  //$rows = mysqli_fetch_array($result);
  //$bname=$rows['bname'];
  
  if($branchid=="ALL" && $eventid=='ALL')
  {
      $view_query="select usn,name,bname,sem,photo,ename,status from consolidation_view";
  }
  else if($branchid=="ALL" && $eventid!="ALL")
  {
      $view_query="select usn,name,bname,sem,photo,ename,status from consolidation_view where eventid='$eventid'";
  }
  else if($eventid=="ALL" && $branchid!="ALL")
  {
      $view_query="select usn,name,bname,sem,photo,ename,status from consolidation_view where branchid='$branchid'";
  }
  else if($eventid!="ALL" && $branchid!="ALL")
  {
       //$view_query="select usn,name,bname,sem,photo,status from consolidation_view where branchid='$branchid'";
      $view_query="select usn,name,bname,sem,photo,ename,status from consolidation_view where eventid='$eventid' and branchid='$branchid'";
      
  }
  
      
    $view_result = mysqli_query($con,$view_query);
    $total_event_participants=mysqli_num_rows($view_result);              
//$sql2="select ename from events where eventid='$eventid'";  
//$query1 = mysqli_query($con,$sql2);
//                               $r = mysqli_fetch_array($query1);
//                                    $ename=$r['ename'];
?>
<br>
  <legend style=" color: #FF5733" align="center"><?php echo "<b>".$bname."&nbsp <span style='color:#00cc66;'>".$ename."</span> &nbsp <span style='color:#0066ff;'> Total Participants-".$total_event_participants."</span></b>";?></legend>
    <div class="content-wrapper">
        <div class="container">
            <div class="container-fluid">
                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fa fa-table"></i>&emsp; Participant List
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
  
  <?php
                                
                              

//                   $sql="SELECT usn,name,ename,sem,bname,photo from v9 where branchid='$branchid' and event_type_id='$event_type_id' and status='1'";
//                               // echo $sql;
//                              
//                                $query=mysqli_query($con,$sql);
                                ?>




                                <table class="table table-bordered"  width="100%" cellspacing="0">
                                <thead>
                              <tr>
                                    <th>Sl.No.</th>
                                     <th>Photo</th>
                                    <th>USN</th>
                                   <th>Name</th>
                                    <th>Branch and Sem</th>
                                    <th>Event</th>
                                    <th>Enroll Status</th>
                                    
                                
                                   
                                                                     
                                    


                                </tr>
                                </thead>
                               
                                <tbody>
                                <?php
                                
                               
                                  $slno=1;
                                while ($r=mysqli_fetch_array($view_result)) {
                                    
                                    ?>
                                    
                                    <tr>
                                        <td><?php echo $slno; $slno++; ?></td>
                                        <td><img src="<?php  echo $r['photo']?>" width="80" height="100"></td>
                                        <td><?php echo $r['usn']; ?></td>
                                        <td><?php echo $r['name']; ?></td>
                                        <td><?php echo $r['bname']."-".$r['sem']."th sem";?></td> 
                                      
                                        
                                        
                                        <td><?php echo $r['ename']; ?></td>
                                        
                                        <?php 
                                        
                                        $status=$r['status'];
                                        if($status=='0')
                                        {
                                        echo "<td><span style='background-color:#ffff00;'><b>Approval Pending</b></span></td></tr>";                                             
                                        }
                                        else if($status=='1')
                                        {
                                            echo "<td><span style='background-color:#99ff99;'><b>Approved</b></span></td></tr>";                                         
                                        }
                                        else if($status=='2')
                                        {
                                         echo "<td><span style='background-color:#99ccff;'><b>Participated</b></span></td></tr>";                                            
                                        }
                                }//end while()
                                      ?>  
                                        
                                  </tbody>
                               </table>
                    </div>
                </div>
                             
                 
                </div>     
                                
    
 
                      
  
                       
  <?php    
  //}//end else
?>
      
                <br><br>
            </div>
        </div>
    </div>

    <!-- Button (Double) -->
     <!-- Button (Double) -->
<div class="form-group" align='center'>
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-8">
    <button id="submit" name="View" class="btn btn-primary" onclick="print_current_page()">Print</button>
    <!--<button id="rules" name="rules" class="btn btn-primary" onclick="fun()">Rules</button>-->
  </div>
</div>  
  
  
  
<!--<div class="form-group" align='center'>
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-8">
    <button id="submit" name="View" class="btn btn-primary" onclick="print_current_page()">Print</button>
    <button id="rules" name="rules" class="btn btn-primary" onclick="fun()">Rules</button>
  </div>
</div>-->
                            

    
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
}//end if(isset($_POST['Submit'))
                        //}                                   
?>

    