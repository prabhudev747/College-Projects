<?php
include 'dbcon.php';
session_start();
if (isset($_POST['result']))
    {
   $win=$_POST['win'];  
   $run=$_POST['run'];
   if(is_null($win))
   {
       echo '<script>alert("Winner not Selected")</script>';
   }
   elseif(is_null($run))
   {
       echo '<script>alert("Runner not Selected")</script>';
   }
   elseif($run==$win) 
   {
       echo '<script>alert("Winner and Runner Should not be same")</script>';
   }
   else {

         $sql = "SELECT branchid FROM student WHERE usn='$win'";
         $result = mysqli_query($con,$sql);
         $result=mysqli_fetch_array($result);
         $win_bra=$result['branchid'];
         
        
         $sql = "SELECT branchid FROM `student` WHERE usn='$run'";
         $result = mysqli_query($con,$sql);
          $result=mysqli_fetch_array($result);
         $run_bra=$result['branchid'];
         echo $win_bra.".....".$run_bra."......".$win.".....".$run;
         
         $email=$_SESSION['uid'];
    $sql = "select eventid from v7 where email='$email'";
    
    $result = mysqli_query($con,$sql);
    $rows = mysqli_fetch_array($result);
    $eventid=$rows['eventid'];
         $sql = "UPDATE `events` SET `winner_branchid`=$win_bra,`runner_branchid`=$run_bra,`winner_usn`='$win',`runner_usn`='$run' WHERE eventid=$eventid";
    
         $a=mysqli_query($con,$sql);
         if($a)
         {
               echo '<script>alert("Data Saved.....")</script>';
         }
 
   
   }
}
if(isset($_POST['result1']))
{
   $win=$_POST['w_branch'];  
   $run=$_POST['r_branch'];
   if(is_null($win))
   {
       echo '<script>alert("Winner not Selected")</script>';
   }
   elseif(is_null($run))
   {
       echo '<script>alert("Runner not Selected")</script>';
   }
   elseif($run==$win) 
   {
       echo '<script>alert("Winner and Runner Should not be same")</script>';
   }
 else {
      $email=$_SESSION['uid'];
      $sql = "select eventid from v7 where email='$email'";
    
    $result = mysqli_query($con,$sql);
    $rows = mysqli_fetch_array($result);
    $eventid=$rows['eventid'];
    
        $sql = "UPDATE `events` SET `winner_branchid`=$win,`runner_branchid`=$run WHERE eventid=$eventid";
        echo $win.$run.$sql;
         $a=mysqli_query($con,$sql);
         if($a)
         {
               echo '<script>alert("Data Saved.....")</script>';
         }
   }
}
 echo "<script>window.location.replace('ec_home_page.php')</script>";
?>