<?php 
$db="adhaar";
$user="root";
$pass="";
$server="localhost";
$a= $_POST['p1'];
$b=$_POST['p2'];
$c= $_POST['p3'];
$d=$_POST['p4'];
$dd=$_POST['p44'];
$e=$_POST['p5'];

$con=mysqli_connect($server,$user,$pass,$db);

if($con){
	
	$sql="INSERT INTO candidate VALUES('$a', '$b', '$c', '$d', '$dd', '$e')";
	if($con->query($sql)===TRUE){
		echo"Record inserted";?>
		<script type="text/javascript">
            window.alert("Tender Request sent Successfully");
            window.location="addcandidate.php";
            </script>
			<?php 
}else{
	echo"connection error";
}
}
?>