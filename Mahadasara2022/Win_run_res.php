<html>
    <head>
        <title>Mahadasars 2021</title>
         <link href="css/bootstrap.css" rel="stylesheet" />
        <link href="css/dashboard.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
           
        <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
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
    

    </head>
    <body>

        <div>
            <?php include 'ec_home_page.php'; ?>
        </div>
        <form method="POST" class="form-horizontal" action="result.php" >

    <div>
        <?php 
      //  session_start();
        $email=$_SESSION['uid'];
      //  echo 'sdf'.$email;
            include 'dbcon.php';

     //echo $email;
            
          
            
    $sql = "select eventid,ename,event_type_id from v7 where email='$email'";
    $result = mysqli_query($con,$sql);
$rows = mysqli_fetch_array($result);
$eventtype=$rows['event_type_id'];
$eventid=$rows['eventid'];
$ename=$rows['ename'];
//echo $eventid." ".$ename;
   

   if($eventtype==1||$eventtype==3)
   {
         $sql = "SELECT winner_usn,runner_usn FROM `events` WHERE eventid='$eventid'";
    $result = mysqli_query($con,$sql);
$rows = mysqli_fetch_array($result);
$win_usa=$rows['winner_usn'];
$run_usa=$rows['runner_usn']; 
       ?>
   
        <legend style=" color: #FF5733" align="center"><?php echo "<b>".$ename."</b>";?></legend>
    <div class="content-wrapper">
        <div class="container">
            <div class="container-fluid">
                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fa fa-table"></i>&emsp;Student List
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>USN</th>
                                    <th>Name</th>
                                    <th>Branch</th>
                                    <th>Sem</th>
                                    <th>Contact No</th>
                                    <th>Winner</th>  
                                    <th>Runner</th>

                                    <!--<th>Event Name</th>-->
                                      <!--<th>Event Type</th>-->
                                      <!--<th>Gender</th>-->
                                  


                                </tr>
                                </thead>
                               
                                <tbody>
                                <?php
                                
                              
                                
                        
                                
                             
                                //$sql="SELECT usn,name,email,bname,phone,ename from v6 where event_type_id='$event_type_id'";
                                //echo $sql;
                                 $sql="SELECT usn,name,sem,bname,phone,status from v8 where eventid='$eventid' and (status=2)";
                                $query=mysqli_query($con,$sql);
                                while ($r = mysqli_fetch_array($query)) {
                                    ?>
                                    <tr>
                                        <td><?php 
                                        $usn=$r['usn'];
                                        echo $r['usn']; ?></td>
                                        <td><?php echo $r['name']; ?></td>
                                        <td><?php echo $r['bname']; ?></td>
                                        <td><?php echo $r['sem']; ?></td>
                                         <td><?php echo $r['phone']; ?></td>
                                         
                                        
                                        <?php 
                                        
                                        if(!is_null($win_usa)&&$win_usa==$usn)
                                        {
                                        echo "<td><input type='radio' name='win' value='$usn' checked /></td>";   
                                        }
                                        else
                                        {
                                        echo "<td><input type='radio' name='win' value='$usn'  /></td>";   
                                        }
                                        
                                        ?>
                                          
                                        <?php 
                                        
                                       if(!is_null($run_usa)&&$run_usa==$usn)
                                        {
                                        echo "<td><input type='radio' name='run' value='$usn' checked /></td></tr>";
                                        }
                                        else
                                        {
                                        echo "<td><input type='radio' name='run' value='$usn'/></td></tr>";
                                        }
                                       
                                        
                                        ?>
<!--                                        <td><?php //echo $r[6]; ?></td>
                                        <td><?php //echo $r[7]; ?></td>-->
                                    </tr>
                                <?php
                                }//end while()
                                ?>
                                </tbody>
                                 
                            </table>
                        </div>
                    </div>
    
    
             <br><br>
            </div>
        </div>
    </div>
    </div>
       <div class="col-md-3" align="right">
    <button id="view" name="result" class="btn btn-primary" >Annouce Result</button>
  </div> 
        
        <?php
   }
 else {
       $sql="SELECT usn FROM `participant` WHERE eventid='$eventid' and status=2";
       $result = mysqli_query($con,$sql);
       $i=0;
       while($rows = mysqli_fetch_array($result))
       {
           $usn=$rows['usn'];
           $sql = "SELECT branchid FROM student WHERE usn='$usn'";
           $result1 = mysqli_query($con,$sql);
           $result1=mysqli_fetch_array($result1);
           $branch_list[$i]=$result1['branchid'];
           //echo $branch_list[$i];
           $i=$i+1;
        
       }
       $branch_list=array_unique($branch_list);
       $sql = "SELECT winner_branchid,runner_branchid FROM `events` WHERE eventid='$eventid'";
       $result = mysqli_query($con,$sql);
      $rows = mysqli_fetch_array($result);
      $win_dept=$rows['winner_branchid'];
      $run_dept=$rows['runner_branchid']; 
       ?>
        <legend style=" color: #FF5733" align="center"><?php echo "<b>".$ename."</b>";?></legend>
          <div class="content-wrapper">
        <div class="container">
            <div class="container-fluid">
                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fa fa-table"></i>&emsp;Department List
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>Department Name</th>
                                    <th>Winner</th>
                                    <th>Runner</th>


                                </tr>
                                </thead>
                               
                                <tbody>
                                <?php
                                 
                                foreach ($branch_list as $branch) {
                                    ?>
                                    <tr>
                                        <?php 
                                        
                                         $sql = "SELECT bname FROM `branch` WHERE branchid='$branch'";
                                         $result2 = mysqli_query($con,$sql);
                                         $result2=mysqli_fetch_array($result2);
                                        echo '<td>'.$result2['bname'].'</td>';
                                        if(!is_null($win_dept)&&$win_dept==$branch)
                                        {
                                        echo "<td><input type='radio' name='w_branch' value='$branch' checked /></td>";
                                        }
                                        else
                                        {
                                        echo "<td><input type='radio' name='w_branch' value='$branch'/></td>";
                                        }
                                        if(!is_null($run_dept)&&$run_dept==$branch)
                                        {
                                        echo "<td><input type='radio' name='r_branch' value='$branch' checked /></td>";
                                        }
                                        else
                                        {
                                        echo "<td><input type='radio' name='r_branch' value='$branch'/></td>";
                                        }
                                        
                                        ?>

                          
                                       

                                    </tr>
                                <?php
                                }//end while()
                                ?>
                                </tbody>
                                 
                            </table>
                        </div>
                    </div>
    
    
             <br><br>
            </div>
        </div>
    </div>
    </div>
        <div class="col-md-3" align="right">
    <button id="view" name="result1" class="btn btn-primary" >Annouce Result</button>
  </div> 
        
        <?php

   }
        ?>
    </div>
       </form>
    </body>
</html>

