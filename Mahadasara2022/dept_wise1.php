      <?php
      
session_start();
?>
      
      


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
                    x.open("POST", "dd_events.php?d=" + str, true);
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
                    x.open("POST", "call_students.php?d=" + str, true);
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
    <script>
function print_me(str)
{
   // alert('str='+str);
    window.location.replace('dept_participants_print.php?data='+str);
//window.print();
}
    </script>
    
    
    
    
    
</head>
<body style="background-color:#f7e6ff;">
<div>
<?php
include('statusheader.php');
?>
</div>

    
<?php

//session_start();
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
<legend style=" color: #FF5733" align='center'><b>View Participants</b>  </legend>

<!-- Select Basic -->

<div class="form-group">
  <label class="col-md-4 control-label" for="event_type">Select Event Type</label>
  <div class="col-md-4">
      <select id="event_type" name="event_type" class="form-control" onchange="call_events(this.value)">
      <option value="">Select Event Type</option>
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
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="event">Select Event</label>
<div class="col-md-4">
      <select id="event" name="event" class="form-control">
      <option value="">Select Event </option>
      <?php
      ?>
      </select>
</div>
</div>
<div class="col-md-6" align="right">
    &nbsp;&nbsp;&nbsp; <button id="view" name="view_participants" class="btn btn-primary" >View participants</button>
  </div>
<!--<br><br><br><br><br>
<div id="display_events"> display here</div>-->
    
    




<!-- Button -->
<!--<div class="form-group"> 
  <label class="col-md-4 control-label" for="save"></label>
  <div class="col-md-4">
    <button id="save" name="save" class="btn btn-primary">Save</button>
  </div>
</div>-->

</fieldset>
</form>
    
 
<?php
    
}//end else
  ?>  
    </body>
</html>



<?php


if (isset($_POST['view_participants'])) {

    include 'dbcon.php';
      $event_type_id=$_POST['event_type'];
    
    $input_event_type_id=$event_type_id;
      $eventid=$_POST['event'];
      $input_eventid=$eventid;
      $email=$_SESSION['uid'];
//echo $email;
      $sql = "select branchid from dept_coordinator where email='$email' ";
     // echo $sql;
       
      $result = mysqli_query($con,$sql);
      
  $rows = mysqli_fetch_array($result);
  $branchid=$rows['branchid'];
  
      $sql = "select branchid,bname from branch where branchid='$branchid' ";
     // echo $sql;
       
      $result = mysqli_query($con,$sql);
      
  $rows = mysqli_fetch_array($result);
  $bname=$rows['bname'];
  
  
  
    $query = mysqli_query($con,"select * from event_type where event_type_id='$event_type_id'");
                               $r = mysqli_fetch_array($query);
                                    $event_type_name=$r[1];
$sql2="select ename from events where eventid='$eventid'";  
$query1 = mysqli_query($con,$sql2);
                               $r = mysqli_fetch_array($query1);
                                    $ename=$r['ename'];
?>
  <legend style=" color: #FF5733" align="center"><?php echo "<b>".$bname."-".$event_type_name."-".$ename."</b>";?></legend>
    <div class="content-wrapper">
        <div class="container">
            <div class="container-fluid">
                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fa fa-table"></i>&emsp; Dept Wise Event List
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
  
  <?php
                                
                              
//$sql="SELECT photo,usn,name,ename,sem,bname from v9 where branchid='$branchid' and eventid='$eventid'";
                 //  $sql="SELECT usn,name,ename,sem,bname from v9 where branchid='$branchid' and event_type_id='$event_type_id' and status='1'";
                               // echo $sql;
                              
                              //  $query=mysqli_query($con,$sql);
                                ?>




                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                              <tr>
                                  <th>Sl.No.</th>
                                  <th>Photo</th>
                                    <th>USN</th>
                                    
                                    <th>Name</th>
                                    <th>Sem</th>
                                    <th>Contact no</th>
                                    <th>Event Name</th>
                                                                     
                                    <th>Status</th>


                                </tr>
                                </thead>
                               
                                <tbody>
                                <?php
                                
                              
                                
                        
                                
                              $sql="select usn,name,sem,phone,status,ename,eventid,event_type_id ,photo from v9 where eventid='$eventid' and branchid='$branchid'";
                               // $sql="select ename,gender,name,bname,email,phoneno from v7 where event_type_id='$event_type_id'";
                              
                                $query=mysqli_query($con,$sql);
                                $total= mysqli_num_rows($query);
                               // echo "<tr><td>".$query."</td></tr>";
                               ?>
                               <div class="card-header">
                               <b style="color: #0066ff;float:right;"> <?php echo "Total Partcipants:". $total ?></b>
                           </div>
              <?php
                               // echo "<tr><td>".$query."</td></tr>";
                                $slno=0;
                                while ($r=mysqli_fetch_array($query)) {
                                    ?>
                                    <tr>
                                         <td><?php $slno++;
                                         
                                         echo $slno; ?></td>
                                        <td><img src="<?php  echo $r['photo']?>" width="80" height="100"></td>
                                        <td><?php echo $r['usn']; ?></td>
                                        
                                        <td><?php echo $r['name']; ?></td>
                                        <td><?php echo $r['sem']; ?></td>
                                        <td><?php echo $r['phone']; ?></td>
                                         <td><?php echo $r['ename']; ?></td>
                                         <?php
                                         $eventid=$r['eventid'];
                                         $usn=$r['usn'];
                                        // $usn_eventid=$usn."-".$eventid;
                                         $status=$r['status'];
                                         $event_type_id=$r['event_type_id'];
                                         
                                      // if($event_type_id=='2' || $event_type_id=='4')
                                        // {
                                         
                                         if($status==0)
                                         {
                                        echo "<td><span style='background-color:#ffff00;'><b>Approval Pending</b></span></td>";                                         
                                        //echo "<td><input type='checkbox' name='c1[]' value='$usn'  /></td></tr>";
                                            // echo "<td><input type='checkbox' name='c1[]' value='$usn'  /></td></tr>";
                                     
                                       
                                         }
                                         else if($status==1)
                                         {
                                            // echo "<td><input type='checkbox' name='c1[]' value='$usn' checked /></td></tr>";                                         
                                        echo "<td><span style='background-color:#99ff99;'><b>Approved</b></span></td></tr>";                                         
                                          }
                                          else if($status==2)
                                         {
//                                             echo "<td><input type='checkbox' name='c1[]' value='$usn' checked /></td></tr>";                                         
                                              echo "<td><span style='background-color:#99ccff;'><b>Participated</b></span></td></tr>";                                         
                                       
                                          }
                                         //}//end if(event type_id)
                                        
                                        
                                         
                                }//end while
                                ?>             
                                  </tbody>
                               </table>
                    </div>
                </div>
                             
                 
                </div><!--      
                                
    
   

-->                          

                
                <br><br>
            </div>
        </div>
    </div>

  
      <!-- Button (Double) -->
<div class="form-group" align='center'>
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-8">
  <?php //echo "<button id='submit' name='View' class='btn btn-primary' onclick='window.location.replace('print_statistics.php?eventid=".$inputeventid."'&branchid='".$inputbranchid."');>Print</button>"; ?>
    <button id="rules" name="rules" class="btn btn-primary" onclick="print_me(this.value)" value='<?php echo $input_event_type_id."-".$input_eventid ?>'>Print Preview</button>
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

