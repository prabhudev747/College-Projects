<?php
include('navbar.php');
include('dbcon.php');
?>

<!DOCTYPE html>
<html>
<head>
    <style>
/*body {
  background-image: url('images/fest2.webp');
  width: 100%;
  height: 100%;
}*/
</style>
<script>
    function view_biathlon_registration()
    {
       // alert('view register');
        window.location.replace('view_biathlon_registeration.php');
    }
</script>


<title>Mahadasara 2022</title>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0 />
              <meta name=" description" content="" />
    <meta name="author" content=""/>
    
     <script>
        function fun()
        {
            alert("Rules:\n1.Sprint distance - 5 km run, 10 km cycling.\n2.The team should consist of two members’- one for run and one for cycling group can be of any combination.\n3.It is team choice to run and cycling depending upon their convenience.\n4.Running from Kuvempu Statue, University of Mysore to J K Ground.\n5.Cycling – J K ground to Maharaja Institute of Technology Mysore.\n6.The first 5km would be running the next 10km would be cycling.\n7.The team which comes first and touches the final point declared as winners followed by runners.\n8.All participants must come the white top.");
           //document.getElementById("rules").style.display = "block";
    
        }
        </script>
    
</head>
<body style="background-color:#ffccff;">
    
    <center><h2 style="  color:black;height:50px;padding-top:6px">Biathlon Registration</h2>
    <a href="support1.php" style="float:right;" ><span class="glyphicon glyphicon-earphone" >Support</span></a>
    </center>
   
        
        <div>
<!--<div>
            <img src="images/2022logo.jpeg" width="100%" style="max-height: 200px;">
        </div>-->
   
        
            <form class="form-horizontal" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"  enctype="multipart/form-data">
<fieldset>

<!-- Form Name -->
<!--<legend>First Participant</legend>-->
<legend style=" color: #FF5733" align='center'><b>First Participant</b>  </legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name1">Name</label>  
  <div class="col-md-4">
  <input id="name1" name="name1" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="gender1">Gender</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="gender-0">
      <input type="radio" name="gender1" id="gender-0" value="1" checked="checked" >
      Male
    </label> 
    <label class="radio-inline" for="gender-1">
      <input type="radio" name="gender1" id="gender-1" value="2">
      Female
    </label> 
    <label class="radio-inline" for="gender-2">
      <input type="radio" name="gender1" id="gender-2" value="3">
      Others
    </label>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="mob1">Age</label>  
  <div class="col-md-4">
  <input id="mob" name="age1" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>



<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="mob1">Mobile Number</label>  
  <div class="col-md-4">
  <input id="mob" name="phone1" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email1">Email ID</label>  
  <div class="col-md-4">
  <input id="email" name="email1" type="text" placeholder="" class="form-control input-md" required="">
    <span class="help-block" style="color:red">Please provide valid Email Id it will be used for downloading registration card and participation certificate</span>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="place1">Place Name</label>  
  <div class="col-md-4">
  <input id="place" name="place1" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

            <!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="file_upload1">Upload your Photo</label>
  <div class="col-md-4">
    <input id="fileToUpload1" name="fileToUpload1" class="input-file" type="file" required="">
     <p style="color:red;">Same photo will be used for certification purpose</p>
  </div>
</div>
            <!--<legend>Second Participant</legend>-->
            <legend style=" color: #FF5733" align='center'><b>Second Participant</b>  </legend>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name2">Name</label>  
  <div class="col-md-4">
  <input id="name" name="name2" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="gender2">Gender</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="gender-0">
      <input type="radio" name="gender2" id="gender-0" value="1" checked="checked">
      Male
    </label> 
    <label class="radio-inline" for="gender-1">
      <input type="radio" name="gender2" id="gender-1" value="2">
      Female
    </label> 
    <label class="radio-inline" for="gender-2">
      <input type="radio" name="gender2" id="gender-2" value="3">
      Others
    </label>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="mob1">Age</label>  
  <div class="col-md-4">
  <input id="mob" name="age2" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="mob2">Mobile Number</label>  
  <div class="col-md-4">
  <input id="mob" name="phone2" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email2">Email ID</label>  
  <div class="col-md-4">
  <input id="email" name="email2" type="text" placeholder="" class="form-control input-md" required="">
    <span class="help-block" style="color:red">Please provide valid Email Id it will be used for downloading registration card and participation certificate</span>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="place2">Place Name</label>  
  <div class="col-md-4">
  <input id="place" name="place2" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

            <!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="file_upload2">Upload your Photo</label>
  <div class="col-md-4">
    <input id="fileToUpload2" name="fileToUpload2" class="input-file" type="file">
    <p style="color:red;">Same photo will be used for certification purpose</p>
  </div>
