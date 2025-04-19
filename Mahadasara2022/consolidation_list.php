<?php
include ("navbar.php");
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
    
      <script>
function print_me(str)
{
   // alert('str='+str);
    window.location.replace('print_statistics.php?data='+str);
//window.print();
}
    </script>
    
    
    
    
    
</head>
<body>


    
<?php

//session_start();
include 'dbcon.php';
//if (!isset($_SESSION['uid'])&&($_SESSION['utype']=="dc" ))
//{
//     echo "<script>window.location.replace('index.php')</script>";
//}
//else
{
     
    ?>
     <br>
    <form class="form-horizontal" method="post" action="<?php  $_SERVER['PHP_SELF'];?>">
<fieldset>

<!-- Form Name -->
<legend style="color: #FF5733" align='center'><b>PARTICIPATION STATISTICS</b>  </legend><br>
<?php
//student count
 $sql = "select count(sid)as stcount from student";
 $result = mysqli_query($con,$sql);
$rows = mysqli_fetch_array($result);
$student_count=$rows['stcount'];

//Participation count
//$sql = "select count(id)as ptcount from participant";
$sql = "select count(usn)as ptcount from consolidation_view" ;
     
    $result = mysqli_query($con,$sql);
$rows = mysqli_fetch_array($result);
$participant_count=$rows['ptcount'];

//Event count
$sql = "select count(eventid)as eventcount from events";
     
    $result = mysqli_query($con,$sql);
$rows = mysqli_fetch_array($result);
$eventcount=$rows['eventcount'];

//Biathlon participants count
  $sql="select count(bid) as ct from biathlon";
   $query = mysqli_query($con,$sql);
    $r = mysqli_fetch_array($query);
    $biathlon_count=$r['ct'];

  //Dogshow participants count
   $sql="select count(o_id) as ct from dogshow";
   $query = mysqli_query($con,$sql);
    $r = mysqli_fetch_array($query);
    $dogshow_count=$r['ct']; 


?>
<div class="container">
    <div class="row">
<table border="1" align='center'   width="100%" >
                                <thead>
                                <tr>
                                    <!--<th>Team-Id</th>-->
                                    <th>College</th>
                                    <th>Departments</th>
                                    <th>Events</th>
                                    <th>Registered Students</th>
                                    
                                     <th>Student Participants</th>
                                      <th>Biathlon Participants</th>
                                      <th>Dogs Participants</th>
                                      <th>Total Participants</th>
<!--                                     <th>Photo</th>                                      
                                    <th>Participant-2</th>
                                    <th>Contact Info</th>                                 -->
                                    <!--<th>Place</th>-->
                                    <!--<th>contactno</th>-->

                                </tr>
                                
                                <tr>
                                    <!--<th>Team-Id</th>-->
                                    <th><?php echo "MITM";  ?></th>
                                    <th><?php echo "8";  ?></th>
                                     <th><?php echo $eventcount+1  ?></th>
                                    <th><?php echo $student_count;  ?></th>
                                    
                                   
                                     <th><?php echo $participant_count  ?></th>
                                     <th><?php echo $biathlon_count*2  ?></th>
                                     <th><?php echo $dogshow_count  ?></th>
                                      <th><?php echo $participant_count+($biathlon_count*2)+$dogshow_count  ?></th>
                               </tr>
                                </thead>
                               
                                <tbody>
</table>
</div>
</div>
</div>
<br><br>
<legend style=" color: #FF5733" align='center'><b>Department wise participation</b>  </legend><br>




<table border="1" align='center'   width="50%" cellspacing="0">
    
                                <thead>
<?php                
                          //Department wise Participation count
//$sql = "select b.branchid,b.bname,count(id)as ptcount from participant p, student s,branch b where p.usn=s.usn and b.branchid=s.branchid group by b.branchid";
$sql = "select branchid,bname,count(usn)as ptcount from consolidation_view group by branchid";
//echo $sql;
     
    $result = mysqli_query($con,$sql);
  
    $deptname=array();
    $ct=1;
    echo "<tr>";
    $totalct=0;
while($rows = mysqli_fetch_array($result))
{
$bname=$rows['bname']; 
$dept_participant_count=$rows['ptcount'];     
$deptname['$bname']=$dept_participant_count;
      
     if($bname!="HUMANITIES" && $bname!="CHEMISTRY")
     {
                 echo "<th>".$bname."</th>";             
                                    
     }//end if()
     $totalct=$totalct+$dept_participant_count;
}//end while()
echo "<th>Total</th>";  

    echo "</tr><tr>";
    $result = mysqli_query($con,$sql);
while($rows = mysqli_fetch_array($result))
{
$bname=$rows['bname']; 
$dept_participant_count=$rows['ptcount'];     
$deptname['$bname']=$dept_participant_count;
      
     if($bname!="HUMANITIES" && $bname!="CHEMISTRY")
     {
                 echo "<th>".$dept_participant_count."</th>";             
                                    
     }//end if()
}//end while()
echo "<th>".$totalct."</th>";             
    ?>
                                    
</tr>
                                </thead>
                               
                                <tbody>
</table>
<br><br>
  <legend style=" color: #FF5733" align='center'><b>Event wise participation</b>  </legend> <br>                                 <!--
<!-- Select Basic -->

<div class="form-group">
  <label class="col-md-4 control-label" for="event">Select Event</label>
  <div class="col-md-4">
      <select id="event_type" name="event" class="form-control">
      <!--<option value="">Select Event</option>-->
      <option value="ALL">All Events</option>
       <?php

//code for retrieving events


 $sql = "select eventid,ename from events";
     
    $result = mysqli_query($con,$sql);
while ($rows = mysqli_fetch_array($result)) {

    $eventid=$rows['eventid'];
    $ename=$rows['ename'];
    
?>
       <option value="<?php echo $eventid ?>"><?php echo $ename ?></option>
       
            <?php
} //end while($rows = mysql_fetch_array($result))
      ?> 
    </select>
  </div>
</div>

<!--retrieve depts-->
<div class="form-group">
  <label class="col-md-4 control-label" for="event">Select Department</label>
<div class="col-md-4">
      <select id="event" name="branch" class="form-control" >
      <!--<option value="">Select Department </option>-->
      <option value="ALL"><?php echo "All Departments" ?></option>
      <?php
      
 $sql = "select branchid,bname from branch";
     
    $result = mysqli_query($con,$sql);
while ($rows = mysqli_fetch_array($result)) {
    $branchid=$rows['branchid'];
    $bname=$rows['bname'];
    if($bname != "HUMANITIES" && $bname !='CHEMISTRY')
    {
    ?>
    <option value="<?php echo $branchid ?>"><?php echo $bname ?></option>
    <?php
    }//end if()
}//end while()
?>
   
      </select>
</div>
</div>
<div align="center">
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
     // $event_type_id=$_POST['event_type'];
      $eventid=$_POST['event'];
      $branchid=$_POST['branch'];
      
       $inputeventid=$eventid;
      $inputbranchid=$branchid;
      
      
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
      $view_query="select usn,name,phone,bname,sem,photo,ename,status from consolidation_view where eventid='$eventid' and branchid='$branchid'";
      
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




                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                              <tr>
                                    <th>Sl.No.</th>
                                     <th>Photo</th>
                                    <th>USN</th>
                                   <th>Name</th>
                                    <th>Phone</th>
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
                                        <td><?php echo $r['phone']; ?></td>
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
                                
    <!-- Button (Double) -->
<div class="form-group" align='center'>
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-12">
  <?php //echo "<button id='submit' name='View' class='btn btn-primary' onclick='window.location.replace('print_statistics.php?eventid=".$inputeventid."'&branchid='".$inputbranchid."');>Print</button>"; ?>
    <button id="rules" name="rules" class="btn btn-primary" onclick="print_me(this.value)" value='<?php echo $inputeventid."-".$inputbranchid ?>'>Print Preview</button>
  </div>
</div> 
       <br>
       <br>  
                
                
                
 
                      
   <legend style=" color: #FF5733" align='center'><b>Department wise participation in Event: <span style='color:#00cc66;'><?php echo $ename ?></span></b>  </legend>




<table border="1" align='center'   width="10%" cellspacing="0">
    
                                <!--<thead>-->
<?php                
                          //Departmentwise Participation count


if($branchid=="ALL" && $eventid=='ALL')
  {
       
   echo "<tr>";
   echo "<th>EVENTS/BRANCH</th>";
   echo "<th>CSE</th>";
   echo "<th>ISE</th>";
   echo "<th>ECE</th>";
    echo "<th>CIVIL</th>";
    echo "<th>MECH</th>";
    echo "<th>MCA</th>";
    echo "<th>MBA</th>";
     echo "<th>FIRST YEAR BE</th>";
     echo "<th>Total</th></tr>";
     
 $event_list=array();
 $i=0;
     $getevents = "select eventid,ename from events";    
 $view_events=mysqli_query($con, $getevents);
 while($rows = mysqli_fetch_array($view_events))
 {
     $event_list[$i]=$rows['ename'];
     $i++;
 }
 
  $branch_list=array('CSE','ISE','ECE','CIVIL','MECH','MCA','MBA','FIRST YEAR BE');
//     $getbranch = "select branchid,bname from branch";    
// $view_branch=mysqli_query($con, $getbranch);
// $i=0;
// while($rows = mysqli_fetch_array($view_branch))
// {
//     $branch_list[$i]=$rows['bname'];
//     $i++;
// }
 
  

 $sql = "select branchid,bname,eventid,ename,count(usn)as ptcount from consolidation_view  group by branchid,eventid";
  $view_result=mysqli_query($con, $sql);
  //$totalrows=mysqli_num_rows($view_result);
  // $branch_event[$totalrows][3]=array();
  $branch_event=array(array());
  $i=0;
 while($rows = mysqli_fetch_array($view_result))
{
  $branch_event[$i][0]=$rows['bname'];
  $branch_event[$i][1]=$rows['ename'];
  $branch_event[$i][2]=$rows['ptcount'];
  $i++;
}
 $coltotal=array();
 for($y=0;$y<sizeof($branch_list);$y++)
 {
     $coltotal[$y]=0;
 }
 for($i=0;$i<sizeof($event_list);$i++)
 {
     $ename1=$event_list[$i];
 echo "<tr>";
 $rowtotal=0;
  echo "<td>".$ename1."</td>";
     for($j=0;$j<sizeof($branch_list);$j++)
     {
             $bname1=$branch_list[$j];
         
        
         $k=0;
         $flag=0;
         while($k< sizeof($branch_event))
         {
   if($ename1==$branch_event[$k][1] && $bname1==$branch_event[$k][0])  
   {    
    echo "<td>".$branch_event[$k][2]."</td>"; 
    $rowtotal=$rowtotal+$branch_event[$k][2];
    $coltotal[$j]+=$branch_event[$k][2];
    $flag=1;
    break;
   }
   else{
       $k++;
   }
         }//end while()
         //Dept entry not present
      if($flag==0)
      {
          echo "<td>-</td>"; 
      }
       
     }//end inner for()
     echo "<td>".$rowtotal."</td>";
     echo "</tr>";
     }//end outer for()
     echo "<tr>";
      echo "<th>Total</th>";
      $overall=0;
     for($p=0;$p<sizeof($coltotal);$p++)
     {
         if($coltotal[$p]!=0)
         {
             $overall+=$coltotal[$p];
         echo "<td>".$coltotal[$p]."</td>";
         }
         else{
             echo "<td>-</td>";
         }
     }
     echo "<td>".$overall."</td>";
     echo "</tr>";
    echo "</table>";     
       
       
       
       
       
       
     // $view_query="select usn,name,bname,sem,photo,status from consolidation_view";
  }//end if($branchid=="ALL" && $eventid=='ALL')
  

  else if($eventid!="ALL")
  {
       //$view_query="select usn,name,bname,sem,photo,status from consolidation_view where branchid='$branchid'";
     // $view_query="select usn,name,bname,sem,photo,status from consolidation_view where eventid='$eventid' and branchid='$branchid'";
   ?>   
     <!--<legend style=" color: #FF5733" align='center'><b>Department wise participation in Event: <span style='color:#00cc66;'><?php echo $ename ?></span></b>  </legend>-->




<table border="1" align='center'   width="10%" cellspacing="0">
    
                                <thead>
<?php                
                          //Departmentwise Participation count
$sql = "select branchid,bname,count(usn)as ptcount from consolidation_view where eventid='$eventid' group by branchid";
//echo $sql;
     
    $result = mysqli_query($con,$sql);
  
    $deptname=array();
    $ct=1;
    echo "<tr>";
while($rows = mysqli_fetch_array($result))
{
$bname=$rows['bname']; 
$dept_participant_count=$rows['ptcount'];     
$deptname['$bname']=$dept_participant_count;
      
     if($bname!="HUMANITIES" && $bname!="CHEMISTRY")
     {
                 echo "<th>".$bname."</th>";             
                                    
     }//end if()
}//end while()


    echo "</tr><tr>";
    $result = mysqli_query($con,$sql);
while($rows = mysqli_fetch_array($result))
{
$bname=$rows['bname']; 
$dept_participant_count=$rows['ptcount'];     
$deptname['$bname']=$dept_participant_count;
      
     if($bname!="HUMANITIES" && $bname!="CHEMISTRY")
     {
                 echo "<th>".$dept_participant_count."</th>";             
                                    
     }//end if()
}//end while()
    ?>
</tr>
                                </thead>
                               
                                <tbody>
</table>
<br>
                       
  <?php    
  }//end else
?>
      
                <br><br>
            </div>
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

