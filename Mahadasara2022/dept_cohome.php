                                        


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
    
    
    
    
    
    
    
    
</head>
<body style="background-color:#f7e6ff;">
<div>
<?php
include('statusheader.php');
?>
</div>

    
<?php

session_start();
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
<legend>Dept Coordinator Register for Events</legend>

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
      <select id="event" name="event" class="form-control" onchange="call_students(this.value)">
      <option value="">Select Event </option>
      <?php
      ?>
      </select>
</div>
</div>
<br><br><br><br><br>
<div id="display_events"></div>
    
    




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
if(isset($_POST['save']))
{
    //session_start();
    include 'dbcon.php';
    
    //code for approving stduents to events
    $email=$_SESSION['uid'];
    $sql="select dept_cid,branchid from dept_coordinator where email='$email'";
//                                 echo $sql;
$query = mysqli_query($con,$sql);
$r = mysqli_fetch_array($query);
$dept_cid=$r['dept_cid'];
$branchid=$r['branchid'];
    
    
    //
    //$branchid=$_SESSION['uid'];
    $eventid=$_POST['event'];
    
      //$selected_event_list=$_POST['c1'];
  // echo "sid=".$sid;
    //if($sid)
   // {
       // echo " deleted";
        
       // $sql="delete from participant p where p.sid='$sid' and p.eventid in (select e.eventid from events e where e.event_type_id='$event_type_id')";
        //echo $sql;
       
        
       // echo $sql;
    //echo $sql;
        //$query = mysqli_query($con,$sql);
   
        
    
        
        
        
        
        
        
    
    //}
    //Reset status to 0
    $sql="select usn,eventid from v9 where branchid='$branchid' and eventid='$eventid'";
       // echo $sql;
        $query = mysqli_query($con,$sql);
        while($row=mysqli_fetch_array($query))
        {
        $usn=$row['usn'];
       // $eventid=$row['eventid'];
        $sql1 = "update participant set status=0 where usn='$usn' and eventid='$eventid'";
        //echo $sql;
        $query1 = mysqli_query($con,$sql1);
        }
   
    //update checked event status
    if(isset($_POST['c1']))
    {
        
    //
    //if($_POST['c1']=="0" && $sid!="")
    
     
    $usn_list=$_POST['c1'];  
    
   // print_r($selected_event_list);
        
        foreach($usn_list as $usn)
        {
             $sql2 = "update participant set status=1 where usn='$usn' and eventid='$eventid'";
         //$sql = "insert into participant(sid,eventid) values('$sid','$eventid')";
           $result = mysqli_query($con,$sql2);
            
        }//end foreach()
        
        echo("<script>alert(\"You have Successfuly Approved students for the selected event... \")</script>");

    }//end if(isset($_POST['c1]))
    
//    else{
//        echo "UNCHECKED CHECK BOXES";
//        
//        
//        if($sid!="" )
//    {
//        echo "no events selected or unchecked all selcted events";
//        
//        $sql="delete from participant where sid='$sid' and eventid in(select eventid from event where evenet_type_id='$event_type_id')";
//       
//     
//    $result = mysql_query($sql);
//    }
//        
//   
//     
//    }//end else
    


    
    
}//end if(isset($_POST['save']))

?>