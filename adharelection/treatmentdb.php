<?php 
$db="etender";
$user="root";
$pass="";
$server="localhost";
$a= $_POST['p1'];
$b=$_POST['p2'];
$c=$_POST['p11'];
$d= $_POST['p4'];
$e=$_POST['p5'];


$con=mysqli_connect($server,$user,$pass,$db);

if($con){
	
	$sql="INSERT INTO tenderfeedback VALUES('$a','$b','$c', '$d','$e')";
	if($con->query($sql)===TRUE){
		echo"Record inserted";?>
		<script type="text/javascript">
            window.alert("Your message sent successfully");
            window.location="addfeedback.php";
            </script>
			<?php 
}else{
	echo"connection error";
}
}
?>