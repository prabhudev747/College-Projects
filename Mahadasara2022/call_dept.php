<html>

<head>
    
    <script>
      
      
      function call_home()
      {
          //alert(" home()");
          // window.location.replace('admin_home.php'); 
          
          
      }
        
        </script>
    
    
    
    
    
    


<body>
<?php

session_start();
include 'dbcon.php';
$eventid=$_REQUEST['d'];
//echo $event_type_id;
//echo "call stdeunt.php";
$email=$_SESSION['uid'];
$sql="select dept_cid,branchid from dept_coordinator where email='$email'";
//                                 echo $sql;
$query = mysqli_query($con,$sql);
$r = mysqli_fetch_array($query);
$dept_cid=$r['dept_cid'];
$branchid=$r['branchid'];

//$dept_id=$_SESSION['uid'];
//echo "<br><br><br>"."DEpt ID".$dept_id;

   //   $event_type_id=$_POST['event_type'];
                                
//                                $query = mysqli_query($con,"select branchname from dept_coordinator where dept_cid='$dept_cid' and email='$email'");
//                                while ($r = mysqli_fetch_array($query)) {
//                                    $bname=$r[0];
//
//                                }//end while();
//                                 $sql="select usn,name,ename from v8 where eventid='$eventid'";
//                                 echo $sql;
//                                $query = mysqli_query($con,$sql);
//                                
//                                while ($r = mysqli_fetch_array($query)) {
//                                    //$bname=$r[0];
//                                    echo $r['usn']."=>".$r['name'];
//                                }//end while();
//                                
//                                
//                                
//                                
                                
?>


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
                                    <th>USN</th>
                                    <th>Photo</th>
                                    <th>Name</th>
                                    
                                    <th>Sem</th>
                                    <th>Contact no</th>
                                    <th>Event Name</th>
                                    
                                    <th>Status</th>
                                    
                                    


                                </tr>
                                </thead>
                               
                                <tbody>
                                <?php
                                
                              
                                

                                
                                $sql="select usn,name,sem,phone,status,ename,eventid,photo from v9 where eventid='$eventid' and branchid='$branchid'";
                               // $sql="select ename,gender,name,bname,email,phoneno from v7 where event_type_id='$event_type_id'";
                               $query=mysqli_query($con,$sql);
                                $total= mysqli_num_rows($query);
                               // echo "<tr><td>".$query."</td></tr>";
                               ?>
                               <div class="card-header">
                               <b style=" color: #0066ff"> <?php echo "Total Partcipants". $total ?></b>
                           </div>
              <?php
                                while ($r=mysqli_fetch_array($query)) {
                                    ?>
                                    <tr>
                                        <td><?php echo $r['usn']; ?></td>
                                         <td><img src="<?php  echo $r['photo']?>" width="80" height="100"></td>
                                        <td><?php echo $r['name']; ?></td>
                                        <td><?php echo $r['sem']; ?></td>
                                        <td><?php echo $r['phone']; ?></td>
                                        <td><?php echo $r['ename']; ?></td>
                                       
                                       
                                         <?php
                                         $status=$r['status'];
                                  if($status=='0')
                                  {
                                    echo "<td> Approval Pending </td>";
                                  }
                                  else if ($status=='1') {
                                   echo "<td> Approved </td>";
                                       }
                                 else if ($status=='2') {
                                   echo "<td> Participated </td>";
                                       }
                                   
                                  echo "</tr>";
                          
                                   }//end while()
                                   ?>
                              
                                </tbody>
                                 
                            </table>
                        </div>
                    </div>
                    <!--                  
                </div>

                               

                
                <br><br>
            </div>
        </div>
    </div>


--><div class="form-group">
  <label class="col-md-4 control-label" for="sumbit"></label>
  <div class="col-md-4">
  <button id="submit" name="View" class="btn btn-primary" onclick="print_current_page()">Print</button>
  </div>
</div><!--



    
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