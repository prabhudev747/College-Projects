<?php
include('homeheader.php');
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
        <meta charset="UTF-8">
        <title></title>
        <style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
h1 { 


        top: 40%; 

        left: 40%; 

  

        font-size: 40px; 

        font-family: Arial,  

            Helvetica, sans-serif; 

        background: linear-gradient( 

            to right, #f32170, #ff6b08, 

             #cf23cf, #eedd44); 

        -webkit-text-fill-color: transparent; 

        -webkit-background-clip: text; 

    } 
    h2{
        color: navy;
    }
</style>
    </head>
    <body>
    <center><h1>MAHADASARA - 2022</h1></center>
    <center><h2>Points Table</h2></center>
        <?php
        require('dbcon.php');
         $dept_list=array('MCA','MBA','ISE','CSE','	ECE','MECH','AFMI','CIVIL','FIRST YEAR BE');
        // $dept_points=array(0,0,0,0,0,0,0,0,0,0);
        echo"<table id='customers'>";
 echo" <tr>";
   echo" <th>Event and Department</th>";
   echo" <th>MCA</th>";
   echo" <th>MBA</th>";
    echo" <th>IS</th>";
      echo"<th>CS</th> ";
       echo"<th>EC</th>";
       echo" <th>MECH</th>";
       echo"  <th>AFMI</th>";
          echo"<th>CIVIL</th>";
           echo"<th>FYBE</th>";
echo" </tr>";
        
        
        $query1 = "select ename,bname,winner_points from event_type et,branch b, events ev where et.event_type_id=ev.event_type_id and b.branchid=ev.winner_branchid ";
        
        $query2 = "select ename,bname,runner_points from event_type et,branch b, events ev where et.event_type_id=ev.event_type_id and b.branchid=ev.runner_branchid ";
        
        $data1= mysqli_query($con, $query1);
        $data2= mysqli_query($con, $query2);
       
        
        
        
        while($result1=mysqli_fetch_array($data1))
        {
            $result2=mysqli_fetch_array($data2);
            $flag=0;
            if($result1['ename']==$result2['ename'])
            {
                   echo "<tr><td>"."<a href='winner.php'>".$result1['ename']."</a></td>";
                
                //both winner and runner are same branch
                if($result1['bname']==$result2['bname']){
                    $flag=1;
                    
                    $totalpoints=$result1['winner_points']+$result2['runner_points'];
              // echo "<td>".$result1['winner_points']+$result2['runner_points']."</td>";
               
                 }
                 if($flag==0)
                 {
                     $i=0;
                     while($i<=8)
                     {
                         
                     if($result1['bname']==$dept_list[$i])
                     {
                         echo "<td>".$result1['winner_points']."</td>";
                         
                     
                     }   
                      else if($result2['bname']==$dept_list[$i])
                     {
                         echo "<td>".$result2['runner_points']."</td>";
                     
                     }
                     else
                     {
                         echo "<td>-</td>";
                     }
                     $i++;
                     }//end while($i<=7)
                 }//if (flag==0)
                 else{
                     $i=0;
                     while($i<=8)
                     {
                     if($result1['bname']==$dept_list[$i])
                     {
                         echo "<td>".$totalpoints."</td>";
                     
                     }   
                     else if($result2['bname']==$dept_list[$i])
                     {
                         echo "<td>".$totalpoints."</td>";
                     
                     }
                     else
                     {
                         echo "<td>-</td>";
                     }
                     $i++;
                     }//end while($i<=7)
                 }
                
            echo "</tr>";
            }   
        }
   echo" </table>";
        ?>
    </body>
</html>
