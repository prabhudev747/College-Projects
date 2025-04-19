<?php 
$db="etender";
$user="root";
$pass="";
$server="localhost";
$a= $_POST['p1'];




$con=mysqli_connect($server,$user,$pass,$db);

if($con){
	
	$sql="delete from voter where adhar='$a'";
	if($con->query($sql)===TRUE){
		echo"Record inserted";?>
		<script type="text/javascript">
            window.alert("Candidate successfully Cancelled");
            window.location="viewuser.php";
            </script>
			<?php 
}else{
	echo"connection error";
}
}
?>