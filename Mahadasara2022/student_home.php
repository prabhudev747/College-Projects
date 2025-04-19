<!DOCTYPE html>
<html>
<head>
<title>Mahadasara 2022</title>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0 />
              <meta name=" description" content="" />
    <meta name="author" content=""/>
    
    
    
    
    <script type="text/javascript">
        
        function call_events(str)
        {
            //ajax call to retrievents.php
            //alert("selected eventid=>"+str);
            
            
             x = new XMLHttpRequest();
                    x.open("POST", "retrieve_events.php?d=" + str, true);
                    x.send();
                    x.onreadystatechange = function ()
                    {
                        if (x.readyState == 4 && x.status == 200)
                        {
                            document.getElementById("display_events").innerHTML = x.responseText;
                        }
                    };
            
        }//end function call_events(str)()
        
        
         function call_logout()
            {
             //   alert("view events");
                window.location.replace('logout.php'); 
        //  window.location.href='view_participants.php'; 
            
            
            }//end call_logout()
            
        
        
        
        </script>
    
    
    
    
    <style>
table, th, td {
  border:1px solid black;text-align: left;
}
</style>
    
    
    
</head>
<body style="background-color:#e6e6ff;">
<!-- <div>
            <image src="images/mainheader.jpeg" width="100%"/>
        </div>-->
<div class="wrapper single-blog">
  <?php 
include 'student_header.php';
  ?>
</div>


<?php

session_start();
include 'dbcon.php';
if (!(isset($_SESSION['uid'])) && !($_SESSION['utype']=="student" ))
{
     echo "<script>window.location.replace('index.php')</script>";
}
else{
    


?>



 <legend style=" color: #FF5733" align="left"><?php echo "<b> Welcome User: ".$_SESSION['uid']."</b>";?></legend>
 <center>
 <table class="borderd">
     <tr>
         <th>sl no.</th>
         <th>Rules</th>
     </tr>
     <tr>
         <td>1</td>
         <td>A student CAN register in any number of individual events (Sports and Cultural) but needs to adhere to the schedule.<br>
         </td>
     </tr>
     <tr>
         <td>2</td>
         <td>A student CANNOT participate in multiple team events (Sports and Cultural) except 4*100 m mixed relay. <br>
         </td>
     </tr>
     <tr>
         <td>3</td>
         <td>Students need to carry their id cards for the events (Sports and Cultural) failing which they will not be allowed to participate in the events.<br>
  </td>
     </tr>
     <tr>
         <td>4</td>
         <td>
             After events enrolment, download the event registration card from<a href="view_enroll_status.php"> View Enrolment Status.</a>
         </td>
     </tr>
     <tr>
         <td>5</td>
         <td>Meet Your Department Coordinator for approval of group events.<br>
        </td>
     </tr>
     <tr>
         <td>6</td>
         <td>
             Registration card and college Id card should be shown to respective event co-ordinator during participation.
         </td>
     </tr>
     <tr>
         <td>7</td>
         <td>
             After the event partcipation, download event participation certificate <a href="#">Here</a>
         </td>
     </tr>
     <tr>
         <td>8</td>
         <td>
             Remember your Email ID and Password till the end of the event. For forgot password support,  <a href="support.php">Click Here</a>
         </td>
     </tr>
 </table>
 </center>
 <!--<h3>
    1. A student CAN register in any number of individual events (Sports and Cultural) but needs to adhere to the schedule.<br>

    2. A student CANNOT participate in multiple team events (Sports and Cultural) except 4*100 m mixed relay. <br>
    3. Students need to carry their id cards for the events (Sports and Cultural) failing which they will not be allowed to participate in the events.<br>
    
</h3>-->
<?php
}//end else ?>
