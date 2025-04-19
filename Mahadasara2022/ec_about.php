<?php
//session_start();
//include 'dbcon.php';
//if (!isset($_SESSION['uid'])&&($_SESSION['utype']=="dc" ))
{
 //    echo "<script>window.location.replace('index.php')</script>";
}
//else
{
  

  


     
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Mahadasara 2022</title>  
<link rel="shortcut icon" type="image" href="images/mahadasara logo.jpg">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
  color:black;
}
.two{
    color:blue;
}
</style>

<body style="background-color:#f7e6ff;">
<div>
<?php
include('ec_home_page.php');
?>
</div>

     <legend style=" color: #FF5733" align="left"><?php echo "<b> Welcome User: ".$_SESSION['uid']."</b>";?></legend>
    <form class="form-horizontal" method="post" action="<?php  $_SERVER['PHP_SELF'];?>">
    <?php
}
?>
<table class="borderd">
    
    <H1 class="three">Event Coordinator Process</H1>
     <tr>
        <th>SL NO</th>
        <th>Process</th>
    </tr>
    <tr>
         <td>1</td>
        <td> Event Coordinator can Login using the credentials provided<br>
         </td>
     </tr>
     <tr>
         <td>1</td>
        <td> Event Coordinator can Login and approve participants who have participated in respective events.<br>
         </td>
     </tr>
     <tr>
         <td>2</td>
         <td>Events Coordinator will select winners and runners of the respective events.<br>
         </td>
     </tr>
     <tr>
         <td>3</td>
         <td>Only Contested Participants can download the participation certificate using their login credentials.<br>
         </td>
     </tr>
     <tr>
         <td>4</td>
         <td>Event coordinator has to upload the events photos and the photos of runner and winners<br>
         </td>
     </tr>
    <tr>
         <td>5</td>
         <td>Winner and Runner scores will be updated in the point table.<br>
         </td>
     </tr>
    
     </tr>
 </table>
<table class="borderd">
    
    
</body>
</html>

<!--

<html>
    <head><title>Mahadasara 2022</title>
         <link href="css/bootstrap.css" rel="stylesheet" />
        <link href="css/dashboard.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
           <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
  color:black;
}
.one{
    color:red;
}
.two{
    color:blue;
}
.three{
    color:green;
}


</style>
    </head>
    <body>
<table class="borderd">
    
    <H1 class="three">Event Coordinator Process</H1>
     <tr>
        <th>SL NO</th>
        <th>Process</th>
    </tr>
     <tr>
         <td>1</td>
        <td> Event Coordinator can Login and View Participants <br>
         </td>
     </tr>
     <tr>
         <td>2</td>
         <td>Events Coordinator will approve the participated students list. <br>
         </td>
     </tr>
     <tr>
         <td>3</td>
         <td>Events Coordinator will announce final results of their respective events <br>
         </td>
     </tr>
    
     </tr>
 </table>
 <!--<div style="background-image: linear-gradient(43deg, #4158D0 0%, #C850C0 46%, #FFCC70 100%); color:white;height:30px;padding-top:6px">
	<center><p>For Queries : mahadasara2022@mitmysore.in <br /></p></center>
	</div>-->
    <!-- </body></html> -->