</div>
            
<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-8">
    <button id="submit" name="register" class="btn btn-primary">Submit</button>
    <button id="rules" name="rules" class="btn btn-primary" onclick="fun()">Rules</button>
    <button id="submit" name="view_registration" class="btn btn-success" onclick="view_biathlon_registration()">Download Registration Card</button>  
    <p style="color:red;">Join Whatsapp group after Registration</p>
  </div>
</div>

</fieldset>
</form>


    

    
    

        </div>
    </body>
</html>

<?php 
if(isset($_POST['register']))
{
     include 'dbcon.php';
    //p1
    $name1=$_POST['name1'];
    $gender1=$_POST['gender1'];
      $email1=$_POST['email1'];
        $age1=$_POST['age1'];
         $place1=$_POST['place1'];
         $phone1=$_POST['phone1'];
         
         //$file11=$_POST['fileToUpload1'];
         
         //p2
           $name2=$_POST['name2'];
    $gender2=$_POST['gender2'];
     $age2=$_POST['age2'];
      $email2=$_POST['email2'];
         $place2=$_POST['place2'];
         $phone2=$_POST['phone2'];
        // $file12=$_POST['fileToUpload2'];
         
         $sql2="select * from biathlon where email1='$email1' || email2='$email2' || 'phoneno1'='$phone1' || 'phoneno2'='$phone2'";
         //echo $sql2;
         
         $result = mysqli_query($con,$sql2);
    $no_of_rows=mysqli_num_rows($result);
    
    if($no_of_rows>0)
    {
        echo("<script>alert(\"You have already Registered with this emailid and phonenos...(emailid and phoneno to be unique)\")</script>");
    }
         
         
//          $result1 = mysqli_query($con,$sql2);
//          if(mysqli_num_rows($result1)>0)
//          {
//              echo("<script>alert(\"You have Already Registered...(Email ID or Phone to be unique)...\n\n Try Again\")</script>");
//              
//          }
         else{
         
         
         
           
   $target_dir = "biathlon_photos/";
   $target_file1 = $target_dir . basename($_FILES["fileToUpload1"]["name"]);
   $target_file2 = $target_dir . basename($_FILES["fileToUpload2"]["name"]);
   
   $newfilename1=$target_dir;
   $newfilename2=$target_dir;
$uploadOk = 1;
$imageFileType1 = strtolower(pathinfo($target_file1,PATHINFO_EXTENSION));
$imageFileType2 = strtolower(pathinfo($target_file2,PATHINFO_EXTENSION));


$date = new DateTime();
$newfilename1.= $date->getTimestamp();
            $random=rand(10,1000);
            $newfilename1=$newfilename1."".$random.".".$imageFileType1;



$date = new DateTime();
$newfilename2.= $date->getTimestamp();
            $random=rand(10,1000);
            $newfilename2=$newfilename2."".$random.".".$imageFileType2;
// Check if image file is a actual image or fake image
//if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload1"]["tmp_name"]);
    $check = getimagesize($_FILES["fileToUpload2"]["tmp_name"]);
    if($check !== false || check !=false) {
        //echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
//}
// Check if file already exists
//if (file_exists($target_file)) {
//    echo "Sorry, file already exists.";
//    $uploadOk = 0;
//}
// Check file size
if ($_FILES["fileToUpload1"]["size"] > 50000000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType1 != "jpg" && $imageFileType1 != "png" && $imageFileType1 != "jpeg"
&& $imageFileType1 != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload1"]["tmp_name"], $newfilename1)) {
     //   echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        
        //Logic for data insertion
        move_uploaded_file($_FILES["fileToUpload2"]["tmp_name"], $newfilename2);
       // $sql = "insert into student(usn,name,email,gender,password,branchid,photo,sem,section,phone) values('$usn','$name','$email','$gender','$password','$branch','$newfilename','$sem','$section','$phone')";
        $sql="insert into biathlon(name1,gender1,age1,place1,phoneno1,email1,file1,name2,gender2,age2,place2,phoneno2,email2,file2) values('$name1','$gender1','$age1','$place1','$phone1','$email1','$newfilename1','$name2','$gender2','$age2','$place2','$phone2','$email2','$newfilename2')";
        
     
       // echo $sql;
        
    $result = mysqli_query($con,$sql);
if($result)
{
  echo '<script>alert("Biathlon Registration Successfull  \\n")</script>';
  echo "<script>window.location.replace('view_biathlon_registeration.php')</script>";
   // echo "<b>You have Succesfully Registered, Login Register For Events (Sports/Cultural) <b>";
}
else{
     echo("<script>alert(\"Registration Failed...\n\n Try Again\")</script>");
}
        
        
        
        
        
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
         
         
}//end else
}

?>
    

