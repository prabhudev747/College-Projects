<?php




    //include('ec_home_page.php');

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
    h4{
        color: blue;
    }
    td{
        text-align: center;
        
    }
</style>
    </head>
     <script>
function print_current_page()
{
window.print();
}
    </script>
    <body>
        <?php
        include ('navbar.php');
        ?>
    <center><h1>MAHADASARA - 2022</h1></center>
    
   <center><h4 style="color:blue">Points Distribution</h4></center>
        <?php
        require('dbcon.php');
         //$dept_list=array('MCA','MBA','ISE','CSE','ECE','MECH','CIVIL','FIRST YEAR BE');
        // $dept_points=array(0,0,0,0,0,0,0,0,0,0);
   
        $query=mysqli_query($con,"select bname from branch where branchid<=9"); 
        
        $dept_list=array();
        $m=1;
       while($result=mysqli_fetch_array($query))
       {
          $dept_list[$m]=$result['bname'];
         // echo $dept_list[$m];
             $m++;
         }
         
         //echo "dept list size=".sizeof($dept_list);
         
        
//get all events from events(both winner and runner available)
$sql2 = "select ename from ((SELECT ename from events where winner_branchid!='')UNION(select ename from events where runner_branchid!=''))as t1";

$result= mysqli_query($con, $sql2);
$no_of_events=mysqli_num_rows($result);

$event_list[$no_of_events][sizeof($dept_list)+1]=array(array());



$i=0;
//echo "size of dept list=".sizeof($dept_list);

while($i<sizeof($event_list))
{
    $event_list[$i][0]=0;
    $j=1;
while($j<= sizeof($dept_list))
{
    $event_list[$i][$j]=0;
    $j++;
}
$i++;
}



$i=0;
while($row=mysqli_fetch_array($result))
{
    $event_list[$i][0]=$row['ename'];
  
    $i++;
    
}//end while()


$i=0;
while($i<sizeof($event_list))
{
    $ename=$event_list[$i][0];
    $query1 = "select ename,bname,winner_points from event_type et,branch b, events ev where et.event_type_id=ev.event_type_id and b.branchid=ev.winner_branchid and ename='$ename'";
    //echo $query1;
     $data1= mysqli_query($con, $query1);
     $result=mysqli_fetch_array($data1);
     $bname=$result['bname'];
     $winner_points=$result['winner_points'];
     
     //Winner points
     $k=1;
     while($k<=sizeof($dept_list))
     {
         if($dept_list[$k]==$bname)
         {
            
     $event_list[$i][$k]=$event_list[$i][$k]+$winner_points;
          
     break;
         }//end if()
         $k++;
         
     }//end inner while()
     
     //Runner points
     $query2 = "select ename,bname,runner_points from event_type et,branch b, events ev where et.event_type_id=ev.event_type_id and b.branchid=ev.runner_branchid and ename='$ename'";
     //echo $query2;
     $data2= mysqli_query($con, $query2);
     $result=mysqli_fetch_array($data2);
     $bname=$result['bname'];
     $runner_points=$result['runner_points'];
     
          $k=1;
     while($k<=sizeof($dept_list))
     {
         if($dept_list[$k]==$bname)
         {
        
       
     $event_list[$i][$k]=$event_list[$i][$k]+$runner_points;
     break;
         }
         $k++;
         
     }//end inner while()
    
     $i++;
}//end outer while()
echo'<center> <table style="width:30;border:none;">
  <tr>
    <th style="color:green;">Points Alloted</th>
    <th style="color:green;">Winner</th>
    <th style="padding-left:20px; color:green;">Runner</th>
  </tr>
  <tr>
    <th style="color:#FC46AA;">Individual(Sports & Cultural)</th>
    <td style="color:blue;">2</td>
    <td style="color:orange;">1</td>
  </tr>
  <tr>
    <th style="color:#FC46AA;">Group(Sports & Cultural)</th>
    <td style="color:orange;">7</td>
    <td style="color:blue;">5</td>
  </tr>
  
</table><br></center>
<center><h2>Points Table</h2></center>
';
 

     echo"<table id='customers'>";
 echo" <tr>";
 
 $r=1;
  echo "<td style='background:#04AA6D; color:white;'><span style='color:#FF5733;'><b>EVENTS/DEPT</b></span></td>";
 while($r<=sizeof($dept_list))
 {
    
    
  
     echo"<th>".$dept_list[$r]."</th>";
     $r++;
 }
 
 
echo" </tr>";

$y=1;
while($y<=sizeof($dept_list))
{
    $coltotal[$y]=0;
    $y++;
}
$i=0;
while($i<sizeof($event_list)-1)
{
    echo "<tr>";
   
    echo "<td><span style='color:#FF5733;'><b>".$event_list[$i][0]."</b></span></td>";
    $j=1;
    while($j<= sizeof($dept_list))
    {
    if(!empty($event_list[$i][$j]))
    {
        echo "<td><span style='color:#AA8225;'><b>".$event_list[$i][$j]."</b></span></td>";
          $coltotal[$j]+=$event_list[$i][$j];

    }
    else{
            echo "<td>-</td>";
    }
    $j++;
    }//end while(Dept traversal)
    echo "</tr>";
    
    $i++;
}//end while()
echo "<tr><td><span style='color:#FF5733;'><b>Total</b></span></td>";

$y=1;
while($y<=8)
{
    echo "<td><span style='color:#FF5733;'><b>".$coltotal[$y]."</b></span></td>";
    $y++;
}

echo "</tr>";
   echo" </table>";
   
  ?>
 
  <!-- Button (Double) -->
<div class="form-group" align='center'>
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-8">
    <button id="submit" name="View" class="btn btn-primary" onclick="print_current_page()">Print</button>
    <!--<button id="rules" name="rules" class="btn btn-primary" onclick="fun()">Rules</button>-->
  </div>
</div>      
        
<footer style="background-image: linear-gradient(43deg, #4158D0 0%, #C850C0 46%, #FFCC70 100%); color:white;height:80px;padding-top:6px">
	<center><p>Thank You For Your Support : Physical Education Director  Dhanya Sundar, Prof. Lethan M.N. And Prof.Dinesh M.A. </center>
	</footer>
    </body>
    
</html>

