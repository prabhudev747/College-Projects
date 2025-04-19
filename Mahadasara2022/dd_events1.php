


<?php
session_start();
include 'dbcon.php';
$event_type_id=$_REQUEST['d'];
//echo $event_type_id;

$email=$_SESSION['uid'];
//$uid=$_SESSION['uid'];


echo "<select>";
//echo "<option value=''>Select Events<option>";
$query2 = "select eventid,ename from events e where e.event_type_id='$event_type_id'";

$result=mysqli_query($con,$query2);
while($rows=mysqli_fetch_array($result)){
    echo "<option value=".$rows[0].">".$rows[1]."</option>";
    
    
    
}//end while()

echo "</select>";

 

?>
