<?php include 'adminhomepage.php'; ?>
<!DOCTYPE html>
<html>
<head>
<title>Mahadasara 2019</title>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <!--<script src="bootstrap3/jquery.min.js"></script>-->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
<meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0 />
              <meta name=" description" content="" />
    <meta name="author" content=""/>
</head>
<body>



<!--    <form class="form-horizontal">-->
            <?php
session_start();
//if (!(isset($_SESSION['loggedin']) && ($_SESSION['loggedin']=="true" )))
if (!isset($_SESSION['uid'])&&!($_SESSION['utype']=="admin"))
{
     echo "<script>window.location.replace('index.php')</script>";
}
else
{
   
    ?>
<fieldset>

<!-- Form Name -->
<center><legend>Admin Home</legend></center>

<!-- Button (Double) -->

</fieldset>
        
         <?php  
}//end else
    
    
    ?>
<!--</form>-->
    
    
 
    
    <script type="text/javascript">    
          function call_add_eventtype()
            {
               // alert("add event type");
          window.location.replace("add_eventtype.php"); 
         // window.location.href='add_eventtype.php'
            
            
            } //end call_add_eventtype()
            
             function call_add_event_co()
            {
               // alert("add event type");
          window.location.replace("add_event_co.php"); 
         // window.location.href='add_eventtype.php'
            
            
            } //end call_add_eventtype()
            
            
            
            
            function call_add_events()
            {
              //  alert("add_events()");
       window.location.replace('add_events.php'); 
            
            // window.location.href='add_events.php';
            }//end call_add_events()
            
             function call_viewevents()
            {
              //  alert("view events");
          window.location.replace('view_events2.php'); 
        //    window.location.href='view_events.php';
            
            }//end call_viewevents()
            
            function call_viewparticipants()
            {
             //   alert("view events");
                window.location.replace('consolidation_list.php'); 
        //  window.location.href='view_participants.php'; 
            
            
            }//end call_viewparticipants()
            
            
             function call_logout()
            {
             //   alert("view events");
                window.location.replace('logout.php'); 
        //  window.location.href='view_participants.php'; 
            
            
            }//end call_viewparticipants()
            
            
            
            
            </script>
    
    
    </body>
</html>