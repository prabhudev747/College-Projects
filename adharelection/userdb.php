<?php 
$db="etender";
$user="root";
$pass="";
$server="localhost";
$a= $_POST['p1'];
$b=$_POST['p2'];



$con=mysqli_connect($server,$user,$pass,$db);

if($con){
	
	$sql="INSERT INTO send_request VALUES('$a', '$b')";
	if($con->query($sql)===TRUE){
		echo"Record inserted";?>
		<script type="text/javascript">
            window.alert("Tender Request sent Successfull");
            window.location="specilalist.php";
            </script>
			<?php 
}else{
	echo"connection error";
}
}
?>