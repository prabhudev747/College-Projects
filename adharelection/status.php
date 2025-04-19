<?php 
$db="etender";
$user="root";
$pass="";
$server="localhost";
$a= $_POST['p11'];
$h=$_POST['p1'];
$g=$_POST['p2'];
$c=$_POST['p3'];
$d=$_POST['p4'];
$e=$_POST['p5'];
$f=$_POST['p6'];




$con=mysqli_connect($server,$user,$pass,$db);

if($con){
	
	$sql="INSERT INTO status VALUES('$a','$h','$g','$c', '$d','$e','$f')";
	if($con->query($sql)===TRUE){
		echo"Record inserted";?>
		<script type="text/javascript">
            window.alert("Your message sent successfully");
            window.location="currentstatus.php";
            </script>
			<?php 
}else{
	echo"connection error";
}
}
?>