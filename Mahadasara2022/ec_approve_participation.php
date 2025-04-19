<?php


if (isset($_POST['approve'])) {
session_start();
    
    include 'dbcon.php';
    
     $email=$_SESSION['uid'];
     echo $email;
    $sql = "select eventid,ename from v7 where email='$email'";
    
    $result = mysqli_query($con,$sql);
$rows = mysqli_fetch_array($result);
$eventid=$rows['eventid'];
$ename=$rows['ename'];
echo $eventid." ".$ename;

//Reset status to 1 //Not participated
$sql="select usn,eventid from v8 where eventid='$eventid' and status=2";
       // echo $sql;
        $query = mysqli_query($con,$sql);
        while($row=mysqli_fetch_array($query))
        {
        $usn=$row['usn'];
       // $eventid=$row['eventid'];
        $sql1 = "update participant set status=1 where usn='$usn' and eventid='$eventid' and status=2";
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
             $sql2 = "update participant set status=2 where usn='$usn' and eventid='$eventid'";
         //$sql = "insert into participant(sid,eventid) values('$sid','$eventid')";
           $result = mysqli_query($con,$sql2);
            
        }//end foreach()
        
        echo("<script>alert(\"You have Successfuly Approved students participation for the event... \")</script>");
 echo "<script>window.location.replace('ec_about.php')</script>";
    }//end if(isset($_POST['c1]))
    else{
        //  echo("<script>alert(\"You have Successfuly Approved students participation for the event... \")</script>");
 echo "<script>window.location.replace('ec_about.php')</script>";
    }
    
//                    <!--                  
//                </div>
 }//$_POST['view']
                                ?>