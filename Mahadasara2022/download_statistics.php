                                        


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
                    x.open("POST", "dd_events1.php?d=" + str, true);
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
                    x.open("POST", "call_students1.php?d=" + str, true);
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
    <script>
function print_current_page()
{
window.print();
}
    </script>
    
    
    
    
    
    
    
</head>
<body>
<div>
<?php
include('homeheader.php');
?>
</div>

    
<?php

//session_start();
include 'dbcon.php';
//if (!isset($_SESSION['uid'])&&($_SESSION['utype']=="dc" ))
//{
//     echo "<script>window.location.replace('index.php')</script>";
//}
//else
{
     
    ?>
     
    <form class="form-horizontal" method="post" action="print_statistics.php">
<fieldset>

<!-- Form Name -->
<legend style=" color: #FF5733" align='center'><b>PARTICIPATION STATISTICS</b>  </legend>

  <!--<legend style=" color: #FF5733" align='center'><b>Event wise participation</b>  </legend>                                  
<!-- Select Basic -->

<div class="form-group">
  <label class="col-md-4 control-label" for="event">Select Event</label>
  <div class="col-md-4">
      <select id="event_type" name="event" class="form-control">
      <!--<option value="">Select Event</option>-->
      <option value="ALL">All Events</option>
       <?php

//code for retrieving events


 $sql = "select eventid,ename from events";
     
    $result = mysqli_query($con,$sql);
while ($rows = mysqli_fetch_array($result)) {

    $eventid=$rows['eventid'];
    $ename=$rows['ename'];
    
?>
       <option value="<?php echo $eventid ?>"><?php echo $ename ?></option>
       
            <?php
} //end while($rows = mysql_fetch_array($result))
      ?> 
    </select>
  </div>
</div>

<!--retrieve depts-->
<div class="form-group">
  <label class="col-md-4 control-label" for="event">Select Department</label>
<div class="col-md-4">
      <select id="event" name="branch" class="form-control" >
      <!--<option value="">Select Department </option>-->
      <option value="ALL"><?php echo "All Departments" ?></option>
      <?php
      
 $sql = "select branchid,bname from branch";
     
    $result = mysqli_query($con,$sql);
while ($rows = mysqli_fetch_array($result)) {

    $branchid=$rows['branchid'];
    $bname=$rows['bname'];
    if($bname != "HUMANITIES" && $bname !='CHEMISTRY')
    {
    ?>
    <option value="<?php echo $branchid ?>"><?php echo $bname ?></option>
    <?php
    }//end if()
}//end while()
?>
   
      </select>
</div>
</div>
<div class="col-md-6" align="right">
    &nbsp;&nbsp;&nbsp; <button id="view" name="view_participants" class="btn btn-primary" >View participants</button>
  </div>
<!--<br><br><br><br><br>
<div id="display_events"> display here</div>-->
    
    




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



