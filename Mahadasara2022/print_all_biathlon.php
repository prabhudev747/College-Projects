

<!DOCTYPE html>
<html>

<head>
    <body style="background-color:#e6e6ff;">
    <script>
      
      
      function call_home()
      {
          //alert(" home()");
       //    window.location.replace('admin_home.php'); 
          
          
      }
        
        </script>
    
            <script>
function print_current_page()
{
window.print();
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


<body>
    <div>
            <image src="images/mainheader.jpeg" width="100%"/>
        </div>
        <!--<legend style=" color: #FF5733" align='center'>View Biathlon Participants</legend>-->

<!--      <div class="col-md-3" align="left">
        <button id="view" name="view" class="btn btn-warning" onclick="call_home()" >Home</button>
  </div>-->
<!--<form method="POST" class="form-horizontal" action="<?php //echo $_SERVER['PHP_SELF']?>" >
  <?php

//session_start();

//if (!(isset($_SESSION['loggedin']) && ($_SESSION['loggedin']=="true" )))
//if (!isset($_SESSION['uid'])&&!($_SESSION['utype']=="admin"))
//{
//     echo "<script>window.location.replace('index.php')</script>";
//}
//
//else{
    

?>

 
    
 
    
</form>
   

</body>

</html>




<?php
//if (isset($_POST['view'])) {

    include 'dbcon.php';
      //$event_type_id=$_POST['event_type'];
     // echo $event_type_id;
     

                                
//                                $query = mysqli_query($con,"select * from biathlon");
//                                while ($r = mysqli_fetch_array($query)) {
//                                    //$event_type_name=$r[1];
//
//                                }//end while();
//    
    
   
    
  
    
    
    
 
    $sql="select count(bid) as ct from biathlon";
   $query = mysqli_query($con,$sql);
    $r = mysqli_fetch_array($query);
    $total_count=$r['ct'];
    
    
    
    
    
    
    
    
    
    
    
    ?>
    
--> <legend style=" color: #FF5733" align="center"><?php echo "<b>Biathlon Participants</b>";?></legend>
    <div class="content-wrapper">
        <div class="container">
            <div class="container-fluid">
                <div class="card mb-3">
                    <div class="card-header">
                        <!--<i class="fa fa-table"></i>&emsp;<b style=" color: #0066ff"><?php echo "Total Partcipants Count=".$total_count ?></b>-->
                              <i class="fa fa-table"></i>&emsp;<b style=" color: #0066ff"><?php echo "Total Teams: $total_count &nbsp"."<span style='color:#ff00ff'>"."Total Partcipants ".$total_count*2 ?></span></b>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered"  width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>Sl.No.</th>
                                    <th>Team-Id</th>
                                    <th>photo</th>
                                    <th>Participant-1</th>
                                     <th>Photo</th>                                      
                                    <th>Participant-2</th>
                                    <th>Contact Info</th>                                 
                                    <!--<th>Place</th>-->
                                    <!--<th>contactno</th>-->

                                </tr>
                                </thead>
                               
                                <tbody><!--
                                <?php
                                
                              
                                
                        
                                
                               $slno=0;
                                //$sql="select ename,gender,name,bname,email,phoneno from v7 where event_type_id='$event_type_id'";
                                $sql="select bid,name1,file1,place1,name2,file2,place2,phoneno1,phoneno2 from biathlon order by bid";
                            //  echo $sql;
                                $query=mysqli_query($con,$sql);
                               // echo "<tr><td>".$query."</td></tr>";
                              //$slno=1;
                                while ($r=mysqli_fetch_array($query)) {
                                    ?>
-->                                    <tr>
                                        <td><?php $slno++; echo $slno; ?></td>
                                        <td><?php echo "MITM".$r['bid']; ?></td>
                                        <td><img src="<?php  echo $r['file1']?>" width="80" height="100"></td>
                                        <td><?php echo $r['name1']; ?></td>
                                           
                                          <td><img src="<?php  echo $r['file2']?>" width="80" height="100"></td>
                                        <td><?php echo $r['name2']; ?></td>
                                        
                                       <td><?php 
                                       
                                       
                                       $contactinfo="";
                                       $place1= $r['place1'];
                                       $phoneno1=$r['phoneno1'];
                                       $place2= $r['place2'];
                                       $phoneno2=$r['phoneno2'];
                                       $contactinfo.="Participant-1:".$place1."<br> Phone no:".$phoneno1."<br>";
                                       $contactinfo.="Participant-2: ".$place2."<br> Phoneno:".$phoneno2;
                                       echo $contactinfo;
                                       ?></td>
                                         <!--<td><?php  ?></td>-->
                                    </tr><!--
                                <?php
                                }//end while()
                                ?>
-->                                </tbody>
                                 
                            </table>
                        </div>
                    </div>
                                      
                </div>
          <div class="form-group" align='center'>
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-8">
    <button id="submit" name="View" class="btn btn-primary" onclick="print_current_page()">Print</button>
    <!--<button id="rules" name="rules" class="btn btn-primary" onclick="fun()">Rules</button>-->
  </div>
</div>        
                
                <!--
 <?php 
 
                            //    }
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
<!--    <img src="biathlon_photos/1656072755562.jpeg" width="70" height="100">    -->
   <?php 
   // echo "<script>window.location.replace('view_events2.php')</script>";
//}//end if(isset($_POST['Submit'))

?>






