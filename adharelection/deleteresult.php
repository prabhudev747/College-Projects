<?php 
$db="adhaar";
$user="root";
$pass="";
$server="localhost";
$a= $_POST['p1'];



$con=mysqli_connect($server,$user,$pass,$db);

if($con){
	
	$sql="delete from vote where candidateid='$a'";
	if($con->query($sql)===TRUE){
		echo"Record inserted";?>
		<script type="text/javascript">
            window.alert("Deleted Successfull");
            window.location="viewresult.php";
            </script>
			<?php 
}else{
	echo"connection error";
}
}
?>