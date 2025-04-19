 <!DOCTYPE html>
<html>
<head>
<title>Mahadasara 2022</title>
<!--<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
<meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0 />
              <meta name=" description" content="" />
    <meta name="author" content=""/>
    
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
h2 { 


        top: 40%; 

        left: 40%; 

  

        font-size: 30px; 

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
    <!--CHARTS-->
     <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      
      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
 
    

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
?>
 <body>
    <center><h2>MAHADASARA - 2022</h2></center>
    <center><h3 Style="color:purple;">CHAMPIONSHIP Goes To Civil Engineering </h3></center>
    
    
    <center>
    <?php
//     echo"<table id='customers'>";
// echo" <tr>";
 
 $r=1;
//  echo "<td><span style='color:#FF5733;'><b>EVENTS/DEPT</b></span></td>";
 while($r<=sizeof($dept_list))
 {
    
    
  
//     echo"<th>".$dept_list[$r]."</th>";
     $r++;
 }
 
 
//echo" </tr>";

$y=1;
while($y<=sizeof($dept_list))
{
    $coltotal[$y]=0;
    $y++;
}
$i=0;
while($i<sizeof($event_list)-1)
{
//    echo "<tr>";
   
//    echo "<td><span style='color:#FF5733;'><b>".$event_list[$i][0]."</b></span></td>";
    $j=1;
    while($j<= sizeof($dept_list))
    {
    if(!empty($event_list[$i][$j]))
    {
//        echo "<td><span style='color:#AA8225;'><b>".$event_list[$i][$j]."</b></span></td>";
          $coltotal[$j]+=$event_list[$i][$j];

    }
    else{
//            echo "<td>-</td>";
    }
    $j++;
    }//end while(Dept traversal)
//    echo "</tr>";
    
    $i++;
}//end while()
//echo "<tr><td><span style='color:#FF5733;'><b>Total</b></span></td>";

$y=1;
while($y<=8)
{
//    echo "<td><span style='color:#FF5733;'><b>".$coltotal[$y]."</b></span></td>";
    $y++;
}

//echo "</tr>";
//   echo" </table>";
   
   $display_array=array(array());
   for($i=1;$i<= sizeof($dept_list);$i++)
   {
       $display_array[$i][0]=$dept_list[$i];
        $display_array[$i][1]=$coltotal[$i];
       // echo $display_array[$i][0]."=".$display_array[$i][1];
   }
   
   
   

        ?>





    
    
    
    
</head>
<body>
<form class="" method="post" action="">
<fieldset>

 <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
               ['Departments', 'Points', { role: "style" }],
        
                    <?php
            include 'dbcon.php';
            
            $color=array('#00eeef','#00e64d','#ffaa00','#6666ff','#ffff00','#ff4d94','#33cccc','#cc99ff','#00ffff');
               $color2=array();
               $t=0;
            foreach ($color as $value) {
             
            }

         
            //$sql="select b.bname,count(i.ipid) as ct from branch b,ip_table i where b.branchid=i.branchid group by b.branchid";
           // $sql="select b.bname,count(i.ipid) as ct from branch b,ip_table i where b.branchid=i.branchid group by b.branchid";
            
            //$result=mysqli_query($con,$sql);
            $c=1;
      while($c<=8)
      {
          $bname=$display_array[$c][0];
          $ct=$display_array[$c][1];
            echo "['".$bname."',".$ct.",'color:".$color[$c]."'],";
          
            $c++;
      }//end while()
            
            
        
        
//          $c=1;
//      while($c<=8)
//      {
//          $bname=$display_array[$c][0];
//           $points=$display_array[$c][1];
//          //$ct=$row['ct'];
//            echo "['".$bname."',".$points.",'color:".$color[$c]."'],";
//          
//            $c++;
//      }//end while()
//            
            
            ?>
        
        
        
        
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Mahadasara-2022",
        width: 450,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }
  </script>
    


<div>
 <blink><h4><u><a style="color:#FC46AA" href="points_table2.php" >Points Table Details</a></u></h4></blink>
</div>
 <div id="columnchart_values" style="width: 100%;  align:left;"></div>

 <!-- <div class="col-md-4">
    <button id="points" name="points" class="btn btn-success" onclick="points_table2.php">Points Table</button>
  </div>-->


<style>
    blink {
  -webkit-animation: 2s linear infinite condemned_blink_effect; /* for Safari 4.0 - 8.0 */
  animation: 2s linear infinite condemned_blink_effect;
}

/* for Safari 4.0 - 8.0 */
@-webkit-keyframes condemned_blink_effect {
  0% {
    visibility: hidden;
  }
  50% {
    visibility: hidden;
  }
  100% {
    visibility: visible;
  }
}

@keyframes condemned_blink_effect {
  0% {
    visibility: hidden;
  }
  50% {
    visibility: hidden;
  }
  100% {
    visibility: visible;
  }
}
</style>
</fieldset>
</form>
</body>
<html>




