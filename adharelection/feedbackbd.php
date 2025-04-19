<?php 
$db="job";
$user="root";
$pass="";
$server="localhost";
$a= $_POST['p1'];
$b=$_POST['p2'];
$b=$_POST['p3'];


$con=mysqli_connect($server,$user,$pass,$db);

if($con){
	
	$sql="INSERT INTO userfeedback VALUES('$a', '$b', '$c')";
	if($con->query($sql)===TRUE){
		echo"Record inserted";?>
		<script type="text/javascript">
            window.alert("Feedback sent Successfull");
            window.location="userfeedback.php";
            </script>
			<?php 
}else{
	echo"connection error";
}
}
?>