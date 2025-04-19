
<?php
include ("navbar.php");
?>
<!DOCTYPE html>
<html>

<head>
     <title>Mahadasara 2022</title>
    <link rel="shortcut icon" type="image" href="images/mahadasara logo.jpg">
    <body style="background-color:#e6e6ff;">
    <script>
      
      
      function call_home()
      {
          //alert(" home()");
       //    window.location.replace('admin_home.php'); 
          
          
      }
        
        </script>
    
          <script>
function print_me(str)
{
   // alert('str='+str);
    window.location.replace('print_all_dogs.php');
//window.print();
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
    
   
    
  
    
    
    
 
    $sql="select count(o_id) as ct from dogshow";
   $query = mysqli_query($con,$sql);
    $r = mysqli_fetch_array($query);
    $total_count=$r['ct'];
    
    
    
    ?>
    
--> <legend style=" color: #FF5733" align="center"><?php echo "<b>Dogshow Participants</b>";?></legend>
    <div class="content-wrapper">
        <div class="container">
            <div class="container-fluid">
                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fa fa-table"></i>&emsp;<b style=" color: #0066ff"><?php echo "Total Partcipants Count=".$total_count ?></b>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>Team-Id</th>
                                    <th>Owner photo</th>
                                    <th>Owner Name</th>
                                     <th>Dog Photo</th>                                      
                                    <th>Dog Name</th>
                                    <th>Dog Breed</th>
                                    <th>Dog Age</th>
                                    <th>Contact Info</th> 
                                    <th>Receipt Info</th>
                                    <!--<th>Place</th>-->
                                    <!--<th>contactno</th>-->

                                </tr>
                                </thead>
                               
                                <tbody><!--
                                <?php
                                
                              
                                
                        
                                
                             
                                //$sql="select ename,gender,name,bname,email,phoneno from v7 where event_type_id='$event_type_id'";
                                $sql="select o_id,o_name,file1,file2,o_place,d_name,d_breeds,d_age,file3,o_phone from dogshow";
                            //  echo $sql;
                                $query=mysqli_query($con,$sql);
                               // echo "<tr><td>".$query."</td></tr>";
                              //$slno=1;
                                while ($r=mysqli_fetch_array($query)) {
                                    ?>
-->                                    <tr>
                                        <td><?php echo "MITM".$r['o_id']; ?></td>
                                        <td><img src="<?php  echo $r['file1']?>" width="80" height="100"></td>
                                        <td><?php echo $r['o_name']; ?></td>
                                           
                                          <td><img src="<?php  echo $r['file3']?>" width="80" height="100"></td>
                                        <td><?php echo $r['d_name']; ?></td>
                                         <td><?php echo $r['d_breeds']; ?></td>
                                           <td><?php echo $r['d_age']; ?></td>
                                        
                                       <td><?php 
                                       
                                            
                                       $contactinfo="";
                                       $o_place= $r['o_place'];
                                       $o_phone=$r['o_phone'];
                                       
                                      
                                       $contactinfo.="Participant-1:".$o_place."<br> Phone no:".$o_phone."<br>";
                                      // $contactinfo.="Participant-2: ".$place2."<br> Phoneno:".$phoneno2;
                                       echo $contactinfo;
                                       ?></td> <td><a href='<?php echo $r['file2']; ?>' target='_blank'>click here</a> </td>
                                         <!--<td><?php  ?></td>-->
                                    </tr><!--
                                <?php
                                }//end while()
                                ?>
-->                                </tbody>
                                 
                            </table>
                        </div>
                    </div>
                                      
                </div><!--
 <?php 
 
                            //    }
                                ?>

                
                <br><br>
            </div>
        </div>
    </div>

--><div class="form-group" align='center'>
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-8">
  <?php //echo "<button id='submit' name='View' class='btn btn-primary' onclick='window.location.replace('print_statistics.php?eventid=".$inputeventid."'&branchid='".$inputbranchid."');>Print</button>"; ?>
    <button id="rules" name="rules" class="btn btn-primary" onclick="print_me(this.value)">Print Preview</button>
  </div>
</div>  <!--




    
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






