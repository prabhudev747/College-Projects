<?php
include('dbcon.php');
?>

<!DOCTYPE html>
<html>
<head>
    <style>
/*body {
  background-image: url('images/fest2.webp');
  width: 100%;
  height: 100%;
}*/
</style>
<script>
    function view_biathlon_registration()
    {
       // alert('view register');
        window.location.replace('view_biathlon_registeration.php');
    }
</script>
  <script>
function print_current_page()
{
window.print();
}
    </script>

<title>Mahadasara 2022</title>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0 />
              <meta name=" description" content="" />
    <meta name="author" content=""/>
    
     <script>
        function fun()
        {
            alert("Rules:\n1.Sprint distance - 5 KM run, 10 km cycling.\n2.The team should consist of two members’- one for run and one for cycling.\n3.It is team choice to run and cycling depending upon their convenience.\n4.The first 5KM would be running the next 10km would be cycling.\n5.The team which comes first and touches the final point declared as winners followed by runners.\n6.All participants must come the white top.");
           //document.getElementById("rules").style.display = "block";
    
        }
        </script>
    
</head>
<body style="background-color:#f7e6ff;">
    <div>
            <image src="images/mainheader.jpg" width="100%"/>
        </div>
    <center><h2 style=" background-image: linear-gradient(43deg, #4158D0 0%, #C850C0 46%, #FFCC70 100%); color:white;height:50px;padding-top:6px">Biathlon Registration</h2></center>
   
        
        <div>
<!--<div>
            <img src="images/2022logo.jpeg" width="100%" style="max-height: 200px;">
        </div>-->


<?php 
if(isset($_POST['View']))
{
     include 'dbcon.php';
    //p1
    $email=$_POST['email'];
    
     //$sql="select ename,gender,name,bname,email,phoneno from v7 where event_type_id='$event_type_id'";
                                $sql="select bid,name1,file1,place1,name2,file2,place2,phoneno1,phoneno2 from biathlon where email1='$email' || email2='$email'";
                            //  echo $sql;
                                $query=mysqli_query($con,$sql);
                                $no_of_rows=mysqli_num_rows($query);
                                if($no_of_rows>0)
                                {
                               // echo "<tr><td>".$query."</td></tr>";
                              //$slno=1;
                                    
                                
                                
                               
                                $r=mysqli_fetch_array($query);
    
?>

<legend style=" color: #FF5733" align='center'><b><?php echo "Team-Id: MITM".$r['bid']  ?></b>  </legend>
           
                            <!--<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">-->
<table class="table table-bordered"  width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <!--<th>Team-Id</th>-->
                                    <th>photo</th>
                                    <th>Participants Details</th>
<!--                                     <th>Photo</th>                                      
                                    <th>Participant-2</th>
                                    <th>Contact Info</th>                                 -->
                                    <!--<th>Place</th>-->
                                    <!--<th>contactno</th>-->

                                </tr>
                                </thead>
                               
                                <tbody>
                                <?php
                                
                               $contactinfo1="";
                               $contactinfo2="";
                               $name1=$r['name1'];
                                $name2=$r['name2'];
                                       $place1= $r['place1'];
                                       $phoneno1=$r['phoneno1'];
                                       $place2= $r['place2'];
                                       $phoneno2=$r['phoneno2'];
                                       $contactinfo1="<b>Participant-1:</b>".$name1."<br>Place:".$place1."<br> Phone no:".$phoneno1."<br>";
                                       $contactinfo2="<b>Participant-2:</b> ".$name2."<br>Place:".$place2."<br> Phoneno:".$phoneno2;
                                     
                                
                        
                                
                             
                               
                                    ?>
                                    <tr>
                                        <!--<td><?php //echo "MITM".$r['bid']; ?></td>-->
                                        <td><img src="<?php  echo $r['file1']?>" width="80" height="100"></td>
                                        <td><?php echo $contactinfo1; ?></td></tr>
<tr
                                <tr> <td><img src="<?php  echo $r['file2']?>" width="80" height="100"></td>
                                    <td><?php echo $contactinfo2; ?></td></tr>
                                        
                                       
                                       
                                       
                                      
                                       
                              
                            </tbody>
                                 
                            </table>
                  


     <!-- Button (Double) -->
<div class="form-group" align='center'>
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-8">
    <button id="submit" name="View" class="btn btn-primary" onclick="print_current_page()">Print</button>
    <!--<button id="rules" name="rules" class="btn btn-primary" onclick="fun()">Rules</button>-->
  </div>
</div>           
       
<?php
  
}//if
else{
 echo "<script>alert('You have not Registered')</script>";
 //echo "<script>window.location.replace('test_b.php')</script>";
 echo "<script>window.location.replace('biathlon_register.php')</script>";
}
         
}//end if()

?>

